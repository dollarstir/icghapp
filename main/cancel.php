<?php

$conn = mysqli_connect("localhost","tucevmlk_test","Teamwork@2020","tucevmlk_test") or die ("fail to connect");

$id = mysqli_real_escape_string($conn,$_POST['id']);



$del = mysqli_query($conn,"DELETE  FROM bookings WHERE id='$id'" );

if($del){
  echo  json_encode("delected");
}
else{
    echo json_encode("failed");
}



?>