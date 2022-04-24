<?php
include 'db.php';
$id = $_GET['id'];  
$del  = mysqli_query($conn,"DELETE FROM utable WHERE id = $id");

if($del){
    echo '<script> window.location="view-users.php"</script>';
}

else{

    echo '<script> 
    alert ("Failed to delete");
    window.location="view-users.php"</script>;
    ';

}


?>