<?php
// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "database_inkmask");

if($conn->connect_error){
    die("Conexão falhou: ". $conn->connect_error);
}

// Obtenha o ID da HQ da requisição
$hq_id = $_GET['hq_id'];

// Consulte o banco de dados para obter a URL do PDF
$sql = "SELECT pdf_url FROM hq_table WHERE id = $hq_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $pdf_url = $row['pdf_url'];

    // Inicie o download do PDF
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="arquivo.pdf"');
    readfile($pdf_url);
} else {
    echo "HQ não encontrada.";
}

$conn->close();
?>
