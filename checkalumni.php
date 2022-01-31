<?php
require_once "connect.php";
session_start();
if (!isset($_SESSION['userid'])) {
    header("location: login.php");
} else {
    $edit_id = $_SESSION['userid'];
    $edit_query = "SELECT * FROM member WHERE userid = '$edit_id'";
    // echo ($edit_query);
    $run_edit = mysqli_query($connect, $edit_query);

    while ($edit_row = mysqli_fetch_array($run_edit)) {
        $post_userid = $edit_row['userid'];
        $post_pass = $edit_row['pass'];
        $post_nname = $edit_row['nname'];
        $post_fullname = $edit_row['fullname'];
        $post_sex = $edit_row['sex'];
        $post_brithdate = $edit_row['brithdate'];
        $post_numhome = $edit_row['numhome'];
        $post_moo = $edit_row['moo'];
        $post_subdistrict = $edit_row['subdistrict'];
        $post_district = $edit_row['district'];
        $post_province = $edit_row['province'];
        $post_postage = $edit_row['postage'];
        $post_phone = $edit_row['phone'];
        $post_mail = $edit_row['mail'];
        $post_gen = $edit_row['gen'];
        $post_course = $edit_row['course'];
        $post_major = $edit_row['major'];
        $post_work = $edit_row['work'];
        $post_position = $edit_row['position'];
        $post_workdate = $edit_row['workdate'];
    }

    if (isset($_POST['submit'])) {
        $update_id = $_GET['edit_form'];
        $post_pass = $_POST['pass'];
        $post_nname = $_POST['nname'];
        $post_fullname = $_POST['fullname'];
        $post_sex = $_POST['sex'];
        $post_brithdate = $_POST['brithdate'];
        $post_numhome = $_POST['numhome'];
        $post_moo = $_POST['moo'];
        $post_subdistrict = $_POST['subdistrict'];
        $post_district = $_POST['district'];
        $post_province = $_POST['province'];
        $post_postage = $_POST['postage'];
        $post_phone = $_POST['phone'];
        $post_mail = $_POST['mail'];
        $post_gen = $_POST['gen'];
        $post_course = $_POST['course'];
        $post_major = $_POST['major'];
        $post_work = $_POST['work'];
        $post_position = $_POST['position'];
        $post_workdate = $_POST['workdate'];

        $update_query = "UPDATE member SET userid = '$post_userid', pass = '$post_pass', nname = '$post_nname', fullname = '$post_fullname', sex = '$post_sex', brithdate = '$post_brithdate', numhome = '$post_numhome', moo = '$post_moo', subdistrict = '$post_subdistrict', district = '$post_district', province = '$post_province', postage = '$post_postage', phone = '$post_phone',mail = '$post_mail', gen = '$post_gen', course = '$post_course', major = '$post_major', work = '$post_work', position = '$post_position', workdate = '$post_workdate' WHERE userid = '$update_id'";

        if (mysqli_query($connect, $update_query)) {
            echo "<script>alert('แก้ไขข้อมูลสำเร็จ!');</script>";
            // header("location: checkalumni.php");
        } else {
            echo "<script>alert('เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง!');</script>";
        }
    }
?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="mystyle.css">
        <title>แก้ไขข้อมูล | สมาคมศิษย์เก่าวิทยาลัยเทคโนโลยีทางการแพทย์และสาธารณสุขกาญจนาภิเษก</title>
    </head>

    <body>
        <div class="bg-img">
            <nav class="navbar navbar-light justify-content-between">
                <img src="Picture/logo.png" alt="" height="110">
                <a href="index1.php"><button class="btn" style="background-color: #F52E00;">ออกจากระบบ</button></a>
            </nav>
        </div>
        <div class="bg-color">
            <div class="card" style="background-color: #2F89FC;">
                <div class="card-body">
                    <nav class="nav nav-pills nav-justified">
                        <a class="nav-item nav-link" href="/guitar/index1.php">หน้าแรก</a>
                        <a class="nav-item nav-link" href="/guitar/register.php">ลงทะเบียนศิษย์เก่า</a>
                        <a class="nav-item nav-link" href="/guitar/reportalumni.php">รายงานข้อมูลศิษย์เก่า</a>
                        <a class="nav-item nav-link active" href="">แก้ไขข้อมูล</a>
                    </nav>
                </div>
            </div>

            <div class="container mb-4 mt-4">
                <div class="content">
                    <h1>แก้ไขข้อมูลศิษย์เก่า</h1>
                    <div class="containerunderline">
                    </div>
                    <div class="row">
                        <div class="col-sm-4 mt-4">
                            <h3>ประวัติส่วนตัว</h3>
                        </div>
                        <div class="col-sm-8">
                            <form action="checkalumni.php?edit_form=<?php echo $post_userid ?>" method="post" enctype="multipart/form-data">
                                <div class="row g-3 mt-4">
                                    <div class="col-md-12 position-relative">
                                        <label for="validationTooltip04" class="form-label">รหัสนักศึกษา/บัญชีผู้ใช้</label>
                                        <input type="text" class="form-control" id="validationDefault02" name="userid" value="<?php echo $post_userid; ?>" disabled>
                                    </div>
                                    <div class="col-md-12 position-relative">
                                        <label for="validationTooltip04" class="form-label">รหัสผ่าน</label>
                                        <input type="password" class="form-control" id="validationDefault02" name="pass" value="<?php echo $post_pass; ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationDefault01" class="form-label">คำนำหน้าชื่อ</label>
                                        <input type="text" class="form-control" id="validationDefault01" name="nname" value="<?php echo $post_nname; ?>">
                                    </div>
                                    <div class="col-md-8">
                                        <label for="validationDefault02" class="form-label">ชื่อ</label>
                                        <input type="text" class="form-control" id="validationDefault02" name="fullname" value="<?php echo $post_fullname; ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationDefault02" class="form-label">เพศ</label>
                                        <input type="text" class="form-control" id="validationDefault02" name="sex" value="<?php echo $post_sex; ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationDefaultUsername" class="form-label">วันเดือนปีเกิด</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" name="brithdate" value="<?php echo $post_brithdate; ?>" aria-describedby="inputGroupPrepend2">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationDefault03" class="form-label">บ้านเลขที่</label>
                                        <input type="text" class="form-control" id="validationDefault03" name="numhome" value="<?php echo $post_numhome; ?>" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationDefault03" class="form-label">หมู่</label>
                                        <input type="text" class="form-control" id="validationDefault03" name="moo" value="<?php echo $post_moo; ?>" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="validationDefault03" class="form-label">ตำบล</label>
                                        <input type="text" class="form-control" id="validationDefault03" name="subdistrict" value="<?php echo $post_subdistrict; ?>" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationDefault03" class="form-label">อำเภอ</label>
                                        <input type="text" class="form-control" id="validationDefault03" name="district" value="<?php echo $post_district; ?>" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationDefault03" class="form-label">จังหวัด</label>
                                        <input type="text" class="form-control" id="validationDefault03" name="province" value="<?php echo $post_province; ?>" required>
                                    </div>
                                    <div class="col-4">
                                        <label for="validationDefault03" class="form-label">รหัสไปรณีย์</label>
                                        <input type="text" class="form-control" id="validationDefault03" name="postage" value="<?php echo $post_postage; ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationDefault02" class="form-label">เบอร์โทร</label>
                                        <input type="text" class="form-control" id="validationDefault02" name="phone" value="<?php echo $post_phone; ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationDefault02" class="form-label">อีเมล</label>
                                        <input type="text" class="form-control" id="validationDefault02" name="mail" value="<?php echo $post_mail; ?>" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationDefault03" class="form-label">รุ่น</label>
                                        <input type="text" class="form-control" id="validationDefault03" name="gen" value="<?php echo $post_gen; ?>" required>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="col-md-12 position-relative">
                                            <label for="validationTooltip04" class="form-label">หลักสูตร</label>
                                            <input type="text" class="form-control" id="validationDefault02" name="course" value="<?php echo $post_course; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="col-md-12 position-relative">
                                            <label for="validationTooltip04" class="form-label">สาขา</label>
                                            <input type="text" class="form-control" id="validationDefault02" name="major" value="<?php echo $post_major; ?>" required>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 mt-4">
                            <h3>การทำงาน</h3>
                        </div>
                        <div class="col-sm-8">
                            <div class="row g-3 mt-4">
                                <div class="col-md-12 position-relative">
                                    <label for="validationTooltip04" class="form-label">โรงพยาบาล</label>
                                    <input type="text" class="form-control" id="validationDefault02" name="work" value="<?php echo $post_work; ?>" required>
                                </div>
                                <div class="col-md-12 position-relative">
                                    <label for="validationTooltip04" class="form-label">ตำแหน่ง</label>
                                    <input type="text" class="form-control" id="validationDefault02" name="position" value="<?php echo $post_position; ?>" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationDefault02" class="form-label">วันเข้าทำงาน</label>
                                    <input type="date" class="form-control" name="workdate" value="<?php echo $post_workdate; ?>" aria-describedby="inputGroupPrepend2">
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block mt-4">บันทึกข้อมูล</button>

                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <img src="Picture/logo.png" alt="" height="110">
                        </ul>
                        <div class="column">

                            <li class="list-inline-item">ติดต่อเราได้ที่</li>
                            <li class="list-inline-item">โทร 02-1501203-9</li>
                            <li class="list-inline-item">อีเมล kmpht@kmpht.ac.th</li>
                        </div>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="https://www.facebook.com/kmphtlife/?_rdc=1&_rdr"><img src="Picture/facebook.svg" alt="" width="30" height="30"></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="http://localhost/guitarPJ/index1.php?#!"><img src="Picture/twitter.svg" alt="" width="30" height="30"></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="http://localhost/guitarPJ/index1.php?#!"><img src="Picture/youtube.svg" alt="" width="30" height="30"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        









    </body> <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    </html>
<?php } ?>