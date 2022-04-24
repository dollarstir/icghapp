
<?php

include 'fragement/adapter.php';

// $json = file_get_contents('php://input');
// $obj  = json_decode($json,true);

$userid = $_POST['uid'];

    $count = mysqli_query($conn, "SELECT * FROM notification WHERE uid='$userid' AND status= 'unread'");
    $rc = mysqli_num_rows($count);

    // exit("SELECT * FROM notification WHERE uid='1' AND status= 'unread'");

      if ($rc > 0) {
          echo json_encode($rc);
      } else {
          echo json_encode(0);
      }
