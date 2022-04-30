<?php

include 'fragement/adapter.php';
include 'fragement/send.php';
extract($_POST);
$id = mysqli_real_escape_string($conn, $_POST['id']);

$check = mysqli_query($conn, "SELECT * FROM gp WHERE uid='$id'");

$ro = mysqli_num_rows($check);
$ru = mysqli_fetch_array($check);

if ($ro > 0) {
    if ($ru['status'] == 'pending') {
        echo json_encode('pending');
    } else {
        echo json_encode('approved');
    }
} else {
    $is = mysqli_query($conn, "INSERT INTO gp(uid,status,pcat) VALUES ('$id','pending','$pcat')");
    $c2 = mysqli_query($conn, "SELECT * FROM utable WHERE id = '$id'");
    $q1 = mysqli_fetch_array($c2);
    $uname = $q1['name'];
    if ($is) {
        $txt2 = "New Whatsapp Group request ($pcat) from ".$uname.' Number - '.$q1['contact'].' (Icounsel-Gh)';
        $send9 = new send();
        $send9->key = 'y0i5w3vGnQi6M45azQACwS4vo';
        $send9->message = $txt2;
        $send9->numbers = '0208496496,0244996991';
        $send9->sender = 'iCounsel Gh';
        $isError = true;
        $response9 = $send9->sendMessage();
        echo json_encode('sent');
    } else {
        echo json_encode('failed');
    }
}
