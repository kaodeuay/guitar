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
<title>View Data 2</title>
</head>
<body>
    <br><br><br><br><br>
    <?php
// Include database connection file
require_once "dbconnect.php";
$sd_id = $_GET['sdid'];
$sql = "SELECT Prefix, FirstName, LastName, School, Date_sd FROM student_api WHERE StudentID = $sd_id";
$result = mysqli_query($conn,$sql);
?>
<?php
while($row = mysqli_fetch_assoc($result)) {
    $pf = $row["Prefix"];
    $f_name = $row["FirstName"];
    $l_name = $row["LastName"];
    $sch = $row["School"];
    $dt = $row["Date_sd"];
}
?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <tr>
                        <td>
                            <div class="text-center">
                                <b>Reinstated Condition</b>
                            </div>
                            <div>&emsp;&emsp;&emsp;&emsp;According to Mae Fah Luang University rules and regulation for Bachelor’s Degree Education, BE 2542(1999), 
                                section 9 Registration, a current student who fail to enroll within the university’s enrollment period and did not summit 
                                the retention of his/her studentship or student who didn’t pay the tuition fees or submit the postpone (delay for payment) 
                                within 2 weeks of semester start, all of the student’s course will be cancelled and studentship will be terminated 
                                immediately. Student can be reinstated to student status by following condition:
                            </div>
                            <ul>
                               <ol>
                                   (1) Student who wishes to register in cancelled course <br>
                                   <ol>
                                       1.1 Student has to submit “Request Form for being reinstated to student status” which have to be considered by 
                                       Advisor and Dean, together with class attendant with approved signature of course’s lecturer or 
                                       coordinator to Registrar Division within 2 weeks after studentship has been terminated.
                                    </ol>
                                    <ol>
                                        1.2 Student must pay the tuition fees or submit the postpone (delay for payment) and pay the reinstated fees 
                                        within 3 working days after reinstated to student status granted. Student who do not pay the following fees 
                                        or do not submit postpone within time limit, studentship will be terminated and student can be reinstated 
                                        to student status again but by following (2) condition.
                                    </ol> 
                                </ol> 
                                <ol>
                                    (2) Student who wishes to reinstated and request to leave in current semester
                                    <ol>2.1 Student has to submit “Official request for being reinstated to student status” and “Request form for 
                                        leave of absence” which have to be considered by Advisor, Dean and School committee to Division of 
                                        Registrar within the semester which studentship has been terminated.
                                    </ol>
                                    <ol>
                                        2.2 Student has to pay the reinstated and retention fees within 3 working days after reinstated to student status 
                                        granted. Student who does not pay the following within time limit, then studentship will be terminated.
                                    </ol>
                                </ol>
                            </ul>
                        </td>
                    </tr>
                </table>
                <div>
                    *Remark <br>
                    *1. Student can be reinstated to student status only the semester which studentship has been terminated. <br>
                    *2. Reinstated fee
                    <ul>
                        <ol>- Undergraduate level 500 THB</ol>
                        <ol>- Graduated Level 1,000 THB</ol>
                    </ul> 
                </div>
                <div class="form-row">
                    <div class="input-group mb-3 col-5">

                    </div>
                    <div class="input-group mb-3 col-3">
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
                <div>
                    Registrar Division<br>
                    Mae Fah Luang University<br>
                    Tel. 0 5391 6370 – 72<br>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3 col-6">
                        <a href="read_table.php" role="button" class="btn btn-outline-danger" id="hid">Back To STUDENT DATA</a>
                    </div>
                    <div class="input-group mb-3 col-5">
                        
                    </div>
                    <div class="input-group mb-3 col-1">
                        <input type="image" src="Picture/printer3.jpg" onClick="window.print()" width="48" height="48" id="hid">
                    </div>
                </div> 
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
</html