<?php

include 'fragement/adapter.php';
include 'fragement/send.php';

$id = mysqli_real_escape_string($conn, $_POST['id']);

$del = mysqli_query($conn, "DELETE  FROM bookings WHERE id='$id'");

if ($del) {
    echo  json_encode('delected');
} else {
    echo json_encode('failed');
}
