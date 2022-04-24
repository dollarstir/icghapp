<?php 
session_start();

if(isset($_SESSION['loggedin'] ) && $_SESSION['loggedin'] == true){
   
}
else{
    echo '<script> window.location="auth.php"</script>';
}

include 'driver.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>iCounsel Gh Tupsu</title>
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
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css"
        href="files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="files/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="files/assets/pages/data-table/extensions/buttons/css/buttons.dataTables.min.css">
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

            <!-- tbar -->
            <?php tbar();?>
            <!-- tbar -->

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
                                    <a class="media-left" href="dt-ext-buttons-html-5-data-export.html#!">
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
                                    <a class="media-left" href="dt-ext-buttons-html-5-data-export.html#!">
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
                                    <a class="media-left" href="dt-ext-buttons-html-5-data-export.html#!">
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
                                    <a class="media-left" href="dt-ext-buttons-html-5-data-export.html#!">
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
                                    <a class="media-left" href="dt-ext-buttons-html-5-data-export.html#!">
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
                    <a class="media-left photo-table" href="dt-ext-buttons-html-5-data-export.html#!">
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
                        <a href="dt-ext-buttons-html-5-data-export.html#!">
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
                    <!-- sidebar -->
                  <?php  sidebar(); ?>
                    <!-- sidebar -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <!-- <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>HTML 5 Data Export</h4>
                                                        <span>HTML5 buttons provides the local file saving
                                                            features</span>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item"  style="float: left;">
                                                            <a href="index.html"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="dt-ext-buttons-html-5-data-export.html#!">Data Table
                                                                Extensions</a>
                                                        </li>
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="dt-ext-buttons-html-5-data-export.html#!">Button</a>
                                                        </li>
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="dt-ext-buttons-html-5-data-export.html#!">HTML5 Data-Export</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- HTML5 Export Buttons table start -->
                                                <div class="card">
                                                    <div class="card-header table-card-header">
                                                        <center><h5>TUPSU</h5></center>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="basic-btn"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Title</th>
                                                                        
                                                                        <th>Picture</th>
                                                                        <th>Action</th>
                                                                       
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php tupsu(); ?>      
                                                                    
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                    <th>Title</th>
                                                                       
                                                                        <th>Picture</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- HTML5 Export Buttons end -->
                                                <!-- Column Selectors table start -->
                                                <!-- <div class="card">
                                                    <div class="card-header">
                                                        <h5>Column Selectors</h5>
                                                        <span class="m-b-20">All of the data export buttons have a
                                                            exportOptions option which can be used to specify
                                                            information about what data should be exported and how. The
                                                            options given for this parameter are passed directly to the
                                                            buttons.exportData() method to obtain the required
                                                            data.</span>
                                                        <span>One of the most commonly used is the columns option which
                                                            defines the columns that should be used as part of the
                                                            export. This is given as a column-selector, making it simple
                                                            to tell it if you want only visible columns, or a mix of the
                                                            columns available.</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="cbtn-selectors"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Tiger Nixon</td>
                                                                        <td>System Architect</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>61</td>
                                                                        <td>2011/04/25</td>
                                                                        <td>$320,800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>63</td>
                                                                        <td>2011/07/25</td>
                                                                        <td>$170,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Ashton Cox</td>
                                                                        <td>Junior Technical Author</td>
                                                                        <td>San Francisco</td>
                                                                        <td>66</td>
                                                                        <td>2009/01/12</td>
                                                                        <td>$86,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Cedric Kelly</td>
                                                                        <td>Senior Javascript Developer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2012/03/29</td>
                                                                        <td>$433,060</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Airi Satou</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>33</td>
                                                                        <td>2008/11/28</td>
                                                                        <td>$162,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Brielle Williamson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>New York</td>
                                                                        <td>61</td>
                                                                        <td>2012/12/02</td>
                                                                        <td>$372,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Herrod Chandler</td>
                                                                        <td>Sales Assistant</td>
                                                                        <td>San Francisco</td>
                                                                        <td>59</td>
                                                                        <td>2012/08/06</td>
                                                                        <td>$137,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Rhona Davidson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>Tokyo</td>
                                                                        <td>55</td>
                                                                        <td>2010/10/14</td>
                                                                        <td>$327,900</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Colleen Hurst</td>
                                                                        <td>Javascript Developer</td>
                                                                        <td>San Francisco</td>
                                                                        <td>39</td>
                                                                        <td>2009/09/15</td>
                                                                        <td>$205,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sonya Frost</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>23</td>
                                                                        <td>2008/12/13</td>
                                                                        <td>$103,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jena Gaines</td>
                                                                        <td>Office Manager</td>
                                                                        <td>London</td>
                                                                        <td>30</td>
                                                                        <td>2008/12/19</td>
                                                                        <td>$90,560</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Quinn Flynn</td>
                                                                        <td>Support Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2013/03/03</td>
                                                                        <td>$342,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Charde Marshall</td>
                                                                        <td>Regional Director</td>
                                                                        <td>San Francisco</td>
                                                                        <td>36</td>
                                                                        <td>2008/10/16</td>
                                                                        <td>$470,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Haley Kennedy</td>
                                                                        <td>Senior Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>43</td>
                                                                        <td>2012/12/18</td>
                                                                        <td>$313,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tatyana Fitzpatrick</td>
                                                                        <td>Regional Director</td>
                                                                        <td>London</td>
                                                                        <td>19</td>
                                                                        <td>2010/03/17</td>
                                                                        <td>$385,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Michael Silva</td>
                                                                        <td>Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>66</td>
                                                                        <td>2012/11/27</td>
                                                                        <td>$198,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Paul Byrd</td>
                                                                        <td>Chief Financial Officer (CFO)</td>
                                                                        <td>New York</td>
                                                                        <td>64</td>
                                                                        <td>2010/06/09</td>
                                                                        <td>$725,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gloria Little</td>
                                                                        <td>Systems Administrator</td>
                                                                        <td>New York</td>
                                                                        <td>59</td>
                                                                        <td>2009/04/10</td>
                                                                        <td>$237,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Bradley Greer</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>London</td>
                                                                        <td>41</td>
                                                                        <td>2012/10/13</td>
                                                                        <td>$132,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Dai Rios</td>
                                                                        <td>Personnel Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>35</td>
                                                                        <td>2012/09/26</td>
                                                                        <td>$217,500</td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!-- Column Selectors end -->
                                                <!-- Excel - Cell Background table start -->
                                                <!-- <div class="card">
                                                    <div class="card-header">
                                                        <h5>Excel - Cell Background</h5>
                                                        <span>The Excel export button saves to an XLSX file and the data
                                                            can be customized before exporting the file using the
                                                            customize method of the excelHtml5 button type.</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="excel-bg"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Tiger Nixon</td>
                                                                        <td>System Architect</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>61</td>
                                                                        <td>2011/04/25</td>
                                                                        <td>$320,800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>63</td>
                                                                        <td>2011/07/25</td>
                                                                        <td>$170,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Ashton Cox</td>
                                                                        <td>Junior Technical Author</td>
                                                                        <td>San Francisco</td>
                                                                        <td>66</td>
                                                                        <td>2009/01/12</td>
                                                                        <td>$86,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Cedric Kelly</td>
                                                                        <td>Senior Javascript Developer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2012/03/29</td>
                                                                        <td>$433,060</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Airi Satou</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>33</td>
                                                                        <td>2008/11/28</td>
                                                                        <td>$162,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Brielle Williamson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>New York</td>
                                                                        <td>61</td>
                                                                        <td>2012/12/02</td>
                                                                        <td>$372,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Herrod Chandler</td>
                                                                        <td>Sales Assistant</td>
                                                                        <td>San Francisco</td>
                                                                        <td>59</td>
                                                                        <td>2012/08/06</td>
                                                                        <td>$137,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Rhona Davidson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>Tokyo</td>
                                                                        <td>55</td>
                                                                        <td>2010/10/14</td>
                                                                        <td>$327,900</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Colleen Hurst</td>
                                                                        <td>Javascript Developer</td>
                                                                        <td>San Francisco</td>
                                                                        <td>39</td>
                                                                        <td>2009/09/15</td>
                                                                        <td>$205,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sonya Frost</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>23</td>
                                                                        <td>2008/12/13</td>
                                                                        <td>$103,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jena Gaines</td>
                                                                        <td>Office Manager</td>
                                                                        <td>London</td>
                                                                        <td>30</td>
                                                                        <td>2008/12/19</td>
                                                                        <td>$90,560</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Quinn Flynn</td>
                                                                        <td>Support Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2013/03/03</td>
                                                                        <td>$342,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Charde Marshall</td>
                                                                        <td>Regional Director</td>
                                                                        <td>San Francisco</td>
                                                                        <td>36</td>
                                                                        <td>2008/10/16</td>
                                                                        <td>$470,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Haley Kennedy</td>
                                                                        <td>Senior Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>43</td>
                                                                        <td>2012/12/18</td>
                                                                        <td>$313,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tatyana Fitzpatrick</td>
                                                                        <td>Regional Director</td>
                                                                        <td>London</td>
                                                                        <td>19</td>
                                                                        <td>2010/03/17</td>
                                                                        <td>$385,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Michael Silva</td>
                                                                        <td>Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>66</td>
                                                                        <td>2012/11/27</td>
                                                                        <td>$198,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Paul Byrd</td>
                                                                        <td>Chief Financial Officer (CFO)</td>
                                                                        <td>New York</td>
                                                                        <td>64</td>
                                                                        <td>2010/06/09</td>
                                                                        <td>$725,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gloria Little</td>
                                                                        <td>Systems Administrator</td>
                                                                        <td>New York</td>
                                                                        <td>59</td>
                                                                        <td>2009/04/10</td>
                                                                        <td>$237,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Bradley Greer</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>London</td>
                                                                        <td>41</td>
                                                                        <td>2012/10/13</td>
                                                                        <td>$132,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Dai Rios</td>
                                                                        <td>Personnel Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>35</td>
                                                                        <td>2012/09/26</td>
                                                                        <td>$217,500</td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!-- Excel - Cell Background end -->
                                                <!-- Custom File (JSON) table start -->
                                                <!-- <div class="card">
                                                    <div class="card-header">
                                                        <h5>Custom File (JSON)</h5>
                                                        <span>Buttons uses the excellent FileSaver.js by Eli Grey in
                                                            order to be able to create and download files on the
                                                            client-side (i.e. for the CSV and Excel button types).
                                                            Buttons' built in FileSaver.js is exposed via
                                                            $.fn.dataTable.fileSave() when the HTML5 button types file
                                                            is loaded, and it can be used to easily create your own
                                                            custom files.</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="pdf-json"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Tiger Nixon</td>
                                                                        <td>System Architect</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>61</td>
                                                                        <td>2011/04/25</td>
                                                                        <td>$320,800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>63</td>
                                                                        <td>2011/07/25</td>
                                                                        <td>$170,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Ashton Cox</td>
                                                                        <td>Junior Technical Author</td>
                                                                        <td>San Francisco</td>
                                                                        <td>66</td>
                                                                        <td>2009/01/12</td>
                                                                        <td>$86,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Cedric Kelly</td>
                                                                        <td>Senior Javascript Developer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2012/03/29</td>
                                                                        <td>$433,060</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Airi Satou</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>33</td>
                                                                        <td>2008/11/28</td>
                                                                        <td>$162,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Brielle Williamson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>New York</td>
                                                                        <td>61</td>
                                                                        <td>2012/12/02</td>
                                                                        <td>$372,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Herrod Chandler</td>
                                                                        <td>Sales Assistant</td>
                                                                        <td>San Francisco</td>
                                                                        <td>59</td>
                                                                        <td>2012/08/06</td>
                                                                        <td>$137,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Rhona Davidson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>Tokyo</td>
                                                                        <td>55</td>
                                                                        <td>2010/10/14</td>
                                                                        <td>$327,900</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Colleen Hurst</td>
                                                                        <td>Javascript Developer</td>
                                                                        <td>San Francisco</td>
                                                                        <td>39</td>
                                                                        <td>2009/09/15</td>
                                                                        <td>$205,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sonya Frost</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>23</td>
                                                                        <td>2008/12/13</td>
                                                                        <td>$103,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jena Gaines</td>
                                                                        <td>Office Manager</td>
                                                                        <td>London</td>
                                                                        <td>30</td>
                                                                        <td>2008/12/19</td>
                                                                        <td>$90,560</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Quinn Flynn</td>
                                                                        <td>Support Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2013/03/03</td>
                                                                        <td>$342,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Charde Marshall</td>
                                                                        <td>Regional Director</td>
                                                                        <td>San Francisco</td>
                                                                        <td>36</td>
                                                                        <td>2008/10/16</td>
                                                                        <td>$470,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Haley Kennedy</td>
                                                                        <td>Senior Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>43</td>
                                                                        <td>2012/12/18</td>
                                                                        <td>$313,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tatyana Fitzpatrick</td>
                                                                        <td>Regional Director</td>
                                                                        <td>London</td>
                                                                        <td>19</td>
                                                                        <td>2010/03/17</td>
                                                                        <td>$385,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Michael Silva</td>
                                                                        <td>Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>66</td>
                                                                        <td>2012/11/27</td>
                                                                        <td>$198,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Paul Byrd</td>
                                                                        <td>Chief Financial Officer (CFO)</td>
                                                                        <td>New York</td>
                                                                        <td>64</td>
                                                                        <td>2010/06/09</td>
                                                                        <td>$725,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gloria Little</td>
                                                                        <td>Systems Administrator</td>
                                                                        <td>New York</td>
                                                                        <td>59</td>
                                                                        <td>2009/04/10</td>
                                                                        <td>$237,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Bradley Greer</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>London</td>
                                                                        <td>41</td>
                                                                        <td>2012/10/13</td>
                                                                        <td>$132,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Dai Rios</td>
                                                                        <td>Personnel Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>35</td>
                                                                        <td>2012/09/26</td>
                                                                        <td>$217,500</td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!-- Custom File (JSON) table end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
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
                    <img src="files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="files/assets/images/browser/ie.png" alt="">
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
    <script type="text/javascript" src="files/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="files/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="files/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="files/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="files/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="files/bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="files/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
    <!-- data-table js -->
    <script src="files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="files/assets/pages/data-table/js/jszip.min.js"></script>
    <script src="files/assets/pages/data-table/js/pdfmake.min.js"></script>
    <script src="files/assets/pages/data-table/js/vfs_fonts.js"></script>
    <script src="files/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js"></script>
    <script src="files/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js"></script>
    <script src="files/assets/pages/data-table/extensions/buttons/js/jszip.min.js"></script>
    <script src="files/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js"></script>
    <script src="files/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js"></script>
    <script src="files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="files/assets/pages/data-table/js/dataTables.bootstrap4.min.js"></script>
    <script src="files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="files/bower_components/i18next/i18next.min.js"></script>
    <script type="text/javascript"
        src="files/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript"
        src="files/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="files/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script src="files/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js"></script>
    <script src="files/assets/js/pcoded.min.js"></script>
    <script src="files/assets/js/vartical-layout.min.js"></script>
    <script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="files/assets/js/script.js"></script>

     <!-- dollar js -->

     <script src="ajax.js"></script>
</body>

</html>