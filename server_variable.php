<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $script_name = $_SERVER['SCRIPT_NAME'];
    echo $script_name;
    echo "<br>";
    $host_name = $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $host_name;
    echo "<br>";
    $self = $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $self;
    echo "<br>";
    $uri = $_SERVER['REQUEST_URI'];
    echo "<br>";
    echo $uri;
    $ip = $_SERVER['SERVER_ADDR'];
    echo "<br>";
    echo $ip;
    $server_name = $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $server_name;
    $server_request = $_SERVER['REQUEST_METHOD'];
    echo "<br>";
    echo $server_request;
    ?>
</body>
</html>