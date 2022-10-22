<?php
  include_once('conn.php');

  $titulo = $_POST['titulo'];
  $subtitulo = $_POST['subtitulo'];
  $autorNomeUm = $_POST['autorNomeUm'];
  $autorSobrenomeUm = $_POST['autorSobrenomeUm'];
  $autorNomeDois = $_POST['autorNomeDois'];
  $autorSobrenomeDois = $_POST['autorSobrenomeDois'];
  $autorNomeTres = $_POST['autorNomeTres'];
  $autorSobrenomeTres = $_POST['autorSobrenomeTres'];
  $edicao = $_POST['edicao'];
  $ano = $_POST['ano'];
  $editora = $_POST['editora'];
  $volume = $_POST['volume'];
  $isbn = $_POST['isbn'];
  $preco = $_POST['preco'];

  $etal = 0;

  if($autorNomeUm != "" && $autorNomeDois != "" && $autorNomeTres != ""){
    $etal = 1;
  }
  
  $query = "INSERT INTO `livros`(`capa`, `titulo`, `subtitulo`, `ano`, `editora`, `volume`, `isbn`, `valor`, `etal`, `NomeAutor1`, `SobreNomeAutor1`, `NomeAutor2`, `SobreNomeAutor2`, `NomeAutor3`, `SobreNomeAutor3`, `categoria`) VALUES ('capa', '$titulo', '$subtitulo', $ano, '$editora', $volume, $isbn, $preco, $etal, '$autorNomeUm', '$autorSobrenomeUm', '$autorNomeDois', '$autorSobrenomeDois', '$autorNomeTres', '$autorSobrenomeTres', 'categoria')";
  echo $query;

  mysqli_query($conn, $query);

  if ($result = mysqli_query($conn, "SELECT * FROM livros")) {
    echo "<br>Returned rows are: " . mysqli_num_rows($result);
    // Free result set
    mysqli_free_result($result);
  }
  //mysqli_close($conn);
  header('Location: http://localhost/pages/biblioteca.php');
?>