<?php

involve('adapter');
 involve('send');

 extract($_POST);

 if (empty($userid) || empty($ctype) || empty($clocation) || empty($userlocation) || empty($appdate) || empty($apptime) || empty($status)) {
     echo json_encode('all field required');
 } else {
     $ins = mysqli_query($conn, "INSERT INTO bookings (userid,cid,ctype,clocation,userlocation,appdate,apptime,status) VALUES ('$userid','$cid','$ctype','$clocation','$userlocation','$appdate','$apptime','$status')");

     $c2 = mysqli_query($conn, "SELECT * FROM utable WHERE id = '$userid'");
     $q1 = mysqli_fetch_array($c2);
     $uname = $q1['name'];
     if ($ins) {
         mysqli_query($conn, "INSERT INTO notification (uid,nmess,status) VALUES ('$userid','Your booking request has been duly logged, and a response will be sent to you shortly.','unread')");
         echo json_encode('booked');

         $txt1 = 'Hello '.$uname.',              Thank you for accessing the TUCEE iCounsel-Gh App. Your booking request has been duly logged, and a response will be sent to you shortly. ';
         $send8 = new send();
         $send8->key = 'y0i5w3vGnQi6M45azQACwS4vo';
         $send8->message = $txt1;
         $send8->numbers = $q1['contact'];
         $send8->sender = 'iCounsel Gh';
         $isError = true;
         $response8 = $send8->sendMessage();

         $txt2 = 'New booking request from '.$uname.' Number - '.$q1['contact'].' (Icounsel-Gh)';
         $send9 = new send();
         $send9->key = '7svYFjGzXtGIQDkLHPZymvwmR';
         $send9->message = $txt2;
         $send9->numbers = '0208496496,0244996991';
         $send9->sender = 'iCounsel Gh';
         $isError = true;
         $response9 = $send9->sendMessage();
     } else {
         echo json_encode('failed');
     }
 }
