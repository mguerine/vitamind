<?php
session_start();
include("conexao.php");

$tel = mysqli_real_escape_string($conexao, trim($_POST['telefone_cliente']));
$end = mysqli_real_escape_string($conexao,  trim($_POST['endereco']));
$est = mysqli_real_escape_string($conexao, trim($_POST['estado']));
$as =  mysqli_real_escape_string($conexao, trim($_POST['Apelido']));
$user = $_SESSION['usuario'];


$new = "UPDATE usuarios SET Apelido = '{$as}', telefone_cliente = '{$tel}',  endereco = '{$end}', estado = '{$est}'  WHERE email = '$user'";
mysqli_query($conexao, $new);




if ($conexao->query($new) === true){
    $_SESSION['status_edicao'] = true;
    $_SESSION['Apelido'] = $as;
    $_SESSION['telefone_cliente'] = $tel;
    $_SESSION['endereco'] = $end;
    $_SESSION['estado'] = $est;
}


$conexao -> close();

header('location: mostradados.php');
exit;