<?php
include('conexao.php');
session_start();

$nome = mysqli_real_escape_string($conexao,trim($_POST['nome']));
$marca = mysqli_real_escape_string($conexao,trim($_POST['marca']));
$peso = mysqli_real_escape_string($conexao,trim($_POST['peso']));
$preco = mysqli_real_escape_string($conexao,trim($_POST['preco']));
$capa = mysqli_real_escape_string($conexao,trim($_POST['capa_suplemento']));
$qtde = mysqli_real_escape_string($conexao,trim($_POST['qtd_estoque']));


$sql= "insert into produtos (nome,marca,peso,preco,capa_suplemento, qtd_estoque) values('$nome','$marca','$peso','$preco','$capa','$qtde');";




if($conexao->query($sql) === true ) {
    $_SESSION['status_insert'] = true;
}


$conexao -> close();
header('location: insereproduto.php');
exit;




