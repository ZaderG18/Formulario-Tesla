<?php
$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST,'sobrenome', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST,'telefone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST,'rua',FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_STRING);
$UF = filter_input(INPUT_POST,'UF',FILTER_SANITIZE_STRING);

    echo "Nome: $nome <br>";
    echo "Sobrenome: $sobrenome <br>";
    echo "Telefone: $telefone <br>";
    echo "Email: $email <br>";
    echo "Rua: $rua <br>";
    echo "Cidade: $cidade <br>";
    echo "UF: $UF <br>";

?>