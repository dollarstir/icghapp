<?php

include 'fragement/adapter.php';
include 'fragement/send.php';

 extract($_POST);

     $ch = mysqli_query($conn, "SELECT * FROM utable WHERE  id ='$userid'");
     $cc = mysqli_num_rows($ch);
     if ($cc >= 1) {
         $ins = mysqli_query($conn, "UPDATE utable SET name ='$name', email= '$email', dob='$dob', gender='$gender', contact = '$contact', country ='$country', state ='$region' WHERE id ='$userid'");

         if ($ins) {
             echo json_encode('updated');
         } else {
             echo json_encode('failed');
         }
     } else {
         echo json_encode('invalid');
     }
