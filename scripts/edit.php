<?php
    include_once('conn.php');

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $subtitulo = $_POST['subtitulo'];
    $autorNomeUm = $_POST['autorNomeUm'];
    $autorSobrenomeUm = $_POST['autorSobrenomeUm'];
    $autorNomeDois = $_POST['autorNomeDois'];
    $autorSobrenomeDois = $_POST['autorSobrenomeDois'];
    $autorNomeTres = $_POST['autorNomeTres'];
    $autorSobrenomeTres = $_POST['autorSobrenomeTres'];
    $categoria = $_POST['categoria'];
    $ano = $_POST['ano'];
    $editora = $_POST['editora'];
    $volume = $_POST['volume'];
    $isbn = $_POST['isbn'];
    $preco = $_POST['preco'];
    $etal = 0;

    if($autorNomeUm != "" && $autorNomeDois != "" && $autorNomeTres != ""){
        $etal = 1;
    }

    $query = "UPDATE `livros` SET `capa`='capa',`titulo`='$titulo',`subtitulo`='$subtitulo',`ano`=$ano,`editora`='$editora',`volume`=$volume,`isbn`=$isbn,`valor`=$preco,`etal`=$etal,`NomeAutor1`='$autorNomeUm',`SobreNomeAutor1`='$autorSobrenomeUm',`NomeAutor2`='$autorNomeDois',`SobreNomeAutor2`='$autorSobrenomeDois',`NomeAutor3`='$autorNomeTres',`SobreNomeAutor3`='$autorSobrenomeTres',`categoria`='$categoria' WHERE id = $id";
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