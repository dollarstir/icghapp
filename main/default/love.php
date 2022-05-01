<?php

include 'driver.php';
if (isset($_GET['heart'])) {
    if ($_GET['heart'] == 'addcounsellor') {
        extract($_POST);
        $name = $fname.' '.$lname;
        if (empty($fname) || empty($lname) || empty($email) || empty($region) || empty($type) || empty($contact)) {
            echo 'all fields are required';
        } else {
            addcounsellor($name, $email, $contact, $region, $type, $type2, $type3, $cgroup);
        }
    }

    if ($_GET['heart'] == 'addadmin') {
        extract($_POST);
        $name = $fname.' '.$lname;
        if (empty($fname) || empty($lname) || empty($email) || empty($contact)) {
            echo 'all fields are required';
        } else {
            addadmin($name, $email, $password, $contact);
        }
    }

    if ($_GET['heart'] == 'assignc') {
        extract($_POST);

        if (empty($cid) || empty($bid) || empty($ctype)) {
            echo 'all fields are required';
        } else {
            assigncounsellor($cid, $bid, $ctype);
        }
    }

    if ($_GET['heart'] == 'addtus') {
        extract($_POST);

        if (empty($title)) {
            echo 'title can not be empty';
        } else {
            addtupsu($title);
        }
    }

    if ($_GET['heart'] == 'addads') {
        extract($_POST);

        if (empty($title)) {
            echo 'title can not be empty';
        } else {
            addadds($title);
        }
    }

    if ($_GET['heart'] == 'mylogin') {
        include 'db.php';
        extract($_POST);

        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);

        if (empty($email) || empty($password)) {
            echo 'All fields are required';
        } else {
            login($email, $password);
        }
    }

    if ($_GET['heart'] == 'idisc') {
        include 'db.php';
        extract($_POST);

        $token = mysqli_real_escape_string($conn, $token);

        if (empty($token)) {
            echo 'token cannot be empty';
        } else {
            idiscover($pid, $token);
        }
    }
}
