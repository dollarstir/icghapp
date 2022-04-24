<!DOCTYPE html>
<html lang="en">
<?php  include 'driver.php'; ?>
<head>
    <title>Assign Counsellor</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->

    <link rel="icon" href="files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- sweet alert framework -->
        <link rel="stylesheet" type="text/css" href="https://demo.dashboardpack.com/adminty-html/files/assets/css/sweetalert.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="https://demo.dashboardpack.com/adminty-html/files/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="https://demo.dashboardpack.com/adminty-html/files/assets/icon/icofont/css/icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">
    <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="https://demo.dashboardpack.com/adminty-html/files/assets/pages/j-pro/css/demo.css">
    <link rel="stylesheet" type="text/css" href="https://demo.dashboardpack.com/adminty-html/files/assets/pages/j-pro/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://demo.dashboardpack.com/adminty-html/files/assets/pages/j-pro/css/j-pro-modern.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">




    <link rel="stylesheet" type="text/css" href="files/assets/css/jquery.mCustomScrollbar.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <!-- top nav herer -->
            <?php tbar(); ?>

            <!-- top nav ends  -->

            <!-- Sidebar chat start -->
            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-inner-header">
                                <div class="back_chatBox">
                                    <div class="right-icon-control">
                                        <input type="text" class="form-control  search-text" placeholder="Search Friend"
                                            id="search-friends">
                                        <div class="form-icon">
                                            <i class="icofont icofont-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box" data-id="1" data-status="online"
                                    data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                                    title="Josephin Doe">
                                    <a class="media-left" href="ready-suggestion-form.html#!">
                                        <img class="media-object img-radius img-radius"
                                            src="files/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online"
                                    data-username="Lary Doe" data-toggle="tooltip" data-placement="left"
                                    title="Lary Doe">
                                    <a class="media-left" href="ready-suggestion-form.html#!">
                                        <img class="media-object img-radius" src="files/assets/images/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice"
                                    data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="ready-suggestion-form.html#!">
                                        <img class="media-object img-radius" src="files/assets/images/avatar-4.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia"
                                    data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="ready-suggestion-form.html#!">
                                        <img class="media-object img-radius" src="files/assets/images/avatar-3.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen"
                                    data-toggle="tooltip" data-placement="left" title="Suzen">
                                    <a class="media-left" href="ready-suggestion-form.html#!">
                                        <img class="media-object img-radius" src="files/assets/images/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat start-->
            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-chevron-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="ready-suggestion-form.html#!">
                        <img class="media-object img-radius img-radius m-t-5" src="files/assets/images/avatar-3.jpg"
                            alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="ready-suggestion-form.html#!">
                            <img class="media-object img-radius img-radius m-t-5"
                                src="files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="feather icon-navigation"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- sidebae  -->
                        <?php sidebar(); ?>
                    <!-- side bar -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <!-- <h4>Suggestion form</h4> -->
                                                        <!-- <span>lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item"  style="float: left;">
                                                            <a href="index.html"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="ready-suggestion-form.html#!">Ready To Use</a>
                                                        </li>
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="ready-suggestion-form.html#!">Suggestion form</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Ready suggestion card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <center><h5>Assign Counsellor To  Customer</h5></center>
                                                        <!-- <span>lorem ipsum dolor sit amet, consectetur adipisicing -->
                                                            <!-- elit</span> -->
                                                        <?php 
                                                        include 'db.php';

                                                        $bid = $_GET['id'];
                                                        $cloc= $_GET['ctype'];

                                                        $get = mysqli_query($conn,"SELECT * FROM bookings WHERE id ='$bid'");
                                                        $r = mysqli_fetch_array($get);
                                                        extract($r);
                                                        
                                                        ;?>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="j-wrapper j-wrapper-640">
                                                            <form class="j-pro assf" id="j-pro">
                                                                <!-- end /.header-->
                                                                <div class="j-content">
                                                                    <!-- start name -->
                                                                    <!-- <div class="j-row">
                                                                        <div class="j-span6 j-unit">
                                                                            <div class="j-input">
                                                                                <label class="j-icon-left"
                                                                                    for="first_name">
                                                                                    <i
                                                                                        class="icofont icofont-ui-user"></i>
                                                                                </label>
                                                                                <input type="text" id="first_name"
                                                                                    name="fname"
                                                                                    placeholder="First name"
                                                                                    class="name-group">
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-span6 j-unit">
                                                                            <div class="j-input">
                                                                                <label class="j-icon-left"
                                                                                    for="last_name">
                                                                                    <i
                                                                                        class="icofont icofont-ui-user"></i>
                                                                                </label>
                                                                                <input type="text" id="last_name"
                                                                                    name="lname"
                                                                                    placeholder="Last name"
                                                                                    class="name-group">
                                                                            </div>
                                                                        </div>
                                                                    </div> -->
                                                                    <!-- end name -->
                                                                    <!-- start email -->
                                                                    <!-- <div class="j-unit">
                                                                        <div class="j-input">
                                                                            <label class="j-icon-left" for="email">
                                                                                <i class="icofont icofont-envelope"></i>
                                                                            </label>
                                                                            <input type="email" placeholder="Email"
                                                                                id="email" name="email">
                                                                        </div>
                                                                    </div> -->
                                                                    <!-- end email -->
                                                                    <!-- start subject -->
                                                                    <div class="j-unit">
                                                                        <div class="j-input">
                                                                            <label class="j-icon-left" for="phone">
                                                                                <i class="icofont icofont-globe"></i>
                                                                            </label>
                                                                            <input type="text" id="phone"
                                                                                name="b" placeholder="Counsellor Location" value="<?php echo 'Booking No: #'.$bid;?>" readonly>

                                                                                <input type="hidden" id="phone" name="bid" placeholder="Counsellor Location" value="<?php echo $bid;?>">

                                                                                
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="j-unit">
                                                                        <div class="j-input">
                                                                            <label class="j-icon-left" for="phone">
                                                                                <i class="icofont icofont-map"></i>
                                                                            </label>
                                                                            <input type="text" id="phone"
                                                                                name="ctype" placeholder="Counsellor Location" value="<?php echo $cloc;?>" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end subject -->
                                                                    <!-- start country -->
                                                                    <div class="j-unit">
                                                                        <label class="j-input j-select">
                                                                            <select name="cid">
                                                                                <option value="" selected>Choose Counsellor to Assign
                                                                                    </option>
                                                                                <?php 
                                                                                
                                                                                $so = mysqli_query($conn,"SELECT * FROM counsellors WHERE type='$ctype'");
                                                                                $cc = mysqli_num_rows($so);
                                                                                if($cc > 0){
                                                                                    while($row = mysqli_fetch_array($so)){
                                                                                        echo '<option value="'.$row['id'].'">'.$row['name'].'( '.$row['type'].')</option>';
                                                                                    }
                                                                                }
                                                                                else{
                                                                                    echo '<option value=""> Sorry no Counsellor available for this category</option>';

                                                                                }
                                                                                
                                                                                ;?>
                                                                            </select>
                                                                            <i></i>
                                                                        </label>
                                                                    </div>
                                                                    <!-- end country -->

                                                                    


                                                                     <!-- start country -->
                                                                     <!-- <div class="j-unit">
                                                                        <label class="j-input j-select">
                                                                            <select name="type">
                                                                                <option value="" selected>Choose Counsellor type
                                                                                    </option>
                                                                                <option value="Academic and Career counsellor">Academic and Career</option>
                                                                                <option value="Relationship and Marriage counsellor">Relationship and Marriage</option>
                                                                                <option value="Regenerative Health counsellor">Regenerative Health</option>
                                                                                <option value="Behaviour Modifications counsellor">Behaviour Modifications</option>
                                                                                <option value="Crisis and Bereavement counsellor">Crisis and Bereavement</option>
                                                                                <option value="Addiction counsellor">Addiction</option>
                                                                                <option value="Financial counsellor">Financial</option>
                                                                                <option value="Reproductive Health counsellor">Reproductive Health</option>
                                                                                <option value="Sexuality Crisis counsellor">Sexuality Crisis</option>
                                                                            </select>
                                                                            <i></i>
                                                                        </label>
                                                                    </div> -->
                                                                    <!-- end country -->
                                                                    <div class="j-divider j-gap-bottom-25"></div>
                                                                    <!-- start subject -->
                                                                    <!-- <div class="j-unit">
                                                                        <div class="j-input">
                                                                            <label class="j-icon-left" for="subject">
                                                                                <i class="icofont icofont-ui-check"></i>
                                                                            </label>
                                                                            <input type="text" id="subject"
                                                                                name="subject" placeholder="Subject">
                                                                        </div>
                                                                    </div> -->
                                                                    <!-- end subject -->
                                                                    <!-- start message -->
                                                                    <!-- <div class="j-unit">
                                                                        <div class="j-input">
                                                                            <label class="j-icon-left" for="message">
                                                                                <i
                                                                                    class="icofont icofont-file-text"></i>
                                                                            </label>
                                                                            <textarea placeholder="Additional info"
                                                                                spellcheck="false" id="message"
                                                                                name="message"></textarea>
                                                                            <span
                                                                                class="j-tooltip j-tooltip-right-top">Describe
                                                                                your proposal as detailed as
                                                                                possible</span>
                                                                        </div>
                                                                    </div> -->
                                                                    <!-- end message -->
                                                                    <!-- start file -->
                                                                    <!-- <div class="j-unit">
                                                                        <div class="j-input j-append-big-btn">
                                                                            <label class="j-icon-left" for="file_input">
                                                                                <i class="icofont icofont-download"></i>
                                                                            </label>
                                                                            <div class="j-file-button">
                                                                                Browse
                                                                                <input type="file" name="file_name"
                                                                                    onchange="document.getElementById('file_input').value = this.value;">
                                                                            </div>
                                                                            <input type="text" id="file_input"
                                                                                readonly=""
                                                                                placeholder="no file selected" name="">
                                                                            <span class="j-hint">Only: jpg / png / doc,
                                                                                less 1Mb</span>
                                                                        </div>
                                                                    </div> -->
                                                                    <!-- end file -->
                                                                    <!-- start response from server -->
                                                                    <div class="j-response"></div>
                                                                    <!-- end response from server -->
                                                                </div>
                                                                <!-- end /.content -->
                                                                <div class="j-footer">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Send</button>
                                                                    <a class="btn btn-default m-r-20" href="bookings.php">Back </a>
                                                                </div>
                                                                <!-- end /.footer -->
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Ready suggestion card end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="https://demo.dashboardpack.com/adminty-html/files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="https://demo.dashboardpack.com/adminty-html/files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="https://demo.dashboardpack.com/adminty-html/files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="https://demo.dashboardpack.com/adminty-html/files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="https://demo.dashboardpack.com/adminty-html/files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="https://demo.dashboardpack.com/adminty-html/files/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="https://demo.dashboardpack.com/adminty-html/files/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://demo.dashboardpack.com/adminty-html/files/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://demo.dashboardpack.com/adminty-html/files/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://demo.dashboardpack.com/adminty-html/files/assets/js/sweetalert.js"></script>
    <!-- j-pro js -->
    <script type="text/javascript" src="https://demo.dashboardpack.com/adminty-html/files/assets/pages/j-pro/js/jquery.ui.min.js"></script>
    <script type="text/javascript" src="https://demo.dashboardpack.com/adminty-html/files/assets/pages/j-pro/js/jquery.maskedinput.min.js"></script>
    <!-- <script type="text/javascript" src="https://demo.dashboardpack.com/adminty-html/files/assets/pages/j-pro/js/jquery.j-pro.js"></script> -->
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="https://demo.dashboardpack.com/adminty-html/files/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="https://demo.dashboardpack.com/adminty-html/files/bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="https://demo.dashboardpack.com/adminty-html/files/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

    <!-- i18next.min.js -->
    <script type="text/javascript" src="https://demo.dashboardpack.com/adminty-html/files/bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript"
        src="https://demo.dashboardpack.com/adminty-html/files/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript"
        src="https://demo.dashboardpack.com/adminty-html/files/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="https://demo.dashboardpack.com/adminty-html/files/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="https://demo.dashboardpack.com/adminty-html/files/assets/pages/j-pro/js/custom/suggestion-form.js"></script>

    <script src="https://demo.dashboardpack.com/adminty-html/files/assets/js/pcoded.min.js"></script>
    <script src="https://demo.dashboardpack.com/adminty-html/files/assets/js/vartical-layout.min.js"></script>
    <script src="https://demo.dashboardpack.com/adminty-html/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="https://demo.dashboardpack.com/adminty-html/files/assets/js/script.js"></script>


    <!-- dollar js -->

    <script src="ajax.js"></script>
</body>

</html>