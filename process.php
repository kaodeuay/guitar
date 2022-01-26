<?php include 'connect.php'; ?>
<?php
//  print_r($_POST);
$userid = $_POST['userid'];
$pass = $_POST['pass'];
$nname = $_POST['nname'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$brithdate = $_POST['brithdate'];
$numhome = $_POST['numhome'];
$moo = $_POST['moo'];
$subdistrict = $_POST['subdistrict'];
$district = $_POST['district'];
$province = $_POST['province'];
$postage = $_POST['postage'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$gen = $_POST['gen'];
$course = $_POST['course'];
$major = $_POST['major'];
$work = $_POST['work'];
$position = $_POST['position'];
$workdate = $_POST['workdate'];

mysqli_query($connect, "INSERT INTO member (userid, pass, nname, name, sex, brithdate, numhome, moo, subdistrict, district, province, postage, phone, mail, gen, course, major, work, position, workdate) VALUES ('$userid','$pass','$nname','$name','$sex','$brithdate','$numhome','$moo','$subdistrict','$district','$province','$postage','$phone','$mail','$gen','$course','$major','$work','$position','$workdate')");
?>