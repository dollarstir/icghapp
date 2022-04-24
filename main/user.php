
<?php

involve('adapter');

// $json = file_get_contents('php://input');
// $obj  = json_decode($json,true);

$userid = $_POST['uid'];
// $password= $_POST['password'];

    $password = md5($password);
    $login = mysqli_query($conn, "SELECT * FROM utable WHERE id='$userid'");
    $row = mysqli_fetch_assoc($login);

      $container = [];
      $container[] = $row;
      $container = json_encode($container);
       echo $container;
