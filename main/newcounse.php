 <?php

// $conn = mysqli_connect("localhost","tucevmlk_icounselgh","Teamwork@2019","tucevmlk_icounselgh") or die ("fail to connect");
// extract($_POST);
// $image = $_POST['image'];
// $pname = $_POST['pname'];

// // $id = mysqli_real_escape_string($conn,$_POST['id']);
// $m1 = $_POST['ctype1'];
// $m2 = $_POST['ctype2'];

// $type = $m1.','.$m2;

// $check = mysqli_query($conn,"SELECT * FROM counsellors WHERE contact='$contact'");

// $ro = mysqli_num_rows($check);
// $ru = mysqli_fetch_array($check);

// if($ro> 0){

//     if(status == "pending"){
//         echo json_encode("pendingrequest");
//     }
//     else{
//         echo json_encode("alreadycounsellor");
//     }

// }
// else{
//      $realImage = base64_decode($image);

//     if(file_put_contents('default/upload/'.$pname, $realImage)){
//         $inc = mysqli_query($conn,"INSERT INTO counsellors (name,email,contact,region,type,status,pic,cgroup) VALUES ('$name','$email','$contact','$region','$type','$status','$pname','$type')");
//         if($inc){
//             echo  json_encode("sent");
//         }
//         else{
//             echo json_encode(mysqli_error($conn));
//         }
//     }

// }

?>


<?php
include 'fragement/adapter.php';
include 'fragement/send.php';
// $return["error"] = false;
// $return["msg"] = "";
// $return["success"] = false;
//array to return

if (isset($_FILES['file'])) {
    //directory to upload file
    $target_dir = 'main/default/upload/'; //create folder files/ to save file
    $filename = $_FILES['file']['name'];
    //name of file
    //$_FILES["file"]["size"] get the size of file
    //you can validate here extension and size to upload file.
    extract($_POST);
    $m1 = $_POST['ctype1'];
    $m2 = $_POST['ctype2'];

    $type = $m1.','.$m2;

    $savefile = "$target_dir/$filename";
    //complete path to save file

    $check = mysqli_query($conn, "SELECT * FROM counsellors WHERE contact='$contact'");

    $ro = mysqli_num_rows($check);
    $ru = mysqli_fetch_array($check);

    if ($ro > 0) {
        if ($ru['status'] == 'pending') {
            // $return["error"] = true;
            // $return["msg"] =  "you have pending request";
            echo json_encode('pending');
        } else {
            // $return["error"] = true;
            // $return["msg"] =  "Already a counsellor";
            echo json_encode('Already acounsellor');
        }
    } else {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $savefile)) {
            $inc = mysqli_query($conn, "INSERT INTO counsellors (name,email,contact,region,type,status,pic,cgroup,gpcpin) VALUES ('$name','$email','$contact','$region','$type','$status','$filename','$cgroup','$gpcpin')");
            if ($inc) {
                $txt1 = 'Dear '.$name.',                                Your request to join iCounsel-Gh App Counsellors has been duly logged.';
                $send8 = new send();
                $send8->key = 'y0i5w3vGnQi6M45azQACwS4vo';
                $send8->message = $txt1;
                $send8->numbers = $contact;
                $send8->sender = 'iCounsel Gh';
                $isError = true;
                $response8 = $send8->sendMessage();
                // $return["error"] = false;
                //  $return["msg"] = "Upload complete";
                $txt2 = 'New counsellor want to join  iCounsel-Gh App ('.$name.'/ '.$contact.')';
                $send9 = new send();
                $send9->key = 'y0i5w3vGnQi6M45azQACwS4vo';
                $send9->message = $txt2;
                $send9->numbers = '0208496496,0244996991';
                $send9->sender = 'iCounsel Gh';
                $isError = true;
                $response9 = $send9->sendMessage();
                echo json_encode('upload complete');
            } else {
                //  $return["error"] = true;
                // $return["msg"] =  mysqli_error($conn);
                echo  json_encode('failed');
            }

            //upload successful
        } else {
            // $return["error"] = true;
            // $return["msg"] =  "Error during saving file.";
            echo  json_encode('Erro saving');
        }
    }
} else {
    // $return["error"] = true;
    // $return["msg"] =  "No file is sublitted.";
    echo json_encode('no file submitted');
}

header('Content-Type: application/json');
// tell browser that its a json data
// echo json_encode($return);
//converting array to JSON string
?>


