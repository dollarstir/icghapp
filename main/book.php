<?php

involve('adapter');
involve('send');

 extract($_POST);

 if (empty($userid) || empty($cid) || empty($cname) || empty($ctype) || empty($clocation) || empty($userlocation) || empty($appdate) || empty($apptime) || empty($status)) {
     echo json_encode('all field required');
 } else {
     $ch = mysqli_query($conn, "SELECT * FROM bookings WHERE cid = '$cid' AND userid ='$userid' AND status ='pending' ");
     $cc = mysqli_num_rows($ch);
     if ($cc >= 1) {
         echo json_encode('You already booked this counsellor');
     } else {
         $ins = mysqli_query($conn, "INSERT INTO bookings (userid,cid,cname,ctype,clocation,userlocation,appdate,apptime,status,cpic,ccontact) VALUES ('$userid','$cid','$cname','$ctype','$clocation','$userlocation','$appdate','$apptime','$status','$cpic','$ccontact')");
         $c2 = mysqli_query($conn, "SELECT * FROM utable WHERE id = '$userid'");
         $q1 = mysqli_fetch_array($c2);
         $uname = $q1['name'];

         if ($ins) {
             mysqli_query($conn, "INSERT INTO notification (uid,nmess,status) VALUES ('$userid','Your booking request has been duly logged, and a response will be sent to you shortly.','unread')");

             echo json_encode('booked');
             $txt1 = 'Hello '.$uname.',                                Thank you for accessing the TUCEE iCounsel-Gh App. Your booking request has been duly logged, and a response will be sent to you shortly. ';
             $send8 = new send();
             $send8->key = 'y0i5w3vGnQi6M45azQACwS4vo';
             $send8->message = $txt1;
             $send8->numbers = $q1['contact'];
             $send8->sender = 'iCounsel Gh';
             $isError = true;
             $response8 = $send8->sendMessage();

             $txt2 = 'New booking request from '.$uname.' Number - '.$q1['contact'].' (Icounsel-Gh)';
             $send9 = new send();
             $send9->key = 'y0i5w3vGnQi6M45azQACwS4vo';
             $send9->message = $txt2;
             $send9->numbers = '0208496496,0244996991';
             $send9->sender = 'iCounsel Gh';
             $isError = true;
             $response9 = $send9->sendMessage();
         } else {
             echo json_encode('failed');
         }
     }
 }
