<?php

include 'fragement/adapter.php';
 extract($_POST);

 if (empty($userid) || empty($cid) || empty($cname) || empty($ctype) || empty($clocation) || empty($userlocation) || empty($appdate) || empty($apptime) || empty($status)) {
     echo json_encode('all field required');
 } else {
     $ch = mysqli_query($conn, "SELECT * FROM bookings WHERE cid = '' AND userid ='$userid' AND status ='pending' ");
     $cc = mysqli_num_rows($ch);
     if ($cc >= 1) {
         echo json_encode('pending request');
     } else {
         $ins = mysqli_query($conn, "INSERT INTO bookings (userid,ctype,clocation,userlocation,appdate,apptime,status) VALUES ('$userid','$ctype','$clocation','$userlocation','$appdate','$apptime','$status')");

         if ($ins) {
             echo json_encode('booked');
         } else {
             echo json_encode('failed');
         }
     }
 }
