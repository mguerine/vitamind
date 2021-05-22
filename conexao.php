<?php

Define('HOST', 'sql203.epizy.com');
Define('USUARIO', 'epiz_28685682');
Define('SENHA', 'teste123');
Define('DB', 'epiz_28685682_db_vitamind');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB);
if (!$conexao) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>