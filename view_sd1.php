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
<link rel="stylesheet" href="view.css">
<title>View Data 1</title>
</head>
<body>
    <br><br><br><br><br>
<?php
// Include database connection file
require_once "dbconnect.php";
$sd_id = $_GET['sdid'];
$sql = "SELECT StudentID, Prefix, FirstName, LastName, School, Program, Advisor, Dean, 
No_sd, Date_sd, Time_sd, AcademicYear, StudyIn, MobilePhone, 
Reasons, Head_of_Division_of_Registrer, ThePresident FROM student_api WHERE StudentID = $sd_id";
$result = mysqli_query($conn,$sql);
?>
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
    $acdm = $row["AcademicYear"];
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
                        <?= $sch ?><br>
                        &emsp;&emsp;<b>Mae Fah Luang University</b><br>
                        <b>No:</b>
                        <?= $no ?><br>
                        <b>Date:</b>
                        <?= $dt ?><br>
                        <b>Time:</b>
                        <?= $tm ?>
                        <b>Recorded by:</b>
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
                        <b>No:</b>
                        <?= $no ?><br>
                        <b>Date:</b>
                        <?= $dt ?><br>
                        <b>Time:</b>
                        <?= $tm ?>
                        <b>Recorded by:</b>
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
            <b>Semester:</b>
        </div>
        <div class="input-group mb-3 col-1">   
            <div class="checkboxes">      
                <label for="F">
                    <input type="checkbox" name="F" id="F">
                    <span>First</span> 
                </label>
            </div>
        </div>
        <div class="input-group mb-3 col-1">
            <div class="checkboxes">
                <label for="S">
                    <input type="checkbox" name="S" id="S">
                    <span>Second</span> 
                </label>
            </div>
        </div>
        <div class="input-group mb-3 col-2">
            <div class="checkboxes">
                <label for="Summer">
                    <input type="checkbox" name="Summer" id="Summer">
                    <span>Summer</span> 
                </label>
            </div>
        </div>
        <div class="input-group mb-3 col-4">
            <label for="acdm"><b>Academic year:&ensp;</b></label>
            <?= $acdm ?>
        </div>
        <div class="input-group mb-3 col-1">
            
        </div>
    </div>
    <div class="form-row">
        <div class="input-group mb-3 col-7">

        </div>
        <div class="input-group mb-3 col-5">&ensp;

        </div>
    </div>
    <div class="form-row">
        <div class="input-group mb-3 col-6">
            <label for="To the"><b>(1) To the Dean of School&ensp;</b></label>
            <?= $sch ?>
        </div>
        <div class="input-group mb-3 col-6">
            <b>Student level&ensp;</b>
            <div class="checkboxes">
                <label for="Grad">
                    <input type="checkbox" name="Grad" id="Grad">
                    <span>Graduate student</span> 
                </label>&ensp;&ensp;
                <label for="Under">
                    <input type="checkbox" name="Under" id="Under">
                    <span>Undergraduate student</span> 
                </label>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="input-group mb-3 col-6">
            <label for="Name M"><b>Name&ensp;</b></label>
            <?= $pf ?>
            <?= $f_name ?>
            <?= $l_name ?>
        </div>
        <div class="input-group mb-3 col-6">
            <label for="ID"><b>Student ID&ensp;</b></label>
            <?= $sd_id ?>
        </div>
    </div>
    <div class="form-row">
        <div class="input-group mb-3 col-6">
            <label for="Study in"><b>Study in/graduated from School of&ensp;</b></label>
            <?= $sg ?>
        </div>
        <div class="input-group mb-3 col-6">
            <label for="Prog"><b>Program of&ensp;</b></label>
            <?= $pro ?>
        </div>
    </div>
    <div class="form-row">
        <div class="input-group mb-3 col-12">
            <label for="mb"><b>Mobile phone&ensp;</b></label>
            <?= $mb ?>
        </div>
    </div>
    <div class="form-row">
        <div class="input-group mb-3 col-12">
            <b>Reason(s) for re-entering are&ensp;</b>
        </div>
    </div>
    <div class="form-row">
        <div class="input-group mb-3 col-12">
            <?= $rs ?>
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
            (<?= $pf ?>&ensp;<?= $f_name ?>&ensp;<?= $l_name ?>)
        </div>
    </div>
    <div class="form-row">
        <div class="input-group mb-3 col-8">
            
        </div>
        <div class="input-group mb-3 col-4">
            <?= $dt ?>
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
                        (<?= $advs ?>)
                    </div>
                    <div class="input-group mb-3 col-2">
                        
                    </div>
                    <div class="input-group mb-3 col-4">
                        (<?= $dean ?>)
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
                        <div class="checkboxes">
                            <label for="Grad">
                                <input type="checkbox" name="app" id="app">
                                <span>Approved</span> 
                            </label>&emsp;&emsp;&emsp;&emsp;
                            <label for="Grad">
                                <input type="checkbox" name="dapp" id="dapp">
                                <span>Disapproved</span> 
                            </label><br>
                        </div>
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
                        (<?= $hdr ?>)
                    </div>
                    <div class="input-group mb-3 col-2">
                        
                    </div>
                    <div class="input-group mb-3 col-4">
                        (<?= $psd ?>)
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
            <a href="read_table.php" role="button" class="btn btn-outline-danger" id="hid">Back To STUDENT DATA</a>
        </div>
        <div class="input-group mb-3 col-4">

        </div>
        <div class="input-group mb-3 col-1">
            <input type="image" src="Picture/printer3.jpg" onClick="window.print()" width="48" height="48" id="hid">
        </div>
        <div class="input-group mb-3 col-1">
            <a href="view_sd2.php?sdid=<?= $sd_id ?>" role="button" class="btn btn-outline-warning" id="hid">Next</a>
        </div>
    </div> 
    
</div>
<style type="text/css">
	@media print{
		#hid{
		   display: none; /* ซ่อน  */
		}
	}
</style>
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