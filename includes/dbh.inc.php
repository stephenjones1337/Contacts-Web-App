<?php
$server_name = "astamps78515.ipagemysql.com";
$dBUsername = "stris";
$dBPassword = "password01!";
$dBName = "stris_contacts";

$conn = mysqli_connect($server_name, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
