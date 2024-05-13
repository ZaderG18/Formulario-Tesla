<?php
$host = "localhost";
$servername = "cidade";
$usarname = "root";
$password = "";

$conn = new mysqli($host, $usarname, $password);

if($conn->connect_error){
    die("Erro ao conectar ao banco de dados: ". $conn-> connect_error);
} else{
    echo "Banco de dados criado com sucesso!<br>";
}

$dbName = "formularios";
$sql = "CREATE DATABASE IF NOT EXISTS $dbName";

if( $conn-> query($sql) === TRUE){
    echo "Banco de dados '$dbName' criado com sucesso!<br>";
} else {
    echo "Erro ao criar banco de dados: " . $conn->error;
}

$conn = new mysqli($host, $usarname, $password, $dbName);

$tableName = "cliente";
$sqlTable = "CREATE TABLE IF NOT EXISTS $tableName(
    id  INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR (255) NOT NULL,
    sobrenome VARCHAR (40) NOT NULL,
    telefone VARCHAR (40) NOT NULL,
    email VARCHAR (40) NOT NULL,
    rua VARCHAR (40) NOT NULL,
    cidade VARCHAR (40) NOT NULL,
    UF VARCHAR (40) NOT NULL
)";
if ($conn->query($sqlTable) === TRUE){
    echo "Tabela '$tableName' criada com sucesso!<br>";
} else{
    echo "Erro ao criar a tabela".$conn->error;
}

$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST,'sobrenome', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST,'telefone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST,'rua',FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_STRING);
$UF = filter_input(INPUT_POST,'UF',FILTER_SANITIZE_STRING);

$sqlInsert= "INSERT INTO cliente (nome, sobrenome, telefone, email, rua, cidade, UF) VALUES ('$nome', '$sobrenome', '$telefone', '$email', '$rua', '$cidade', '$UF')";

if($conn->query($sqlInsert)=== TRUE){
    echo "os dados foram inseridos com sucesso!<br>";
} else{
    echo "não foi possivel inserir os dados na tabela!".$conn->error;
}

$sqlSelect = "SELECT * FROM cliente";
$result = $conn-> query($sqlSelect);
$count = 0;
if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        $count++;
        echo $count. "Nome" .$row["nome"]. " - Sobrenome:" .$row["sobrenome"]. " - Telefone:". " - Email:" .$row["email"]. " - Rua:". $row["rua"]. " - Cidade:". $row["cidade"]. " - UF:". $row["UF"]. "<br>";
    }
}else{ 
    echo "Nenhum resultado encontrado:";
}


