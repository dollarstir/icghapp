<?php

$conn = mysqli_connect("localhost","tucevmlk_test","Teamwork@2020","tucevmlk_test") or die ("fail to connect");



 extract($_POST);
 
 if(empty($userid) ||  empty($cpass) || empty($newpass)){
     
     echo json_encode("all field required");
     
 }
 
 
 else{
     $password = md5($cpass);
     $password1 = md5($newpass);
     
     $ch = mysqli_query($conn,"SELECT * FROM utable WHERE  id ='$userid' AND passcode = '$password' ");
     $cc = mysqli_num_rows($ch);
     if ($cc >= 1){
         
         $ins = mysqli_query($conn,"UPDATE utable SET passcode ='$password1' WHERE id ='$userid'");
 
            if($ins){
        echo json_encode("password changed succeesfully");
            }
 
        else{
         echo json_encode("failed");
        }
         
     }
     else{
         
         echo json_encode("Wrong password");
         
    }
 
 }
?>