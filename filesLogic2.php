<?php

date_default_timezone_set('Asia/Kuala_Lumpur');
require ('db.php');


// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'fyp_1819');

$sql="SELECT * FROM sub1homework1version2";
$result = mysqli_query($conn,$sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
$status = "";
// Uploads files
if (isset($_POST['save'])&& isset($_FILES['myfile2'])) { // if save button on the form is clicked
    // name of the uploaded file
	session_start();
    $filename = $_FILES['myfile2']['name'];

    // destination of the file on the server
    $destination = 'uploads2/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file2 = $_FILES['myfile2']['tmp_name'];
    $size = $_FILES['myfile2']['size'];
	$trn_date = date("Y-m-d H:i:s");

	$submittedby = $_SESSION['student'];
	
    if (!in_array($extension, ['zip', 'pdf', 'docx','doc','pptx','xlsx'])) {
		Print'<script>alert("Your file extension must be .zip, .pdf, .docx, .doc .xlsx, or .pptx");</script>';
		Print'<script>window.location.assign("stu1subject1.php");</script>';
   
    } elseif ($_FILES['myfile2']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        Print'<script>alert("File too large!");</script>';
		Print'<script>window.location.assign("stu1subject1.php");</script>';
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file2, $destination)) {
            $ins_query = "INSERT INTO sub1homework1version2 (name, size, downloads, trn_date, submittedby) 
			VALUES ('$filename', '$size', 0,'$trn_date','$submittedby')";
            if (mysqli_query($conn, $ins_query)) {
            Print'<script>alert("File uploaded successfully !");</script>';
			Print'<script>window.location.assign("stu1subject1.php");</script>';
            }
        } else {
            Print'<script>alert("Failed to upload files !");</script>';
			Print'<script>window.location.assign("stu1subject1.php");</script>';
        }
    }
}


//Download files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];
	

    // fetch file to download from database
    $sql = "SELECT * FROM sub1homework1version2 WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file2 = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file2['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file2['name']));
        readfile('uploads/' . $file2['name']);

        // Now update downloads count
        $newCount = $file2['downloads'] + 1;
        $updateQuery = "UPDATE sub1homework1version2 SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
?>