<?php
$host1 = 'localhost';
$username1 = 'root';
$pass1 = '';
$db = 'buylap';

$db = new mysqli($host1, $username1, $pass1, $db);

if ($db->connect_error) {
     die("Connection Error" . $db->connect_error);
}
