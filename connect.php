<?php

$connect = mysqli_connect('localhost', 'root', '', 'alumni');
if (mysqli_connect_errno($connect)) {
    echo 'Failed to connect';
}
?>