<?php

// developer :Dollarsoft
//contact :+233556676471
//email : kpin463@gmail.com

function tbar()
{
    include 'db.php';

    $ss = mysqli_query($conn, "SELECT * FROM bookings WHERE status != 'approved' ORDER BY id DESC LIMIT 4 ");
    $c = mysqli_num_rows($ss);
    $name = $_SESSION['name'];
    $pic = $_SESSION['pic'];
    echo '<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">

        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu"></i>
            </a>
            <a href="index.php">
                <img class="img-fluid" src="files/assets/images/logo.png" alt="Theme-Logo" />
            </a>
            <a class="mobile-options">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>

        <div class="navbar-container">
            <ul class="nav-left">
                <li class="header-search">
                    <div class="main-search morphsearch-search">
                        <div class="input-group">
                            <span class="input-group-addon search-close"><i
                                    class="feather icon-x"></i></span>
                            <input type="text" class="form-control">
                            <span class="input-group-addon search-btn"><i
                                    class="feather icon-search"></i></span>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="l#!" onclick="javascript:toggleFullScreen()">
                        <i class="feather icon-maximize full-screen"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-bell"></i>
                            <span class="badge bg-c-pink mnotify">'.$c.'</span>
                        </div>
                        <ul class="show-notification notification-view dropdown-menu"
                            data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li>
                                <h6>Notifications</h6>
                                <label class="label label-danger">New</label>
                            </li><span class="notiresut">
                            
                            </span>
                            <center><a class="btn btn-success" href="bookings.php">View All</a></center>
                        </ul>
                    </div>
                </li>
                <!--<li class="header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-message-square"></i>
                            <span class="badge bg-c-green">3</span>
                        </div>
                    </div>
                </li>-->
                <li class="user-profile header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <img src="upload/'.$pic.'" class="img-radius"
                                alt="User-Profile-Image">
                            <span>'.$name.'</span>
                            <i class="feather icon-chevron-down"></i>
                        </div>
                        <ul class="show-notification profile-notification dropdown-menu"
                            data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            
                           
                           
                            
                            <li>
                                <a href="logout.php">
                                    <i class="feather icon-log-out"></i> Logout
                                </a>
                            </li>
                        </ul>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>';
}

function sidebar()
{
    echo '<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
         
       
        <!--<div class="pcoded-navigatio-lavel">UI Element</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                    <span class="pcoded-mtext">Basic Components</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="alert.html">pt
                            <span class="pcoded-mtext">Alert</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="breadcrumb.html">
                            <span class="pcoded-mtext">Breadcrumbs</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="button.html">
                            <span class="pcoded-mtext">Button</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="box-shadow.html">
                            <span class="pcoded-mtext">Box-Shadow</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="accordion.html">
                            <span class="pcoded-mtext">Accordion</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="generic-class.html">
                            <span class="pcoded-mtext">Generic Class</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="tabs.html">
                            <span class="pcoded-mtext">Tabs</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="color.html">
                            <span class="pcoded-mtext">Color</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="label-badge.html">
                            <span class="pcoded-mtext">Label Badge</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="progress-bar.html">
                            <span class="pcoded-mtext">Progress Bar</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="preloader.html">
                            <span class="pcoded-mtext">Pre-Loader</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="list.html">
                            <span class="pcoded-mtext">List</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="tooltip.html">
                            <span class="pcoded-mtext">Tooltip And Popover</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="typography.html">
                            <span class="pcoded-mtext">Typography</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="other.html">
                            <span class="pcoded-mtext">Other</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-gitlab"></i></span>
                    <span class="pcoded-mtext">Advance Components</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="draggable.html">
                            <span class="pcoded-mtext">Draggable</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="bs-grid.html">
                            <span class="pcoded-mtext">Grid Stack</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="light-box.html">
                            <span class="pcoded-mtext">Light Box</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="modal.html">
                            <span class="pcoded-mtext">Modal</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="notification.html">
                            <span class="pcoded-mtext">Notifications</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="notify.html">
                            <span class="pcoded-mtext">PNOTIFY</span>
                            <span class="pcoded-badge label label-info">NEW</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="rating.html">
                            <span class="pcoded-mtext">Rating</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="range-slider.html">
                            <span class="pcoded-mtext">Range Slider</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="slider.html">
                            <span class="pcoded-mtext">Slider</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="syntax-highlighter.html">
                            <span class="pcoded-mtext">Syntax Highlighter</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="tour.html">
                            <span class="pcoded-mtext">Tour</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="https://demo.dashboardpack.com/adminty-html/default/treeview.html">
                            <span class="pcoded-mtext">Tree View</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="nestable.html">
                            <span class="pcoded-mtext">Nestable</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="toolbar.html">
                            <span class="pcoded-mtext">Toolbar</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="x-editable.html">
                            <span class="pcoded-mtext">X-Editable</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                    <span class="pcoded-mtext">Extra Components</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="session-timeout.html">
                            <span class="pcoded-mtext">Session Timeout</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="session-idle-timeout.html">
                            <span class="pcoded-mtext">Session Idle Timeout</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="offline.html">
                            <span class="pcoded-mtext">Offline</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class=" ">
                <a href="animation.html">
                    <span class="pcoded-micon"><i
                            class="feather icon-aperture rotate-refresh"></i><b>A</b></span>
                    <span class="pcoded-mtext">Animations</span>
                </a>
            </li>
            <li class=" ">
                <a href="sticky.html">
                    <span class="pcoded-micon"><i class="feather icon-cpu"></i></span>
                    <span class="pcoded-mtext">Sticky Notes</span>
                    <span class="pcoded-badge label label-danger">HOT</span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-command"></i></span>
                    <span class="pcoded-mtext">Icons</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="icon-font-awesome.html">
                            <span class="pcoded-mtext">Font Awesome</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="icon-themify.html">
                            <span class="pcoded-mtext">Themify</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="icon-simple-line.html">
                            <span class="pcoded-mtext">Simple Line Icon</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="icon-ion.html">
                            <span class="pcoded-mtext">Ion Icon</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="icon-material-design.html">
                            <span class="pcoded-mtext">Material Design</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="icon-icofonts.html">
                            <span class="pcoded-mtext">Ico Fonts</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="icon-weather.html">
                            <span class="pcoded-mtext">Weather Icon</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="icon-typicons.html">
                            <span class="pcoded-mtext">Typicons</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="icon-flags.html">
                            <span class="pcoded-mtext">Flags</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>-->
        
        <ul class="pcoded-item pcoded-left-item">

        <li class=" ">
        <a href="index.php">
            <span class="pcoded-micon"><i class="feather icon-edit-1"></i></span>
            <span class="pcoded-mtext">Home</span>
            <span class="pcoded-badge label label-warning">NEW</span>
        </a>
    </li>
            
             <li class="pcoded-hasmenu">
                 <a href="javascript:void(0)">
                     <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                        <span class="pcoded-mtext">Users</span>
                 </a>
                    <ul class="pcoded-submenu">
                       
                     <li class=" ">
                            <a href="view-users.php">
                                <span class="pcoded-mtext">View users</span>
                            </a>
                     </li>

                    </ul>
            </li>

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                    <span class="pcoded-mtext">Counsellors</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="add-counsellor.php">
                            <span class="pcoded-mtext">Add Counsellor</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="view-counsellors.php">
                            <span class="pcoded-mtext">View Counsellors</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                    <span class="pcoded-mtext">Admins</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="add-admin.php">
                            <span class="pcoded-mtext">Add Admin</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="view-admins.php">
                            <span class="pcoded-mtext">View Admins</span>
                        </a>
                    </li>
                    
                </ul>
            </li>

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                    <span class="pcoded-mtext">TUPSU</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="add-tupsu.php">
                            <span class="pcoded-mtext">Add TUPSU</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="view-tupsu.php">
                            <span class="pcoded-mtext">View TUPSU</span>
                        </a>
                    </li>
                    
                </ul>
            </li>


            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                    <span class="pcoded-mtext">ADS</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="add-ads.php">
                            <span class="pcoded-mtext">Add Ads</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="view-ads.php">
                            <span class="pcoded-mtext">View Ads</span>
                        </a>
                    </li>
                    
                </ul>
            </li>

           
            <li class=" ">
                <a href="bookings.php">
                    <span class="pcoded-micon"><i class="feather icon-feather"></i></span>
                    <span class="pcoded-mtext">All Bookings</span>
                </a>
            </li>

            <li class=" ">
                <a href="ptest.php">
                    <span class="pcoded-micon"><i class="feather icon-feather"></i></span>
                    <span class="pcoded-mtext">Personality Request</span>
                </a>
            </li>

            <li class=" ">
                <a href="gtest.php">
                    <span class="pcoded-micon"><i class="feather icon-feather"></i></span>
                    <span class="pcoded-mtext">Whatsapp group Request</span>
                </a>
            </li>
            
           
    </div>
</nav>';
}

function addcounsellor($name, $email, $contact, $gpcpin, $region, $type, $type2, $type3, $cgroup)
{
    $ttype = $type.','.$type2.','.$type3;
    $fileinfo = pathinfo($_FILES['file_name']['name']);
    $newFilename = $fileinfo['filename'].'_'.time().'.'.$fileinfo['extension'];
    if (move_uploaded_file($_FILES['file_name']['tmp_name'], 'upload/'.$newFilename)) {
        $pic = $newFilename;
        include 'db.php';
        $cc = mysqli_query($conn, "SELECT * FROM counsellors WHERE contact ='$contact'");
        $r = mysqli_num_rows($cc);
        if ($r > 0) {
            echo ' Sorry counsellor already added';
        } else {
            $in = mysqli_query($conn, "INSERT  INTO counsellors(name,email,contact,region,type,status,pic,cgroup,gpcpin) VALUES ('$name','$email','$contact','$region','$ttype','available','$pic','$cgroup','$gpcpin')");
            if ($in) {
                echo 'counssuccess';
            } else {
                echo 'faild to add counsellor';
            }
        }
    }
}

function addadmin($name, $email, $password, $contact)
{
    $fileinfo = pathinfo($_FILES['file_name']['name']);
    $newFilename = $fileinfo['filename'].'_'.time().'.'.$fileinfo['extension'];
    if (move_uploaded_file($_FILES['file_name']['tmp_name'], 'upload/'.$newFilename)) {
        $pic = $newFilename;
        include 'db.php';
        $cc = mysqli_query($conn, "SELECT * FROM supper WHERE contact ='$contact'");
        $r = mysqli_num_rows($cc);
        if ($r > 0) {
            echo ' Sorry admin already added';
        } else {
            $password = md5($password);
            $in = mysqli_query($conn, "INSERT  INTO supper(name,email,password,contact,pic) VALUES ('$name','$email','$password','$contact','$pic')");
            if ($in) {
                echo 'adsuccess';
            } else {
                echo 'faild to add admin';
            }
        }
    }
}

function admins()
{
    include 'db.php';

    $ad = mysqli_query($conn, 'SELECT * FROM supper');
    while ($ra = mysqli_fetch_array($ad)) {
        echo '<tr>
        <td>'.$ra['name'].'</td>
        <td>'.$ra['email'].'</td>
        <td>'.$ra['contact'].'</td>
        <td><img src="upload/'.$ra['pic'].'" style="width="70px" height="70px"/></td>
        <td><a class="btn btn-danger" href="deladmin.php?id='.$ra['id'].'">Delete</a></td>
        
    </tr>';
    }
}

function users()
{
    include 'db.php';

    $ad = mysqli_query($conn, 'SELECT * FROM utable');
    while ($ra = mysqli_fetch_array($ad)) {
        echo '<tr>
        <td>'.$ra['name'].'</td>
        <td>'.$ra['email'].'</td>
        <td>'.$ra['contact'].'</td>
        <td>'.$ra['dob'].'</td>
        <td>'.$ra['gender'].'</td>
        <td>'.$ra['state'].'</td>
       
        <td><a class="btn btn-danger" href="delusers.php?id='.$ra['id'].'">Delete</a></td>
        
    </tr>';
    }
}

function ptest()
{
    include 'db.php';

    $ad = mysqli_query($conn, 'SELECT * FROM ptest');
    while ($ra = mysqli_fetch_array($ad)) {
        $uid = $ra['uid'];
        $su = mysqli_query($conn, "SELECT * FROM utable WHERE id = '$uid' ");
        $ru = mysqli_fetch_array($su);
        echo '<tr>
        <td>'.$ru['name'].'</td>
         <td>'.$ra['pcat'].'</td>
        <td>'.$ru['email'].'</td>
        <td>'.$ru['contact'].'</td>
        <td>'.$ru['dob'].'</td>
        <td>'.$ru['gender'].'</td>
        <td>'.$ru['state'].'</td>';
        if ($ra['status'] == 'pending') {
            echo '<td><a class="btn btn-secondary" href="idis.php?id='.$ra['id'].'&name='.$ru['name'].'">Approve</a></td>';
        } else {
            echo '<td><span class="btn btn-success">Approved</span></td>';
        }

        echo '</tr>';
    }
}

function gtest()
{
    include 'db.php';

    $ad = mysqli_query($conn, 'SELECT * FROM gp');
    while ($ra = mysqli_fetch_array($ad)) {
        $uid = $ra['uid'];
        $su = mysqli_query($conn, "SELECT * FROM utable WHERE id = '$uid' ");
        $ru = mysqli_fetch_array($su);
        echo '<tr>
        <td>'.$ru['name'].'</td>
         <td>'.$ra['pcat'].'</td>
        <td>'.$ru['email'].'</td>
        <td>'.$ru['contact'].'</td>
        <td>'.$ru['dob'].'</td>
        <td>'.$ru['gender'].'</td>
        <td>'.$ru['state'].'</td>';
        if ($ra['status'] == 'pending') {
            echo '<td><a class="btn btn-secondary" href="acceptgroup.php?id='.$ra['id'].'">Approve</a></td>';
        } else {
            echo '<td><span class="btn btn-success">Approved</span></td>';
        }

        echo '</tr>';
    }
}

function tupsu()
{
    include 'db.php';

    $ad = mysqli_query($conn, 'SELECT * FROM tupsu');
    while ($ra = mysqli_fetch_array($ad)) {
        echo '<tr>
        <td>'.$ra['title'].'</td>
        
        <td><img src="upload/'.$ra['pic'].'" style="width="70px" height="70px"/></td>
        <td><a class="btn btn-danger" href="deltup.php?id='.$ra['id'].'">Delete</a></td>
        
    </tr>';
    }
}

function ads()
{
    include 'db.php';

    $ad = mysqli_query($conn, 'SELECT * FROM ads');
    while ($ra = mysqli_fetch_array($ad)) {
        echo '<tr>
        <td>'.$ra['title'].'</td>
        
        <td><img src="upload/'.$ra['pic'].'" style="width="70px" height="70px"/></td>
        <td><a class="btn btn-danger" href="delads.php?id='.$ra['id'].'">Delete</a></td>
        
    </tr>';
    }
}

function counsellors()
{
    include 'db.php';

    $ad = mysqli_query($conn, 'SELECT * FROM counsellors');
    while ($ra = mysqli_fetch_array($ad)) {
        echo '<tr>
        <td>'.$ra['name'].'</td>
        <td>'.$ra['email'].'</td>
        <td>'.$ra['contact'].'</td>
        <td>'.$ra['region'].'</td>
        <td>'.$ra['type'].'</td>
         <td>'.$ra['cgroup'].'</td>
        <td><img src="upload/'.$ra['pic'].'" style="width="70px" height="70px"/></td>';
        if ($ra['status'] == 'pending') {
            echo '<td><a class="btn btn-primary" href="aprovecounsellor.php?id='.$ra['id'].'">Approve</a> | <a class="btn btn-danger" href="delcounsellor.php?id='.$ra['id'].'">Delete</a></td> ';
        } else {
            echo '<td><a class="btn btn-danger" href="delcounsellor.php?id='.$ra['id'].'">Delete</a></td> ';
        }

        echo ' </tr>';
    }
}

function allbookings()
{
    include 'db.php';

    $ad = mysqli_query($conn, 'SELECT * FROM bookings');
    while ($ra = mysqli_fetch_array($ad)) {
        $uid = $ra['userid'];

        $u = mysqli_query($conn, "SELECT * FROM utable WHERE id='$uid'");
        $ru = mysqli_fetch_array($u);
        echo '<tr>
        <td>'.$ru['name'].'</td>
        <td>'.$ra['userlocation'].'</td>
        <td>'.$ra['cname'].'</td>
        <td><img src="upload/'.$ra['cpic'].'" style="width="70px" height="70px"/></td>
        <td>'.$ra['ctype'].'</td>
        <td>'.$ra['clocation'].'</td>
        <td>'.$ra['ccontact'].'</td>
        <td>'.$ra['appdate'].'</td>
        <td>'.$ra['apptime'].'</td>
        <td>'.$ra['status'].'</td>';

        if ($ra['status'] == 'pending' && $ra['cid'] == 'notyet') {
            echo '<td><a class="btn btn-primary" href="assign.php?id='.$ra['id'].'&ctype='.$ra['ctype'].'">Assign Counsellor</a></td>';
        } elseif ($ra['status'] == 'pending' && $ra['cid'] != 'notyet') {
            echo '<td><a class="btn btn-primary" href="approve.php?id='.$ra['id'].'">Approve</a></td>';
        } else {
            echo '<td></td>';
        }
        echo' </tr>';
    }
}

function assigncounsellor($cid, $bid, $ctype)
{
    include 'db.php';
    include '../send.php';

    $getd = mysqli_query($conn, "SELECT * FROM counsellors WHERE id='$cid'");

    $row = mysqli_fetch_array($getd);
    $cname = $row['name'];
    $clocation = $row['region'];
    $cpic = $row['pic'];
    $ccontact = $row['contact'];
    $status = 'approved';

    $up = mysqli_query($conn, "UPDATE bookings SET cid='$cid',cname='$cname',clocation='$clocation',status='$status',cpic='$cpic',ccontact = '$ccontact' WHERE id='$bid'");
    $ck = mysqli_query($conn, "SELECT * FROM bookings WHERE id= '$bid'");
    $rc = mysqli_fetch_array($ck);
    $cneed = $rc['ctype'];
    $mid = $rc['userid'];
    $ck2 = mysqli_query($conn, "SELECT * FROM utable WHERE id= '$mid'");
    $rc2 = mysqli_fetch_array($ck2);
    $uname = $rc2['name'];
    if ($up) {
        $ss = mysqli_query($conn, "SELECT * FROM bookings WHERE id='$bid'");
        $sss = mysqli_fetch_array($ss);
        $userid = $sss['userid'];
        mysqli_query($conn, "INSERT INTO notification (uid,nmess,status) VALUES ('$userid','You have been assigned a counsellor navigate to Bookings to check.','unread')");
        $txt1 = 'Dear '.$uname.',    You have been assigned to Counsellor '.$cname.'. Kindly visit the iCounse-Gh App and Check Bookings to interact . ';
        $send8 = new send();
        $send8->key = 'y0i5w3vGnQi6M45azQACwS4vo';
        $send8->message = $txt1;
        $send8->numbers = $rc2['contact'];
        $send8->sender = 'iCounsel Gh';
        $isError = true;
        $response8 = $send8->sendMessage();

        $ucont = $rc2['contact'];

        $txtw = 'Dear '.$cname.',    You have been assigned to '.$uname.'. Contact  : '.$ucont.', Counselling need : '.$cneed.' in the iCounsel-Gh App';
        $send9 = new send();
        $send9->key = 'y0i5w3vGnQi6M45azQACwS4vo';
        $send9->message = $txtw;
        $send9->numbers = $ccontact;
        $send9->sender = 'iCounsel Gh';
        $isError = true;
        $response9 = $send9->sendMessage();
        echo 'counsassign';
    } else {
        echo 'failed to assign';
    }
}

function addtupsu($title)
{
    include 'db.php';

    if (empty($_FILES['file_name']['name'])) {
        echo 'file cant be empty';
    } else {
        $fileinfo = pathinfo($_FILES['file_name']['name']);
        $newFilename = $fileinfo['filename'].'_'.time().'.'.$fileinfo['extension'];
        if (move_uploaded_file($_FILES['file_name']['tmp_name'], 'upload/'.$newFilename)) {
            $pic = $newFilename;

            $sim = mysqli_query($conn, "INSERT  INTO tupsu (title,pic) VALUES ('$title','$pic')");

            if ($sim) {
                echo 'tupsuadded';
            } else {
                echo 'failed to add tupsu';
            }
        } else {
            echo 'failed to upload image';
        }
    }
}

function addadds($title)
{
    include 'db.php';

    if (empty($_FILES['file_name']['name'])) {
        echo 'file cant be empty';
    } else {
        $fileinfo = pathinfo($_FILES['file_name']['name']);
        $newFilename = $fileinfo['filename'].'_'.time().'.'.$fileinfo['extension'];
        if (move_uploaded_file($_FILES['file_name']['tmp_name'], 'upload/'.$newFilename)) {
            $pic = $newFilename;

            $sim = mysqli_query($conn, "INSERT  INTO ads (title,pic) VALUES ('$title','$pic')");

            if ($sim) {
                echo 'adsadded';
            } else {
                echo 'failed to add ads';
            }
        } else {
            echo 'failed to upload image';
        }
    }
}

function login($email, $password)
{
    include 'db.php';
    $password = md5($password);

    $ch = mysqli_query($conn, "SELECT * FROM supper WHERE email ='$email' AND password='$password'");
    $row = mysqli_fetch_array($ch);
    $lg = mysqli_num_rows($ch);
    if ($lg > 0) {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['contact'] = $row['contact'];
        $_SESSION['pic'] = $row['pic'];

        echo 'loginsuccess';
    } else {
        echo 'invalid credential please try again';
    }
}

function totalusers()
{
    include 'db.php';
    $a = mysqli_query($conn, 'SELECT * FROM utable');
    $aa = mysqli_num_rows($a);
    echo $aa;
}

function totaladdmins()
{
    include 'db.php';
    $a = mysqli_query($conn, 'SELECT * FROM supper');
    $aa = mysqli_num_rows($a);
    echo $aa;
}

function totalbookings()
{
    include 'db.php';
    $a = mysqli_query($conn, 'SELECT * FROM bookings');
    $aa = mysqli_num_rows($a);
    echo $aa;
}

function totaltupsu()
{
    include 'db.php';
    $a = mysqli_query($conn, 'SELECT * FROM tupsu');
    $aa = mysqli_num_rows($a);
    echo $aa;
}

function approvedbk()
{
    include 'db.php';
    $a = mysqli_query($conn, "SELECT * FROM bookings WHERE status='approved'");
    $aa = mysqli_num_rows($a);
    echo $aa;
}

function pendingbk()
{
    include 'db.php';
    $a = mysqli_query($conn, "SELECT * FROM bookings WHERE status='pending'");
    $aa = mysqli_num_rows($a);
    echo $aa;
}

function totalcounsellors()
{
    include 'db.php';
    $a = mysqli_query($conn, 'SELECT * FROM counsellors');
    $aa = mysqli_num_rows($a);
    echo $aa;
}

// idiscover me

function idiscover($pid, $token)
{
    include 'db.php';

    $del = mysqli_query($conn, "UPDATE ptest SET token = '$token', status = 'approved' WHERE id = $pid");

    if ($del) {
        echo 'dicosucc';
    } else {
        echo 'Failed to update';
    }
}
