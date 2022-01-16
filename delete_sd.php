<?php
if(empty(trim($_GET["sdid"]))){
// URL doesn't contain id parameter. Redirect to error page
// header("location: error.php");
exit();
}
else{
// Include database connection file
require_once "dbconnect.php";
$sd_id = $_GET["sdid"];
$sql="DELETE FROM student_api WHERE StudentID = $sd_id";
$result = mysqli_query($conn,$sql);
if (!$result){
    die('Error: ' . mysqli_error($conn));
}
else {
    header("location: read_table.php");
}
mysqli_close($conn);
}
?>