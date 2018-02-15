<?php
require '../backOffice/db.php';
$id = $_GET['id'];
// sql to delete a record
$sql = 'DELETE FROM article WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: ../backOffice/index.php");
}
