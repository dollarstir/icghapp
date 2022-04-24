<?php
include 'db.php';

$s = mysqli_query($conn,"SELECT * FROM bookings WHERE status = 'pending' ORDER BY id DESC LIMIT 4");


$a  = mysqli_num_rows($s);

if( $a > 0){
    while ($c = mysqli_fetch_array($s)){

        $uid = $c['userid'];

        $e = mysqli_query($conn,"SELECT * FROM utable WHERE id ='$uid'");
        $d = mysqli_fetch_array($e);

        echo '<li>
        <div class="media">
            <img class="d-flex align-self-center img-radius"
                src="files/assets/images/avatar-4.jpg"
                alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="notification-user">'.$d['name'].'</h5>';
              if($c['cid']=="notyet"){
                  echo '  <p class="notification-msg">requesting for  '.$c['ctype'].'. appointment date and time below:</p>';
              }
              else{
                  echo '  <p class="notification-msg">requesting for Counsellor '.$c['cname'].'.  appointment date and time below:</p>';
              }
                echo '<span class="notification-time">on '.$c['appdate'].' at '.$c['apptime'].'</span>
            </div>
        </div>
    </li>';

    }

   

}
else{
    echo '';
}

?>