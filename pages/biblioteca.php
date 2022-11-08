<?php
include_once('../scripts/conn.php');
include_once('../scripts/reference.php');

$query = "SELECT * FROM livros;";
$result = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $query);
$id = 0;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/imask"></script>
    <link rel="stylesheet" href="../styles/biblioteca.css">
    <title>Biblioteca</title>
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
</head>

<body>
    <section id="home">
        <header>
            <div class="header-container">
                <div id="logotipo-container">
                    <img class="logotipo" src="../assets/logotipo.png" alt="">
                </div>
                <div class="options-container">
                    <a href="../index.html">Inicio</a>
                    <!-- <a href="../index.html#form">Adicionar</a> -->
                    <a href="#">Biblioteca</a>
                    <a href="#home">Entrar</a>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="content">
                <h1>Biblioteca</h1>
                <hr>
                    <!-- Botão Apagar tudo -->
                <!-- <div class="align-button">
                    <form action="../scripts/deleteAll.php" method="POST">
                        <button type="submit">Apagar tudo</button>
                    </form>
                </div> -->
                <div class="itens-container">
                    <div class="local-books">
                        <?php
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <div class="card-book ">
                                <div class="local-img">
                                    <img src="../assets/imagem-it.png" alt="">
                                </div>
                                <div class="local-itens">
                                    <div class="icons-card">
                                        <h3> <?= $row["titulo"] ?></h3>
                                        <div class="buttons-card" style="display: flex; justify-content: space-between">
                                            <div>
                                                <div class="modal">
                                                    <div class="content">
                                                        <div class="close-button-form-card">
                                                            <button id="close-button-form-card">
                                                                <svg width="30" height="30" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M200 0C89.4 0 0 89.4 0 200C0 310.6 89.4 400 200 400C310.6 400 400 310.6 400 200C400 89.4 310.6 0 200 0ZM300 271.8L271.8 300L200 228.2L128.2 300L100 271.8L171.8 200L100 128.2L128.2 100L200 171.8L271.8 100L300 128.2L228.2 200L300 271.8Z" fill="#CD4343" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <form class="form" action="../scripts/edit.php" method="POST">
                                                            <div class="top-form">
                                                                <div class="left-form">
                                                                    <div class="item">
                                                                        <p>Titulo</p>
                                                                        <input type="text" name="titulo" id="titulo" required>
                                                                    </div>
                                                                    <div class="item">
                                                                        <p>Autor (nome)</p>
                                                                        <input type="text" name="autorNomeUm" id="autorNomeUm" required>
                                                                    </div>
                                                                    <div class="item">
                                                                        <p>Autor (nome)</p>
                                                                        <input type="text" name="autorNomeDois" id="autorNomeDois" required>
                                                                    </div>
                                                                    <div class="item">
                                                                        <p>Autor (nome)</p>
                                                                        <input type="text" name="autorNomeTres" id="autorNomeTres" required>
                                                                    </div>
                                                                    <div class="item">
                                                                        <p>Editora</p>
                                                                        <input type="text" name="editora" id="editora" required>
                                                                    </div>
                                                                    <div class="item">
                                                                        <p>ISBN</p>
                                                                        <input name="isbn" id="isbn" required>
                                                                    </div>
                                                                </div>
                                                                <div class="rigth-form">
                                                                    <div class="item">
                                                                        <p>Subtitulo</p>
                                                                        <input type="text" name="subtitulo" id="subtitulo" required>
                                                                    </div>
                                                                    <div class="item">
                                                                        <p>Autor (sobrenome)</p>
                                                                        <input type="text" name="autorSobrenomeUm" id="autorSobrenomeUm" required>
                                                                    </div>
                                                                    <div class="item">
                                                                        <p>Autor (sobrenome)</p>
                                                                        <input type="text" name="autorSobrenomeDois" id="autorSobrenomeDois" required>
                                                                    </div>
                                                                    <div class="item">
                                                                        <p>Autor (sobrenome)</p>
                                                                        <input type="text" name="autorSobrenomeTres" id="autorSobrenomeTres" required>
                                                                    </div>
                                                                    <div class="align-item">
                                                                        <div class="itemd">
                                                                            <p>Categoria</p>
                                                                            <input name="categoria" id="categoria" required>
                                                                        </div>
                                                                        <div class="itemd">
                                                                            <p>Ano</p>
                                                                            <input name="ano" id="ano" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="align-item">
                                                                        <div class="itemd">
                                                                            <p>Vol.</p>
                                                                            <input type="text" name="volume" id="volume" required>
                                                                        </div>
                                                                        <div class="itemd">
                                                                            <p>Preço</p>
                                                                            <input name="preco" id="preco" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="submit" value="Editar Livro" class="buttonForm">
                                                            <input name="id" value="<?= $row["id"] ?>" id="id" class="fake-input">
                                                        </form>
                                                    </div>
                                                </div>
                                                <button class="modal-button" onclick="openModal(<?= $row['id']?>)">
                                                        <svg width="20" height="20" viewBox="0 0 480 480" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M380 400H100C94.6956 400 89.6085 402.107 85.8578 405.858C82.1071 409.609 80 414.696 80 420C80 425.304 82.1071 430.392 85.8578 434.142C89.6085 437.893 94.6956 440 100 440H380C385.304 440 390.391 437.893 394.142 434.142C397.893 430.392 400 425.304 400 420C400 414.696 397.893 409.609 394.142 405.858C390.391 402.107 385.304 400 380 400ZM100 360H101.8L185.2 352.4C194.336 351.49 202.881 347.465 209.4 341L389.4 161C396.386 153.619 400.162 143.77 399.9 133.611C399.637 123.451 395.358 113.81 388 106.8L333.2 52.0001C326.048 45.282 316.676 41.4273 306.867 41.1691C297.057 40.911 287.496 44.2675 280 50.6001L100 230.6C93.5353 237.119 89.51 245.664 88.5999 254.8L80 338.2C79.7305 341.129 80.1106 344.082 81.1132 346.848C82.1157 349.613 83.716 352.124 85.8 354.2C87.6688 356.054 89.8851 357.52 92.3218 358.516C94.7586 359.511 97.3678 360.015 100 360ZM305.4 80.0001L360 134.6L320 173.6L266.4 120L305.4 80.0001Z" fill="#6F6F71" />
                                                        </svg>
                                                </button>
                                            </div>
                                            <div class="delete-button-card">
                                                <form action="../scripts/delete.php" method="POST">
                                                    <button type="submit">
                                                        <svg width="20" height="20" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M200 0C89.4 0 0 89.4 0 200C0 310.6 89.4 400 200 400C310.6 400 400 310.6 400 200C400 89.4 310.6 0 200 0ZM300 271.8L271.8 300L200 228.2L128.2 300L100 271.8L171.8 200L100 128.2L128.2 100L200 171.8L271.8 100L300 128.2L228.2 200L300 271.8Z" fill="#CD4343" />
                                                        </svg>
                                                    </button>
                                                    <input name="id" value="<?= $row["id"] ?>" class="fake-input">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <h4><?= $row["subtitulo"] ?></h4>
                                    <hr>

                                    <div class="align-info" style="margin-bottom: 20px;">
                                        <p><?= $row["NomeAutor1"] . " " . $row["SobreNomeAutor1"] . ", " . $row["NomeAutor2"] . " " . $row["SobreNomeAutor2"] . ", " . $row["NomeAutor3"] . " " . $row["SobreNomeAutor3"] ?></p>
                                    </div>
                                    <div class="align-info">
                                        <p class="">ISBN: </p>
                                        <p class="content-info"><?= $row["isbn"] ?></p>
                                    </div>
                                    <div class="align-info">
                                        <p class="">Editora: </p>
                                        <p class="content-info"><?= $row["editora"] ?></p>
                                    </div>
                                    <div class="align-info">
                                        <p class="">Ano: </p>
                                        <p class="content-info"><?= $row["ano"] ?></p>
                                        <p class="" style="text-indent: 25px">Volume: </p>
                                        <p class="content-info"><?= $row["volume"] ?></p>
                                    </div>
                                    <div class="align-info">
                                        <p class="">Categoria: </p>
                                        <p class="content-info"><?= $row["categoria"] ?></p>
                                    </div>
                                    <div class="align-info">
                                        <p class="">Preço: </p>
                                        <p class="content-info">R$<?= number_format($row["valor"], 2, ",", ".") ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="settings">
                       
                        <a href="../index.html#form"><button class="button-settings">Adicionar História</button></a>
                        <a href="../scripts/pdfLivrosCadastrados.php" target="_blank"><button class="button-settings">Gerar relatório em PDF</button></a>
                        <!-- <form action="" method="POST">
                            <input type="submit" value="Gerar PDF biblioteca" class="button-settings">
                        </form> -->
                        <a href="../scripts/deleteAll.php"><button class="button-settings">Excluir Tudo</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const books = [
            <?php 
                 while ($row = $result2->fetch_assoc()) {
                    echo json_encode($row).",";
                 }    
            ?> 
        ]
        console.log(books);

    </script>
    <script src="../scripts/maskInputs.js"></script>
    <script src="../scripts/openmodal.js"></script>
</body>

</html>