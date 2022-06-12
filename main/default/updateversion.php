<?php

include 'db.php';
$up = mysqli_query($conn, "UPDATE vcontrol set version ='1.1.2'");
