<?php
require "core.php";
require "database.php";
if(loggedin()){
    $first_name = 'firstname';
    $last_name = 'lastname';
    $name = getuserfield($first_name);
    $surname = getuserfield($last_name);
    echo "You are logged in, $name[$first_name] $surname[$last_name] <a href='logout.php'>Log out</a><br/>";
}else{
    include "loginform.php";
}
?>