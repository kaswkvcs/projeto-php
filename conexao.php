<?php
$conn = new mysqli("localhost", "root", "", "database_inkmask");

if($conn->connect_error){
    die("Conexão falhou: ". $conn->connect_error);
}

