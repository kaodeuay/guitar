<?php require_once "connect.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css">
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
    <title>รายงานข้อมูลศิษย์เก่า | สมาคมศิษย์เก่าวิทยาลัยเทคโนโลยีทางการแพทย์และสาธารณสุขกาญจนาภิเษก</title>
</head>

<body>
    <div class="bg-img">
        <nav class="navbar navbar-light justify-content-between">
            <img src="Picture/logo.png" alt="" height="110">
        </nav>
    </div>
    <div class="card" style="background-color: #2F89FC;">
        <div class="card-body">
            <nav class="nav nav-pills nav-justified">
                <a class="nav-item nav-link" href="/guitarPJ/index1.php">หน้าแรก</a>
                <a class="nav-item nav-link" href="/guitarPJ/register.php">ลงทะเบียนศิษย์เก่า</a>
                <a class="nav-item nav-link active" href="/guitarPJ/reportalumni.php">รายงานข้อมูลศิษย์เก่า</a>
                <a class="nav-item nav-link" href="/guitarPJ/login.php">แก้ไขข้อมูล</a>
            </nav>
        </div>
    </div>

    <div class="container mb-4 mt-4">
        <div class="content">
            <h1>รายงานข้อมูลศิษย์เก่า</h1>
            <div class="containerunderline"></div>
            <div class="container bg-light">
                <div class="card-body">
                    <form action="memberalumni.php" method="get" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">รหัสนักศึกษา</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="value" placeholder="เช่น 6131302010">
                            </div>
                            <button type="submit" class="btn btn-primary" name="search">ค้นหา</button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="col">
                    <br>
                    <img src="Picture/logo2.png" alt="" height="150" class="center mb-4">
                    <h5 class="text-center">รายงานข้อมูลศิษย์เก่าของสมาคมศิษย์เก่า</h5>
                    <h5 class="text-center">วิทยาลัยเทคโนโลยีทางการแพทย์และสาธารณสุขกาญจนาภิเษก</h5>
                </div>
                <br>
                <form>
                    <?php

                    if (isset($_GET['id'])) {

                        $select_post = "SELECT * FROM member WHERE id ";

                        $run_post = mysqli_query($connect, $select_post);

                        while ($row = mysqli_fetch_array($run_post)) {
                            $userid = $row['userid'];
                            $pass = $row['pass'];
                            $nname = $row['nname'];
                            $fullname = $row['fullname'];
                            $sex = $row['sex'];
                            $brithdate = $row['brithdate'];
                            $numhome = $row['numhome'];
                            $moo = $row['moo'];
                            $subdistrict = $row['subdistrict'];
                            $district = $row['district'];
                            $province = $row['province'];
                            $postage = $row['postage'];
                            $phone = $row['phone'];
                            $mail = $row['mail'];
                            $gen = $row['gen'];
                            $course = $row['course'];
                            $major = $row['major'];
                            $work = $row['work'];
                            $position = $row['position'];
                            $workdate = $row['workdate'];
                        }



                    ?>
                        <div class="form-row">
                            <div class="input-group mb-3">
                            </div>
                            <div class="input-group mb-3 col-6">
                                <label for="To the"><b>รหัสนักศึกษา</b></label>
                                <p class="ml-3"><?php echo $userid; ?></p>
                            </div>
                            <div class="input-group mb-3 col-4">
                                <label for="To the"><b>คำนำหน้าชื่อ</b></label>
                                <p class="ml-3"><?php echo $nname; ?></p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-group mb-3">
                            </div>
                            <div class="input-group mb-3 col-6">
                                <label for="To the"><b>ชื่อ-นามสกุล</b></label>
                                <p class="ml-3"><?php echo $fullname; ?></p>
                            </div>
                            <div class="input-group mb-3 col-4">
                                <label for="To the"><b>เพศ</b></label>
                                <p class="ml-3"><?php echo $sex; ?></p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-group mb-3">
                            </div>
                            <div class="input-group mb-3 col-6">
                                <label for="To the"><b>วันเดือนปีเกิด</b></label>
                                <p class="ml-3"><?php echo $brithdate; ?></p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-group mb-3">
                            </div>
                            <div class="input-group mb-3 col-3">
                                <label for="To the"><b>บ้านเลขที่</b></label>
                                <p class="ml-3"><?php echo $numhome; ?></p>
                            </div>
                            <div class="input-group mb-3 col-3">
                                <label for="To the"><b>หมู่</b></label>
                                <p class="ml-3"><?php echo $moo; ?></p>
                            </div>
                            <div class="input-group mb-3 col-4">
                                <label for="To the"><b>ตำบล</b></label>
                                <p class="ml-3"><?php echo $subdistrict; ?></p>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="input-group mb-3">
                            </div>
                            <div class="input-group mb-3 col-3">
                                <label for="To the"><b>อำเภอ</b></label>
                                <p class="ml-3"><?php echo $district; ?></p>
                            </div>
                            <div class="input-group mb-3 col-3">
                                <label for="To the"><b>จังหวัด</b></label>
                                <p class="ml-3"><?php echo $province; ?></p>
                            </div>
                            <div class="input-group mb-3 col-4">
                                <label for="To the"><b>รหัสไปรษณีย์</b></label>
                                <p class="ml-3"><?php echo $postage; ?></p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-group mb-3">
                            </div>
                            <div class="input-group mb-3 col-6">
                                <label for="To the"><b>เบอร์โทร</b></label>
                                <p class="ml-3"><?php echo $phone; ?></p>
                            </div>
                            <div class="input-group mb-3 col-4">
                                <label for="To the"><b>อีเมล</b></label>
                                <p class="ml-3"><?php echo $mail; ?></p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-group mb-3">
                            </div>
                            <div class="input-group mb-3 col-6">
                                <label for="To the"><b>รุ่น</b></label>
                                <p class="ml-3"><?php echo $gen; ?></p>
                            </div>
                            <div class="input-group mb-3 col-4">
                                <label for="To the"><b>หลักสูตร</b></label>
                                <p class="ml-3"><?php echo $course; ?></p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-group mb-3">
                            </div>
                            <div class="input-group mb-3 col-6">
                                <label for="To the"><b>สาขา</b></label>
                                <p class="ml-3"><?php echo $major; ?></p>
                            </div>
                            <div class="input-group mb-3 col-4">
                                <label for="To the"><b>โรงพยาบาล</b></label>
                                <p class="ml-3"><?php echo $work; ?></p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-group mb-3">
                            </div>
                            <div class="input-group mb-3 col-6">
                                <label for="To the"><b>ตำแหน่ง</b></label>
                                <p class="ml-3"><?php echo $position; ?></p>
                            </div>
                            <div class="input-group mb-3 col-4">
                                <label for="To the"><b>วันเข้าทำงาน</b></label>
                                <p class="ml-3"><?php echo $workdate; ?></p>
                            </div>
                        </div>
                    <?php } ?>
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
</body>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</html>