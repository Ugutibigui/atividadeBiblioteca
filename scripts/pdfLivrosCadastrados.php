<?php
include_once('../scripts/conn.php');
include_once('./fpdf184/fpdf.php');

$query = "SELECT * FROM livros;";
$result = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $query);

$pdf = new FPDF();
$pdf->AddPage();

$file = "relatorio-de-livros-cadastrados.pdf";
$pdf_type = 'I';


$pdf->SetFont('Arial', 'BU', 16);
$pdf->Cell(190, 10, utf8_decode('Relatório de Livros Cadastrados'), 0, 0, 'C');
$pdf->Ln(15);
// Tamano sobrando 12
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(21.11111111111111, 7, utf8_decode('Título'), 1, 0, 'C');
$pdf->Cell(21.11111111111111, 7, utf8_decode('Subtítulo'), 1, 0, 'C');
$pdf->Cell(21.11111111111111, 7, 'Categoria', 1, 0, 'C');
$pdf->Cell(20, 7, 'Editora', 1, 0, 'C');
$pdf->Cell(18, 7, 'Volume', 1, 0, 'C');
$pdf->Cell(12, 7, 'Ano', 1, 0, 'C');
$pdf->Cell(14, 7, utf8_decode('Preço'), 1, 0, 'C');
$pdf->Cell(23, 7, 'ISBN', 1, 0, 'C');
$pdf->Cell(32, 7, 'Autores', 1, 0, 'C');
$pdf->Ln();


while($row = $result->fetch_assoc()) {
    $pdf->SetFont('Arial', '', 11);
    $pdf->Cell(21.11111111111111, 15, utf8_decode($row['titulo']), 1, 0, 'C');
    $pdf->Cell(21.11111111111111, 15, utf8_decode($row['subtitulo']), 1, 0, 'C');
    $pdf->Cell(21.11111111111111, 15, utf8_decode($row['categoria']), 1, 0, 'C');
    $pdf->Cell(20, 15, utf8_decode($row['editora']), 1, 0, 'C');
    $pdf->Cell(18, 15, $row['volume'], 1, 0, 'C');
    $pdf->Cell(12, 15, $row['ano'], 1, 0, 'C');
    $pdf->Cell(14, 15, $row['valor'], 1, 0, 'C');
    $pdf->SetFont('Arial', '', 8);
    $pdf->Cell(23, 15, $row['isbn'], 1, 0, 'C');
    $pdf->SetFont('Arial', '', 9);
    $pdf->Cell(32, 5, utf8_decode($row["NomeAutor1"] . " " . $row["SobreNomeAutor1"]), 'L, R', 2, 'C');
    $pdf->Cell(32, 5, utf8_decode($row["NomeAutor2"] . " " . $row["SobreNomeAutor2"]), 'L, R', 2, 'C');
    $pdf->Cell(32, 5, utf8_decode($row["NomeAutor3"] . " " . $row["SobreNomeAutor3"]), 'L, R, B', 1, 'C');
    // while($row2 = $result2->fetch_assoc()) {
        
    // }
}




// foreach($result->fetch_assoc() as $rows) {
//     $pdf->SetFont($font, $style, 16);
//     $pdf->Cell(190, 10, $rows['']);
// }

$pdf->Output($file, $pdf_type); 
?>l