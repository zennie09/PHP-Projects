<?php

    session_start();
    include '../../Class/Login.php';
    $obj = new Login();

    if (isset($_POST['Login'])) {
        if (isset($_POST['Username'])) {
            $name = $_POST['Username'];
        } else {
            $name = 'Please enter your Username!!';
        }

        if (isset($_POST['Password'])) {
            $password = $_POST['Password'];
        } else {
            $password = 'Please enter your Password!!';
        }

        if ($name == '' && $password == '') {
            echo '<script> alert("Please Fill in both the username and password fields!")</script>';
            header('../index.php');
        } elseif ($name != '' && $password == '') {
            echo '<script> alert("Please Fill in both the password fields!")</script>';
        } elseif ($name == '' && $password != '') {
            echo '<script> alert("Please Fill in both the username fields!")</script>';
        } else {
            $obj->set_login_name($name);
            $obj->set_login_password($password);
            echo $obj->get_login_name();
            echo $obj->get_login_password();
            $login_id = $obj->Login_ID($obj->get_login_name(), $obj->get_login_password());

            // initialize session variables
            $_SESSION['logged_in_user_id'] = $login_id;
            $_SESSION['logged_in_user_name'] = $name;

            header('Location:../timesheet.php');

            // access session variables
            /*echo 'This is the id of a user: '.$_SESSION['logged_in_user_id'];
            echo $_SESSION['logged_in_user_name'];*/
        }
    }
