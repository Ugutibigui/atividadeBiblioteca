<!DOCTYPE html>
<html lang="en">
<?php
include_once('../scripts/conn.php');

$query =  "SELECT * FROM livros;";
$result = mysqli_query($conn, $query);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="../styles/biblioteca.css">
</head>

<body>
    <section class="first-section">
        <header class="header-buttons">
            <div class="buttons-container">
                <div class="buttons-content">
                    <a href="../index.html">Início</a>
                    <a href="../index.html#form">Cadastro</a>
                    <a href="#">Biblioteca</a>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="content">
                <h1>Biblioteca</h1>
                <hr>
                <div class="local-books">
                    <?php
                    while ($row = $result->fetch_assoc()) {

                    ?>
                        <div class="card">
                            <div class="local-img">
                                <img src="../assets/card.png" alt="">
                            </div>
                            <div class="local-itens">
                                <h3> <?= $row["titulo"] ?></h3>
                                <h4><?= $row["subtitulo"] ?></h4>
                                <hr>

                                <div class="align-info">
                                    <p class="title-info">Autores:</p>
                                    <p class="content-info"><?= $row["NomeAutor1"]." ".$row["SobreNomeAutor1"] ?></p>,
                                    <p class="content-info"><?= $row["NomeAutor2"]." ".$row["SobreNomeAutor2"] ?></p>,
                                    <p class="content-info"><?= $row["NomeAutor3"]." ".$row["SobreNomeAutor3"] ?></p>
                                </div>

                                <div class="align-itens">
                                    <div class="align-info">
                                        <p class="title-info">Ano: </p>
                                        <p class="content-info"><?= $row["ano"] ?></p>
                                    </div>
                                    <div class="align-info">
                                        <p class="title-info">Editora: </p>
                                        <p class="content-info"><?= $row["editora"] ?></p>
                                    </div>
                                </div>
                                <div class="align-itens">
                                    <div class="align-info">
                                        <p class="title-info">Volume: </p>
                                        <p class="content-info"><?= $row["volume"] ?></p>
                                    </div>
                                    <div class="align-info">
                                        <p class="title-info">ISBN: </p>
                                        <p class="content-info"><?= $row["isbn"] ?></p>
                                    </div>
                                </div>
                                <div class="align-info">
                                    <p class="title-info">Preço: </p>
                                    <p class="content-info">R$<?= number_format($row["valor"], 2, ",", ".") ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <script>
        var variavel = "<?php echo $variavel; ?>";
        console.log(variavel)
    </script>
</body>

</html>