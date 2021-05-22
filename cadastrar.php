<?php
session_start();
include("conexao.php");
$usuario = mysqli_real_escape_string($conexao,trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
$tel = mysqli_real_escape_string($conexao, trim($_POST['telefone_cliente']));
$dtn = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
$end = mysqli_real_escape_string($conexao,  trim($_POST['endereco']));
$est = mysqli_real_escape_string($conexao, trim($_POST['estado']));
$as =  mysqli_real_escape_string($conexao, trim($_POST['Apelido']));


$sql = "select count(*) as total from usuarios where email = '{$usuario}' ";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);


if ($row['total'] == 1){
    $_SESSION ['Usuário_existente'] = true;
    header('location: register.php');
    exit;

}


$sql = "insert into usuarios(email,senha,telefone_cliente,data_nascimento, endereco, estado, Apelido) values ('$usuario', md5('$senha'), '$tel', '$dtn', '$end',
'$est', '$as')";

if($conexao->query($sql) === true ) {
    $_SESSION['status_cadastro'] = true;
}

$conexao -> close();

header('location: register.php');
exit;

?>