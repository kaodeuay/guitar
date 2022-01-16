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
<title> Read Data from Database </title>
</head>
<body class="bg-light text-dark">
<?php
// Include database connection file
require_once "dbconnect.php";
// Database query.
$sql = "SELECT StudentID, Prefix, FirstName, LastName, School, Program, Advisor, Dean,
No_sd, Date_sd, Time_sd, Semester, AcademicYear, StudentLevel, StudyIn, MobilePhone, 
Reasons, Head_of_Division_of_Registrer, ThePresident FROM student_api ORDER BY StudentID";
$result = mysqli_query($conn,$sql);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="shadow-lg p-3 mb-5 bg-white rounded"><br><br>
                <h3 class="text-center">STUDENT DATA</h3>
            </div>
            <div class="float-left">
                <a href="index.php" class="btn btn-dark" role="button">Home</a>
            </div>
            <div class="float-right">
                <a href="input_insert_sd.php" class="btn btn-dark" role="button">ADD NEW DATA</a>
            </div><br><br><br>
        </div>
    </div>    
        <div class="form-row">
            <div class="">
            <table class="table table-sm table-bordered">
                <thead class=" thead-dark">
                    <tr>
                        <th scope="col">Student ID</th>
                        <th scope="col">Prefix</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">School of</th>
                        <th scope="col">Program</th>
                        <th scope="col">Advisor</th>
                        <th scope="col">Dean</th>
                        <th scope="col">No.</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Academic Year</th>
                        <th scope="col">Student Level</th>
                        <th scope="col">Study In</th>
                        <th scope="col">Mobile Phone</th>
                        <th scope="col">The President</th>
                        <th scope="col">Reasons</th>
                        <th scope="col">Head of Division of Registrer</th>        
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php
                if (mysqli_num_rows($result) > 0) {
                // output data of each row
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
                ?>
                <tbody>
                    <tr>
                        <td scope="row"><?= $sd_id ?></td>
                        <td><?= $pf ?></td>
                        <td><?= $f_name ?></td>
                        <td><?= $l_name ?></td>
                        <td><?= $sch ?></td>
                        <td><?= $pro ?></td>
                        <td><?= $advs ?></td>
                        <td><?= $dean ?></td>
                        <td><?= $no ?></td>
                        <td><?= $dt ?></td>
                        <td><?= $tm ?></td>
                        <td><?= $smt ?></td>
                        <td><?= $acdm ?></td>
                        <td><?= $sdl ?></td>
                        <td><?= $sg ?></td>
                        <td><?= $mb ?></td>
                        <td><?= $psd ?></td>
                        <td><?= $rs ?></td>
                        <td><?= $hdr ?></td>
                        <td>
                            <a href="view_sd1.php?sdid=<?= $sd_id ?>" class="btn btn-dark">VIEW</a>
                            <a href="input_update_sd.php?sdid=<?= $sd_id ?>" class="btn btn-secondary">UPDATE</a>
                            <a href="delete_sd.php?sdid=<?= $sd_id ?>" onClick="return confirm
                            ('Delete this data?')" class="btn btn-dark">DELETE</a>
                        </td>
                    </tr>
                </tbody>
                <?php
                }
            } else {
                echo "0 results";
            }
            mysqli_close($conn);
            ?>
            </div>
        </div>
    </div>
    </div>
</table> 
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-
DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="an
onymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundl
e.min.js" integrity="sha384-
ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="an
onymous"></script>



</body>
</html>