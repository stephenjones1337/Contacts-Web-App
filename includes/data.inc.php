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
  //printf("pepeHands.json");

  $source  = array();
  //excute and store result into $stmt
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  while($row = mysqli_fetch_assoc($result)) {
    //printf("Entered while loop");
    //$thing = "'" + $row['contactLast'] + "'";
    array_push($source, $row['contactLast']);
  }

  // Print source string
  echo json_encode($source);

}

mysqli_stmt_close($stmt);
mysqli_close($conn);
 ?>
