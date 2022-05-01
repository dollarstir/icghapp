<?php

include 'db.php';
include '../send.php';
$id = $_GET['id'];

if (isset($id)) {
    $d = mysqli_query($conn, "UPDATE gp SET status ='approved' WHERE id ='$id' ");
    // if ($d) {
    //     echo '<script>alert("Request Approved");
    //         window.location="gtest.php";
    //     </script>';
    // } else {
    //     echo '<script>alert("Something went wrong");
    //     window.location="gtest.php";
    // </script>';
    // }

    $ck = mysqli_query($conn, "SELECT * FROM gp WHERE id= '$id'");
    $rc = mysqli_fetch_array($ck);
    $mid = $rc['uid'];
    $ck2 = mysqli_query($conn, "SELECT * FROM utable WHERE id= '$mid'");
    $rc2 = mysqli_fetch_array($ck2);
    $uname = $rc2['name'];

    $group = $rc['pcat'];
    $uid = $rc2['id'];
    if ($up) {
        mysqli_query($conn, "INSERT INTO notification (uid,nmess,status) VALUES ('$uid','Your request to join '.$group.' group  has been successful.','unread')");
        $txt1 = 'Dear '.$uname.', Your request to join '.$group.' group has been successful. Thank you for using the iCounse-Gh App . ';
        $send8 = new send();
        $send8->key = 'y0i5w3vGnQi6M45azQACwS4vo';
        $send8->message = $txt1;
        $send8->numbers = $rc2['contact'];
        $send8->sender = 'iCounsel Gh';
        $isError = true;
        $response8 = $send8->sendMessage();

        echo '<script> window.location="gtest.php"</script>';
    } else {
        echo '<script> 
    alert ("Failed to update");
    window.location="gtest.php"</script>;
    ';
    }
}
