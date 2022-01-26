<?php
//Database Information
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "alumni";
// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
//     echo 'Failed to connect';
// }

 $connect = mysqli_connect('localhost','root','','alumni');
    if(mysqli_connect_errno($connect)) {
        echo 'Failed to connect';
    }
?>