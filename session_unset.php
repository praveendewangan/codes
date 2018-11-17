<?php
    session_start();
    unset($_SESSION['name']);//thi is for a specific session variable
    session_destroy();//this will destroy all session variable
?>