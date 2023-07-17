<?php
//session_start();
$username = "root";
$pasword = "";
$server = "localhost";
$databassname = "attendance_system";


$conn = mysqli_connect($server, $username, $pasword, $databassname);
//$connect = mysqli_select_db($connect,$databassname);

if ($conn) {
    echo "connect successful";
} else {
    echo "some error face";
    // die("some error face".mysqli_connect_error());
}
