<?php
include 'db.php';

$s = mysqli_query($conn,"SELECT * FROM bookings WHERE status = 'pending'");
$c = mysqli_num_rows($s);
echo $c;
?>