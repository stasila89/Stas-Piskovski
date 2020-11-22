<?php
$connection = mysqli_connect('localhost', 'homestead', 'secret');

if (!$connection){
    var_dump(mysqli_connect_error());
    die();
}

mysqli_set_charset($connection, "utf8");

require_once 'admin_form.php';
