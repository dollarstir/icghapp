<?php

$conn = mysqli_connect("localhost","tucevmlk_test","Teamwork@2020","tucevmlk_test") or die ("fail to connect");
include 'send.php';

$datejoined = date("jS F, Y");
extract($_POST);


$chk = mysqli_query($conn,"SELECT * FROM utable WHERE email ='$email'");

$rc = mysqli_num_rows($chk);
if($rc >=1){
    echo json_encode("alreaderexist");
    
}
else if($rc <1){
    if(empty($email) || empty($passcode) || empty($contact) || empty($country) || empty($state) || empty($dob) || empty($name) || empty($gender)){
        echo json_encode("allfieldrequried");
    }
    else{
        $passcode = md5($passcode);
        $ins = mysqli_query($conn,"INSERT INTO utable (name,email,dob,contact,gender,country,state,passcode,status,datejoined) VALUES ('$name','$email','$dob','$contact','$gender','$country','$state','$passcode','active','$datejoined')");
    if($ins){
        $gg = mysqli_query($conn,"SELECT * FROM utable WHERE email='$email' AND contact='$contact'");
        $rgg = mysqli_fetch_array($gg);
        $uid = $rgg['id'];
        
        mysqli_query($conn,"INSERT INTO notification (uid,nmess,status) VALUES ('$uid','Welcome to the TUCEE iCounsel-Gh App. We are excited to have you on board!.','unread')");
        echo json_encode("registered");
        
                                        $txt1 = 'Dear '.$name.',                                Welcome to the TUCEE iCounsel-Gh App. We are excited to have you on board!. ';
                                        $send8 = new send();
                                        $send8->key = "y0i5w3vGnQi6M45azQACwS4vo";
                                        $send8->message = $txt1;
                                        $send8->numbers = $contact;
                                        $send8->sender = "iCounsel Gh";
                                        $isError = true;
                                        $response8 = $send8->sendMessage();
                                        
                                        
                                        $txt2 = "New user on iCounsel-Gh App (".$name.'/ '.$contact.')';
                                        $send9 = new send();
                                        $send9->key = "y0i5w3vGnQi6M45azQACwS4vo";
                                        $send9->message = $txt2;
                                        $send9->numbers = "0208496496,0244996991";
                                        $send9->sender = "iCounsel Gh";
                                        $isError = true;
                                        $response9 = $send9->sendMessage();
    }
    else{
        echo json_encode("failed");
    }
        
    }
}

?>