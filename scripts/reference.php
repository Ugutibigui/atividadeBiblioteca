<?php
    include_once('conn.php');

    $query = "SELECT * FROM livros;";
    $result = mysqli_query($conn, $query);
    
    // $row = $result->fetch_assoc();
    // $row = mysqli_fetch_assoc($result);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    
    // print_r($rows[]);
    // echo $rows[0]['NomeAutor1'];


    function formatName($authorName) {
        $authorNameSplited = explode(' ', $authorName);
        $capitalLetters = '';

        for($i = 0; $i <= (sizeof($authorNameSplited)-1); $i++) {
            $capitalLetters .= $i == sizeof($authorNameSplited)-1 ? strtoupper($authorNameSplited[$i][0]).'.' : strtoupper($authorNameSplited[$i][0]).'. ';
            
        }
        return $capitalLetters;
    }
    @formatName($rows[0]['NomeAutor1']);

    function formatLastName($authorLastName) {
        $authorLastNameSplited = explode(' ', $authorLastName);
        $capitalLetters = '';

        for($i = 0; $i <= (sizeof($authorLastNameSplited)-1); $i++) {
            $capitalLetters .= $i == sizeof($authorLastNameSplited)-1 ? strtoupper($authorLastNameSplited[$i][0]).'.' : strtoupper($authorLastNameSplited[$i][0]).'. ';
            
        }
        return $capitalLetters;
    }
    @formatLastName($rows[0]['SobreNomeAutor1']);


    



?>
<!-- <div class="align-info">
<p class="">Referência: </p>
<p class="content-info"><?= strtoupper($row["SobreNomeAutor1"]).", ".strtoupper($row["NomeAutor1"]) ?></p>
</div> -->