<?php

include 'fragement/adapter.php';
$username = mysqli_real_escape_string($conn, $_POST['username']);

$password = mysqli_real_escape_string($conn, $_POST['password']);
$password = md5($password);

$get = mysqli_query($conn, "SELECT * FROM utable WHERE email='$username' OR contact='$username' AND  passcode = '$password' AND status ='active' ");

$checks = mysqli_num_rows($get);
if ($checks == 1) {
    $row = mysqli_fetch_assoc($get);
    $container = [];
    $container[] = $row;
    $container = json_encode($container);
    echo $container;
} else {
    echo json_encode('failed');
}
