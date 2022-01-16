<?php
// Include database connection file
require_once "dbconnect.php";
// Get data from input form
$sd_id = $_POST["sdid"];
$f_name = $_POST["fname"];
$l_name = $_POST["lname"];
$pro = $_POST["pro"];
$advs = $_POST["advs"];
$no = $_POST["no"];
$dt = $_POST["dt"];
$tm = $_POST["tm"];
$acdm = $_POST["acdm"];
$sg = $_POST["sg"];
$mb = $_POST["mb"];
$cc = $_POST["cc"];
$ct = $_POST["ct"];
$cs = $_POST["cs"];
$is = $_POST["is"];
// Insert data
$sql="INSERT INTO student_api(StudentID, Prefix, FirstName, LastName, School, Program, Advisor, Dean, 
No_sd, Date_sd, Time_sd, Semester, AcademicYear, StudentLevel, StudyIn, MobilePhone, 
ThePresident, Reasons, Head_of_Division_of_Registrer) VALUES
($sd_id, '$f_name', '$l_name', '$pro', '$advs', '$no', '$dt', '$tm', '$acdm', 
'$sg', '$mb', '$cc', '$ct', '$cs', '$is')";
$result=mysqli_query($conn, $sql);
if (!$result){
    die('Error: ' . mysqli_error($conn));
}
else {
    header("location: read_table.php");
}
mysqli_close($conn);
?>