<?php
session_start();
include('conexao.php');
if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header("location: login.php");
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);



$query = "select email, senha,telefone_cliente, data_nascimento, endereco, estado, Apelido,id_usuario from usuarios where email = '{$usuario}' and senha= md5('{$senha}');";
$result = mysqli_query($conexao, $query);
$data = mysqli_fetch_assoc($result);
$row = mysqli_num_rows($result);

$tel = $data['telefone_cliente'] ;
$Dtn = $data['data_nascimento'] ;
$end = $data['endereco'] ;
$est = $data['estado'] ;
$As = $data['Apelido'] ;
$id_user = $data['id_usuario'];

if ($row == 1) {
    $_SESSION['usuario'] = $usuario; 
    $_SESSION['Apelido'] = $As;
    $_SESSION['telefone_cliente'] = $tel;
    $_SESSION['data_nascimento'] = $Dtn;
    $_SESSION['endereco'] = $end;
    $_SESSION['estado'] = $est;
    $_SESSION['id_usuario'] = $id_user;
    header('location: index.php');
    exit();
   
} else {
    $_SESSION['nao_autenticado'] = true;
    header('location: login.php');
    exit();
}
