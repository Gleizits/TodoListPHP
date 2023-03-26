<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'todo_list'
) or die(mysqli_error($mysqli));

?>
