<?php

include 'db.php';
$id = $_GET['id'];
if (isset($id)) {
    $d = mysqli_query($conn, "UPDATE gp SET status ='approved' WHERE id ='$id' ");
    if ($d) {
        echo '<script>alert("Request Approved");
            window.location="gptest.php";
        </script>';
    } else {
        echo '<script>alert("Something went wrong");
        window.location="gptest.php";
    </script>';
    }
}
