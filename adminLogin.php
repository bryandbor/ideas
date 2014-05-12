<?php
    header('Access-Control-Allow-Origin: *');
    if (isset($_POST['user'], $_POST['pass'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if ($user == 'ideasAdmin' && $pass == 'ideas@Greellow8') {
            session_start();
            $_SESSION['user']='ideasAdmin';
            $_SESSION['pass']='ideas@Greellow8';
            echo 'success';
        } else {
            echo 'Incorrect username and/or password.';
        }
    } else {
        echo 'Username and/or password are not set. ';
    }
?>