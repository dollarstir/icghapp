<?php

$conn = mysqli_connect("localhost","tucevmlk_test","Teamwork@2020","tucevmlk_test") or die ("fail to connect");
include 'send.php';


 extract($_POST);
 
 
   
     $password = md5( $password);
    
     
     $ch = mysqli_query($conn,"SELECT * FROM utable WHERE  contact ='$contact'");
     $cc = mysqli_num_rows($ch);
     if ($cc >= 1){
         
         $ins = mysqli_query($conn,"UPDATE utable SET passcode ='$password' WHERE contact='$contact'");
 
            if($ins){
                $txt1 = 'Your password reset was successful. Thank you for using iCounsel-Gh App.';
                                        $send8 = new send();
                                        $send8->key = "y0i5w3vGnQi6M45azQACwS4vo";
                                        $send8->message = $txt1;
                                        $send8->numbers = $contact;
                                        $send8->sender = "iCounsel Gh";
                                        $isError = true;
                                        $response8 = $send8->sendMessage();
                echo json_encode("resetsuccess");
            }
 
        else{
         echo json_encode("failed");
        }
         
     }
     else{
         
         echo json_encode("invalid");
         
    }
 
 
?>