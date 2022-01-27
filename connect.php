<?php

$connect = mysqli_connect('localhost', 'root', '12345', 'alumni');
if (mysqli_connect_errno($connect)) {
    echo 'Failed to connect';
}
?>