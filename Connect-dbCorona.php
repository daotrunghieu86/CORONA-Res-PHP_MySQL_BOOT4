<?php

$server = 'localhost';
$user = 'hieu';
$password = 'hieu86';
$db = 'corona';

$connect = mysqli_connect($server, $user, $password, $db);

if ($connect) {
  // echo '<script> alert("Connect successfully!"); </script>';
  // echo "connect success";
}