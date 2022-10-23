<?php
  include_once('conn.php');

  $id = $_POST['id'];
  $query = "DELETE FROM livros WHERE id = $id";
  echo $query;

  mysqli_query($conn, $query);

  if ($result = mysqli_query($conn, "SELECT * FROM livros")) {
    echo "<br>Returned rows are: " . mysqli_num_rows($result);
    // Free result set
    mysqli_free_result($result);
  }
  //mysqli_close($conn);
  header('Location: ../pages/biblioteca.php');
?>