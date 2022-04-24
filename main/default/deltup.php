<?php
include 'db.php';
$id = $_GET['id'];  
$del  = mysqli_query($conn,"DELETE FROM tupsu WHERE id = $id");

if($del){
    echo '<script> window.location="view-tupsu.php"</script>';
}

else{

    echo '<script> 
    alert ("Failed to delete");
    window.location="view-tupsu.php"</script>;
    ';

}


?>