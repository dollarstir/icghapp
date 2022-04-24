<?php

include 'db.php';
include '../send.php';

$id = $_GET['id'];

$up = mysqli_query($conn,"UPDATE counsellors SET status='available' WHERE id='$id'");
$ck = mysqli_query($conn,"SELECT * FROM counsellors WHERE id= '$id'");
$rc = mysqli_fetch_array($ck);
$mid = $rc['userid'];

$uname = $rc['name'];
$uid = $rc1['id'];
if($up){
    // mysqli_query($conn,"INSERT INTO notification (uid,nmess,status) VALUES ('$uid','Your request for a Counsellor has been successful.','unread')");
                                    $txt1 = 'Dear '.$uname.', Your request to join the iCounsel-Gh App counsellors has been successful. Kindly visit the iCounse-Gh App for details. ';
                                    $send8 = new send();
                                    $send8->key = "y0i5w3vGnQi6M45azQACwS4vo";
                                    $send8->message = $txt1;
                                    $send8->numbers = $rc['contact'];
                                    $send8->sender = "iCounsel Gh";
                                    $isError = true;
                                    $response8 = $send8->sendMessage();
    echo '<script> window.location="view-counsellors.php"</script>';
}

else{

    echo '<script> 
    alert ("Failed to update");
    window.location="view-counsellors.php"</script>;
    ';

}
