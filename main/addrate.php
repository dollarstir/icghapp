<?php

involve('adapter');

extract($_POST);

$id = mysqli_real_escape_string($conn, $_POST['id']);

$check = mysqli_query($conn, "SELECT * FROM ratings WHERE uid='$id' AND status='pending'");

$ro = mysqli_num_rows($check);
$ru = mysqli_fetch_array($check);

if ($ro > 0) {
    echo json_encode('pendingcomment');
} else {
    $inc = mysqli_query($conn, "INSERT INTO ratings (uid,uname,service,satisfaction,counsellor,affordability,general,status) VALUES ('$id','$uname','$a2','$a3','$a4','$a5','$a6','$a7')");
    if ($inc) {
        echo  json_encode('sent');
    } else {
        echo json_encode(mysqli_error($conn));
    }
}
