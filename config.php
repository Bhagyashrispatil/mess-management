<?php

//$host = "localhost"; /* Host name */
$db_user = "root"; /* User */
$db_pass = ""; /* Password */
$db_name = "mess_management_system"; /* Database name */

//$con= mysqli_connect($host, $user, $password,$dbname);
$db=new PDO('mysql:host=localhost;dbname=' .$db_name. ';charset-utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>