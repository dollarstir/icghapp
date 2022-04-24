
<?php

involve('adapter');

// $json = file_get_contents('php://input');
// $obj  = json_decode($json,true);

$userid = $_POST['userid'];
// $password= $_POST['password'];

    $login = mysqli_query($conn, "SELECT * FROM ptest WHERE uid='$userid'");
    $row = mysqli_fetch_assoc($login);

      $container = [];
      $container[] = $row;
      $container = json_encode($container);
       echo $container;
