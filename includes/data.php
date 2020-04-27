<?php

/*
   Connecting to the database
*/
$dbuser = 'stris';
$dbpass = 'password01!';
$host = 'astamps78515.ipagemysql.com';
$db = 'stris_contacts';
mysql_connect($host, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($db) or die(mysql_error());

/*
  Executing SQL query
*/
$queryResult = mysql_query('SELECT contactLast FROM Contacts') or die(mysql_error());
$source = array();

/*
  Building the source string
*/
while ($row = mysql_fetch_array($queryResult)) {
  array_push($source, $row['contactLast']);
}

/*
  Printing the source string
*/
echo json_encode($source);

?>
