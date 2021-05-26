<?php 
session_start();
include ('conexao.php');

$idprod = mysqli_real_escape_string($conexao,trim($_POST['produto_id']));

$sql ="DELETE from produtos where produto_id ='$idprod'";


if($conexao->query($sql) === true ) {
    $_SESSION['status_delete'] = true;
}



$conexao -> close();
header('location: deletaprodutobdd.php');
exit;

