<?php
//defining constant

define("hostname", "localhost");
define("username", "root");
define("password", "");
define("database", "crud_operations");
//make a variable
$connection = mysqli_connect(hostname, username, password, database);
if (!$connection) {
    die("connection failed");


}
?>