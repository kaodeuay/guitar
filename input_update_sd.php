<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Update Student</title>
</head>

<body>
    <br><br><br><br><br>
<?php
// Include database connection file
require_once "dbconnect.php";
$sd_id = $_GET['sdid'];
$sql = "SELECT StudentID, Prefix, FirstName, LastName, School, Program, Advisor, Dean, 
No_sd, Date_sd, Time_sd, Semester, AcademicYear, StudentLevel, StudyIn, MobilePhone, 
Reasons, Head_of_Division_of_Registrer, ThePresident FROM student_api WHERE StudentID = $sd_id";
$result = mysqli_query($conn,$sql);
?>
<form action="update_sd.php" method="POST">
<?php
while($row = mysqli_fetch_assoc($result)) {
    $pf = $row["Prefix"];
    $f_name = $row["FirstName"];
    $l_name = $row["LastName"];
    $sch = $row["School"];
    $pro = $row["Program"];
    $advs = $row["Advisor"];
    $dean = $row["Dean"];
    $no = $row["No_sd"];
    $dt = $row["Date_sd"];
    $tm = $row["Time_sd"];
    $smt = $row["Semester"];
    $acdm = $row["AcademicYear"];
    $sdl = $row["StudentLevel"];
    $sg = $row["StudyIn"];
    $mb = $row["MobilePhone"];
    $hdr = $row["Head_of_Division_of_Registrer"];
    $psd = $row["ThePresident"];
    $rs = $row["Reasons"];
}
?>
<div class="container">
        <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <img src="Picture/logo-mfu.png" class="rounded" alt="MFU logo" width="120">
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col">
                    <h5 class="text-center">DIVISION OF REGISTRAR, MAE FAH LUANG UNIVERSITY</h5>
                    <h5 class="text-center">Official Request Form For Being Reinstated to Student Status</h5>
                    <h6 class="text-center">Update Student</h6>
                </div>
            </div>
            <div class="form-row">
                <div class="input-group mb-3 col-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="no">No</label>
                    </div>
                    <select class="custom-select" id="no" name="no">
                        <option selected><?= $no ?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="input-group mb-3 col-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Date</span>
                    </div>
                    <input type="date" class="form-control" aria-label="dt" aria-describedby="dt" name="dt" value="<?= $dt ?>">
                </div>
                <div class="input-group mb-3 col-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Time</span>
                    </div>
                    <input type="time" class="form-control" aria-label="tm" aria-describedby="tm" name="tm" value="<?= $tm ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="input-group mb-3 col-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="smt">Semester</label>
                    </div>
                    <select class="custom-select" id="smt" name="smt">
                        <option selected><?= $smt ?></option>
                        <option value="first">First</option>
                        <option value="second">Second</option>
                        <option value="summer">Summer</option>
                    </select>
                </div>
                <div class="input-group mb-3 col-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="acdm">Academic year</label>
                    </div>
                    <select class="custom-select" id="acdm" name="acdm">
                        <option selected><?= $acdm ?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="input-group mb-3 col-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="sch">To the Dean of school</label>
                    </div>
                    <select class="custom-select" id="sch" name="sch">
                        <option value="Liberal Arts">Liberal Arts</option>
                        <option value="Science">Science</option>
                        <option value="Management">Management</option>
                        <option value="Information Technology">Information Technology</option>
                        <option value="Argo-Industry">Argo-Industry</option>
                        <option value="Law">Law</option>
                        <option value="Cosmetic Science">Cosmetic Science</option>
                        <option value="Health Science">Health Science</option>
                        <option value="Nursing">Nursing</option>
                        <option value="Medicine">Medicine</option>
                        <option value="Dentistry">Dentistry</option>
                        <option value="Social Innovation">Social Innovation</option>
                        <option value="Sinology">Sinology</option>
                        <option value="Integrative Medicine">Integrative Medicine</option>
                    </select>
                </div>
                <div class="input-group mb-3 col-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="sdl">Student level</label>
                    </div>
                    <select class="custom-select" id="sdl" name="sdl">
                        <option selected><?= $sdl ?></option>
                        <option value="Undergraduate student">Undergraduate student</option>
                        <option value="Graduate student">Graduate student</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="input-group mb-3 col-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Prefix</span>
                    </div>
                    <select class="custom-select" id="pf" name="pf">
                        <option selected name="pf"><?= $pf ?></option>
                        <option value="MISS">MISS</option>
                        <option value="MR.">MR.</option>
                    </select>
                </div>
                <div class="input-group mb-3 col-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">First Name</span>
                    </div>
                    <input type="text" aria-label="sfname" class="form-control"name="fname" value="<?= $f_name ?>">
                </div>
                <div class="input-group mb-3 col-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Last Name</span>
                    </div>
                    <input type="text" aria-label="slname" class="form-control" name="lname" value="<?= $l_name ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="input-group mb-3 col-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="sid">Student ID</span>
                    </div>
                    <input type="text" class="form-control" aria-label="sdid" aria-describedby="sdid" name="sdid" value="<?= $sd_id ?>">
                </div>
                <div class="input-group mb-3 col-8">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Study in/graduated from School of</span>
                    </div>
                    <input type="text" class="form-control" aria-label="sg" aria-describedby="sg" name="sg" value="<?= $sg ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="input-group mb-3 col-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="sid">Program of</span>
                    </div>
                    <input type="text" class="form-control" aria-label="pro" aria-describedby="pro" name="pro" value="<?= $pro ?>">
                </div>
                <div class="input-group mb-3 col-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="sid">Mobile Phone</span>
                    </div>
                    <input type="text" class="form-control" aria-label="mb" aria-describedby="mb" name="mb" value="<?= $mb ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="input-group mb-3 col-12">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Reason(s) for re-entering are</span>
                    </div>
                    <textarea class="form-control" id="rs" rows="3" name="rs" value="<?= $rs ?>"></textarea><br>
                </div>
            </div>
            <div class="form-row">
                <div class="input-group mb-3 col-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="advs">Advisor</span>
                    </div>
                    <input type="text" class="form-control" aria-label="advs" aria-describedby="advs" name="advs" value="<?= $advs ?>">
                </div>
                <div class="input-group mb-3 col-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="dean">Dean</span>
                    </div>
                    <input type="text" class="form-control" aria-label="dean" aria-describedby="dean" name="dean" value="<?= $dean ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="input-group mb-3 col-7">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="hdr">Head of Division of Registrer</span>
                    </div>
                    <input type="text" class="form-control" aria-label="hdr" aria-describedby="hdr" name="hdr" value="<?= $hdr ?>">
                </div>
                <div class="input-group mb-3 col-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="psd">The President</span>
                    </div>
                    <input type="text" class="form-control" aria-label="psd" aria-describedby="psd" name="psd" value="<?= $psd ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="input-group mb-3 col-6">
                    <a href="read_table.php" role="button" class="btn btn-outline-danger">Back To STUDENT DATA</a>
                </div>
                <div class="input-group mb-3 col-4">

                </div>
                <div class="input-group mb-3 col-2">&emsp;&ensp;
                    <input type="Submit" value="Update Data" class="btn btn-outline-success">
                </div>
            </div> 
        </form>
    </div>
</div>
</form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>