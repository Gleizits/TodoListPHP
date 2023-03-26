<?php

include('db.php');

if (isset($_POST['save_todo'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $query = "INSERT INTO todo(title, description) VALUES ('$title', '$description')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Todo Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
