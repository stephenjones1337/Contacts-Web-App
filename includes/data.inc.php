<?php
require 'dbh.inc.php';
// SQL Query
$sql = 'SELECT contactLast FROM Contacts';
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql))
{
  header("Location: ../signup.php?error=sqlerror");
  exit();
}
else
{
  $source  = array();

  //excute and store result into $stmt
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_store_result($stmt);

  while($row = mysqli_fetch_assoc($result)) {
    array_push($source, $row['contactLast']);
  }

  // Print source string
  echo json_encode($source);
}
 ?>
