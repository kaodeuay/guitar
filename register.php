<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
    <title>ลงทะเบียนศิษย์เก่า | สมาคมศิษย์เก่าวิทยาลัยเทคโนโลยีทางการแพทย์และสาธารณสุขกาญจนาภิเษก</title>
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
                <a class="nav-item nav-link" href="/guitar/index1.php">หน้าแรก</a>
                <a class="nav-item nav-link active" href="/guitar/register.php">ลงทะเบียนศิษย์เก่า</a>
                <a class="nav-item nav-link" href="/guitar/reportalumni.php">รายงานข้อมูลศิษย์เก่า</a>
                <a class="nav-item nav-link" href="/guitar/checkalumni.php">แก้ไขข้อมูล</a>
            </nav>
        </div>
    </div>

    <div class="container mb-4 mt-4">
        <div class="content">
            <h1>สมัครสมาชิก/ลงทะเบียนศิษย์เก่า</h1>
            <div class="containerunderline">
            </div>
            <div class="row">
                <div class="col-sm-4 mt-4">
                    <h3>สมัครสมาชิก</h3>
                </div>
                <div class="col-sm-8">
                    <form class="row g-3 mt-4" action="process.php" method="POST">
                        <div class="col-md-12 position-relative">
                            <label for="validationTooltip04" class="form-label">รหัสนักศึกษา/บัญชีผู้ใช้</label>
                            <input type="text" class="form-control" name="userid" value="">
                            <!--//required -->
                        </div>
                        <div class="col-md-12 position-relative">
                            <label for="validationTooltip04" class="form-label">รหัสผ่าน</label>
                            <input type="password" class="form-control" name="pass" value="">
                        </div>
                        <div class="col-md-12">
                            <label for="validationDefault02" class="form-label">ยืนยันรหัสผ่าน</label>
                            <input type="password" class="form-control" name="pass" value="">
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 mt-4">
                    <h3>ประวัติส่วนตัว</h3>
                </div>
                <div class="col-sm-8">
                    <div class="row g-3 mt-4">
                        <div class="col-md-4">
                            <label for="validationDefault01" class="form-label">คำนำหน้าชื่อ</label>
                            <input type="text" class="form-control" name="nname" value="">
                        </div>
                        <div class="col-md-8">
                            <label for="validationDefault02" class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" name="name" value="">
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault02" class="form-label">เพศ</label>
                            <input type="text" class="form-control" name="sex" value="">
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefaultUsername" class="form-label">วันเดือนปีเกิด</label>
                            <div class="input-group">
                                <input type="date" class="form-control" name="brithdate" aria-describedby="inputGroupPrepend2">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault03" class="form-label">บ้านเลขที่</label>
                            <input type="text" class="form-control" name="numhome">
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault03" class="form-label">หมู่</label>
                            <input type="text" class="form-control" name="moo">
                        </div>
                        <div class="col-6">
                            <label for="validationDefault03" class="form-label">ตำบล</label>
                            <input type="text" class="form-control" name="subdistrict">
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label">อำเภอ</label>
                            <input type="text" class="form-control" name="district">
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label">จังหวัด</label>
                            <input type="text" class="form-control" name="province">
                        </div>
                        <div class="col-4">
                            <label for="validationDefault03" class="form-label">รหัสไปรณีย์</label>
                            <input type="text" class="form-control" name="postage">
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault02" class="form-label">เบอร์โทร</label>
                            <input type="text" class="form-control" name="phone" value="">
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault02" class="form-label">อีเมล</label>
                            <input type="text" class="form-control" name="mail" value="">
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault03" class="form-label">รุ่น</label>
                            <input type="text" class="form-control" name="gen">
                        </div>
                        <div class="col-md-3">
                            <div class="col-md-12 position-relative">
                                <label for="validationTooltip04" class="form-label">หลักสูตร</label>
                                <input type="text" class="form-control" name="course" value="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="col-md-12 position-relative">
                                <label for="validationTooltip04" class="form-label">สาขา</label>
                                <input type="text" class="form-control" name="major" value="">
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
                            <input type="text" class="form-control" name="work" value="">
                        </div>
                        <div class="col-md-12 position-relative">
                            <label for="validationTooltip04" class="form-label">ตำแหน่ง</label>
                            <input type="text" class="form-control" name="position" value="">
                        </div>
                        <div class="col-md-12">
                            <label for="validationDefault02" class="form-label">วันเข้าทำงาน</label>
                            <input type="date" class="form-control" name="workdate" value="">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block mt-4">บันทึกข้อมูล</button>
                    </div>
                    </form>

                </div>
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
                            <a href="http://localhost/guitar/index1.php?#!"><img src="Picture/twitter.svg" alt="" width="30" height="30"></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="http://localhost/guitar/index1.php?#!"><img src="Picture/youtube.svg" alt="" width="30" height="30"></a>
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