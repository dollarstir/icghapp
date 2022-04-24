<?php
include 'db.php';
$id = $_GET['id'];  
$del  = mysqli_query($conn,"UPDATE ptest SET status = 'approved' WHERE id = $id");

if($del){
    echo '<script> window.location="ptest.php"</script>';
}

else{

    echo '<script> 
    alert ("Failed to approve");
    window.location="ptest.php"</script>;
    ';

}


?>