










<!-- ไม่ได้ใช้ -->



<input type="checkbox" name="Grad" id="Grad">
            <label for="Grad">Graduate student</label>&ensp;&ensp;
            <input type="checkbox" name="Under" id="Under">
            <label for="Under">Undergraduate student</label>









<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-
to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dis
t/css/bootstrap.min.css" integrity="sha384-
TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="an
onymous">
<title>View Data 1</title>
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
<?php
while($row = mysqli_fetch_assoc($result)) {
    $sd_id = $row["StudentID"];
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
            <p class="text-right">REG-210</p>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <table class="table table-bordered">
                <tr>
                    <td>
                        &emsp;<b>School of</b>
                        <input type="text" name="sch" id="sch" size="15" name="sch" value="<?= $sch ?>" required><br>
                        &emsp;&emsp;<b>Mae Fah Luang University</b><br>
                        <b>No</b>
                        <input type="text" name="no" id="no" size="25" required><br>
                        <b>Date</b>
                        <input type="text" name="dt" id="dt" size="23" required><br>
                        <b>Time</b>
                        <input type="text" name="tm" id="tm" size="3" required>
                        <b>Recorded by</b>
                        ..........
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-4">
            <div class="text-center">
                <img src="Picture/MFU logo.png" class="rounded" alt="MFU logo" width="120">
            </div>
        </div>
        <div class="col-4">
            <table class="table table-bordered">
                <tr>
                    <td>
                        &emsp;&emsp;<b>The Division of Registrer</b><br>
                        &emsp;&emsp;<b>Mae Fah Luang University</b><br>
                        <b>No</b>
                        <input type="text" name="no" id="no" size="25"required><br>
                        <b>Date</b>
                        <input type="text" name="dt" id="dt" size="23" required><br>
                        <b>Time</b>
                        <input type="text" name="tm" id="tm" size="3" required>
                        <b>Recorded by</b>
                        ..........
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h5 class="text-center">DIVISION OF REGISTRAR, MAE FAH LUANG UNIVERSITY</h5>
            <h5 class="text-center">Official Request Form For Being Reinstated to Student Status</h5>
        </div>
    </div><br>
    <div class="form-row">
        <div class="input-group mb-3 col-2">
            
        </div>
        <div class="input-group mb-3 col-1">
            <b>Semester</b>
        </div>
        <div class="input-group mb-3 col-1">         
            <input type="checkbox" name="F" id="F">
            <label for="F">First</label>
        </div>
        <div class="input-group mb-3 col-1">
            <input type="checkbox" name="S" id="S">
            <label for="S">Second</label>
        </div>
        <div class="input-group mb-3 col-2">
            <input type="checkbox" name="Summer" id="Summer">
            <label for="Summer">Summer</label>
        </div>
        <div class="input-group mb-3 col-4">
            <label for="fname"><b>Academic year&ensp;</b></label>
            <input type="text" name="fname" id="fname" size="1" required>
        </div>
        <div class="input-group mb-3 col-1">
            
        </div>
    </div>
    <div class="form-row">
        <div class="input-group mb-3 col-7">

        </div>
        <div class="input-group mb-3 col-5">&ensp;&ensp;&ensp;
            <input type="checkbox" name="Under" id="Under">
            <label for="Under">Undergraduate student</label>
        </div>
    </div>
    <div class="form-row">
        <div class="input-group mb-3 col-6">
            <label for="To the"><b>(1) To the Dean of School&ensp;</b></label>
            <input type="text" name="To the" id="To the" size="30" required>
        </div>
        <div class="input-group mb-3 col-6">
            <b>Student level&ensp;</b>
            <input type="checkbox" name="Grad" id="Grad">
            <label for="Grad">Graduate student</label>
        </div>
    </div>
    <div class="form-row">
        <div class="input-group mb-3 col-6">
            <label for="Name M"><b>Name&ensp;</b></label>
            <input type="text" name="pf" id="pf" size="3" required>
            <input type="text" name="fname" id="fname" size="15" required>
            <input type="text" name="lname" id="lname" size="21" required>
        </div>
        <div class="input-group mb-3 col-6">
            <label for="ID"><b>Student ID&ensp;</b></label>
            <input type="text" name="ID" id="ID" size="40" required>
        </div>
    </div>
    <div class="form-row">
        <div class="input-group mb-3 col-6">
            <label for="Study in"><b>Study in/graduated from School of&ensp;</b></label>
            <input type="text" name="Study in" id="Study in" size="20"required>
        </div>
        <div class="input-group mb-3 col-6">
            <label for="Prog"><b>Program of&ensp;</b></label>
            <input type="text" name="Prog" id="Prog" size="39" required>
        </div>
    </div>
    <div class="form-row">
        <div class="input-group mb-3 col-12">
            <label for="Prog"><b>Mobile phone&ensp;</b></label>
            <input type="text" name="Prog" id="Prog" size="25" required>
        </div>
    </div>
    <div class="form-row">
        <div class="input-group mb-3 col-12">
            <b>Reason(s) for re-entering are&ensp;</b>
        </div>
    </div>
    <div class="form-row">
        <div class="input-group mb-3 col-12">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
    &emsp;For your consideration
    <div class="form-row">
        <div class="input-group mb-3 col-6">

        </div>
        <div class="input-group mb-3 col-2">
            <b>Student's Signature</b> 
        </div>
        <div class="input-group mb-3 col-4">
            ......................................................
        </div>
    </div>
    <div class="form-row">
        <div class="input-group mb-3 col-8">

        </div>
        <div class="input-group mb-3 col-4">
            <label for="I"></label>
            <input type="text" name="I" id="I" required>
        </div>
    </div>
    <div class="form-row">
        <div class="input-group mb-3 col-8">
            
        </div>
        <div class="input-group mb-3 col-4">
            <label for="bdate"></label>
            <input type="text" name="dt" id="dt" required>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <td>
                <div class="form-row">
                    <div class="input-group mb-3 col-6">
                        <label for="ad"><b>(2) Advisor's Comment</b></label>
                    </div>
                    <div class="input-group mb-3 col-6">
                        <label for="dn"><b>(3) Dean's Comment</b></label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3 col-2">
                        
                    </div>
                    <div class="input-group mb-3 col-4">
                        .................................................................................<br>
                        .................................................................................
                    </div>
                    <div class="input-group mb-3 col-2">
                            
                    </div>
                    <div class="input-group mb-3 col-4">
                        .................................................................................<br>
                        .................................................................................
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3 col-1">
                        
                    </div>
                    <div class="input-group mb-3 col-1">
                        <b>Signature</b> 
                    </div>
                    <div class="input-group mb-3 col-4">
                        ......................................................
                    </div>
                    <div class="input-group mb-3 col-1">
                        
                    </div>
                    <div class="input-group mb-3 col-1">
                        <b>Signature</b> 
                    </div>
                    <div class="input-group mb-3 col-4">
                        ......................................................
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3 col-2">
                        
                    </div>
                    <div class="input-group mb-3 col-4">
                        <label for="I"></label>
                        <input type="text" name="I" id="I" required>
                    </div>
                    <div class="input-group mb-3 col-2">
                        
                    </div>
                    <div class="input-group mb-3 col-4">
                        <label for="I"></label>
                        <input type="text" name="I" id="I" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3 col-2">
                        
                    </div>
                    <div class="input-group mb-3 col-4">
                        ................./............../...................
                    </div>
                    <div class="input-group mb-3 col-2">
                        
                    </div>
                    <div class="input-group mb-3 col-4">
                        ................./............../...................
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <table class="table table-bordered">
        <tr>
            <td>
                <div class="form-row">
                    <div class="input-group mb-3 col-6">
                        <label for="ad"><b>(4) Head of Division of Registrer's Comment</b></label>
                    </div>
                    <div class="input-group mb-3 col-6">
                        <label for="dn"><b>(5) The President's Comment</b></label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3 col-2">
                        
                    </div>
                    <div class="input-group mb-3 col-4">
                        .................................................................................<br>
                        .................................................................................
                    </div>
                    <div class="input-group mb-3 col-2">
                        
                    </div>
                    <div class="input-group mb-3 col-4">
                        <input type="checkbox" name="app" id="app">
                        <label for="Grad">Approved</label>&emsp;&emsp;&emsp;&emsp;
                        <input type="checkbox" name="dapp" id="dapp">
                        <label for="Grad">Disapproved</label><br>
                        .................................................................................
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3 col-1">
                        
                    </div>
                    <div class="input-group mb-3 col-1">
                        <b>Signature</b> 
                    </div>
                    <div class="input-group mb-3 col-4">
                        ......................................................
                    </div>
                    <div class="input-group mb-3 col-1">
                        
                    </div>
                    <div class="input-group mb-3 col-1">
                        <b>Signature</b> 
                    </div>
                    <div class="input-group mb-3 col-4">
                        ......................................................
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3 col-2">
                        
                    </div>
                    <div class="input-group mb-3 col-4">
                        <label for="I"></label>
                        <input type="text" name="I" id="I" required>
                    </div>
                    <div class="input-group mb-3 col-2">
                        
                    </div>
                    <div class="input-group mb-3 col-4">
                        <label for="I"></label>
                        <input type="text" name="I" id="I" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3 col-2">
                        
                    </div>
                    <div class="input-group mb-3 col-4">
                        ................./............../...................
                    </div>
                    <div class="input-group mb-3 col-2">
                        
                    </div>
                    <div class="input-group mb-3 col-4">
                        ................./............../...................
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <div class="row">
        <div class="col-12">
            <p class="text-left">05/11/2020</p>
        </div>
    </div>
    <div class="form-row">
        <div class="input-group mb-3 col-6">
            <a href="read_table.php" role="button" class="btn btn-outline-danger">Back To STUDENT DATA</a>
        </div>
        <div class="input-group mb-3 col-4">

        </div>
        <div class="input-group mb-3 col-1">
            <input type="image" src="Picture/printer3.jpg" onClick="window.print()" width="48" height="48">
        </div>
        <div class="input-group mb-3 col-1">
            <a href="view_sd2.php" role="button" class="btn btn-outline-warning">Next</a>
        </div>
    </div> 
    
</div>
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