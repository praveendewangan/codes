<?php
session_start();
$_SESSION['secure'] = rand(1000,9999);
echo $_SESSION['secure'];
?>
<img src="example.php"/>