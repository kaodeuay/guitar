<?php
if(empty(trim($_POST["sdid"]))){
// URL doesn't contain id parameter. Redirect to error page
// header("location: error.php");
exit();
}
else{
// Include database connection file
require_once "dbconnect.php";
$sd_id = $_POST["sdid"];
$pf = $_POST["pf"];
$f_name = $_POST["fname"];
$l_name = $_POST["lname"];
$sch = $_POST["sch"];
$pro = $_POST["pro"];
$advs = $_POST["advs"];
$dean = $_POST["dean"];
$no = $_POST["no"];
$dt = $_POST["dt"];
$tm = $_POST["tm"];
$smt = $_POST["smt"];
$acdm = $_POST["acdm"];
$sdl = $_POST["sdl"];
$sg = $_POST["sg"];
$mb = $_POST["mb"];
$hdr = $_POST["hdr"];
$psd = $_POST["psd"];
$rs = $_POST["rs"];
$sql="UPDATE student_api SET StudentID = '$sd_id', Prefix = '$pf', FirstName = '$f_name', LastName = '$l_name', School = '$sch'
, Program = '$pro', Advisor = '$advs', Dean = '$dean', No_sd = '$no', Date_sd = '$dt', Time_sd = '$tm', Semester = '$smt'
, AcademicYear = '$acdm', StudentLevel = '$sdl', StudyIn = '$sg', MobilePhone = '$mb', ThePresident = '$psd', Reasons = '$rs'
, Head_of_Division_of_Registrer = '$hdr' 
WHERE StudentID = $sd_id";
$result = mysqli_query($conn,$sql);
if (!$result)
{
    die('Error: ' . mysql_error($conn));
}
else {
    header("location: read_table.php");
}
mysqli_close($conn);
}
?>