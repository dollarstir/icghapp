 
<?php

$conn = mysqli_connect("localhost","tucevmlk_test","Teamwork@2020","tucevmlk_test") or die ("fail to connect");
include 'send.php';
// $json = file_get_contents('php://input');
// $obj  = json_decode($json,true);


$number =$_POST['number'];
$password =$_POST['password'];



    $count= mysqli_query($conn,"SELECT * FROM utable WHERE contact='$number'");
    $rc = mysqli_num_rows($count);
    
    
    
        
      
      if($rc > 0){
                                        $txt1 = 'Your reset password verification code is '.$password;
                                        $send8 = new send();
                                        $send8->key = "y0i5w3vGnQi6M45azQACwS4vo";
                                        $send8->message = $txt1;
                                        $send8->numbers = $number;
                                        $send8->sender = "iCounsel Gh";
                                        $isError = true;
                                        $response8 = $send8->sendMessage();
                                        
                                       echo  json_encode('sent');
      }else{
           echo json_encode('failed');
      }


   
   

   

