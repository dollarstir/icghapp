<?php

$conn = mysqli_connect("localhost","tucevmlk_test","Teamwork@2020","tucevmlk_test") or die ("fail to connect");
extract($_POST);

$id = mysqli_real_escape_string($conn,$_POST['id']);



$check = mysqli_query($conn,"SELECT * FROM consent WHERE uid='$id'" );

$ro = mysqli_num_rows($check);
$ru = mysqli_fetch_array($check);

if($ro> 0){
    
    echo json_encode("done");
    
    

    
}
else{
    
   
    
        echo json_encode("new");
    
  
}



?>