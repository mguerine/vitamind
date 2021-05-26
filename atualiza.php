<?php include('conexao.php');
session_start();

$qtde = mysqli_real_escape_string($conexao,trim($_POST['qtd_estoque']));
$idprod = mysqli_real_escape_string($conexao,trim($_POST['produto_id']));


$sql = "UPDATE produtos SET  qtd_estoque='$qtde' where produto_id = '$idprod'";




if($conexao->query($sql) === true ) {
    $_SESSION['status_Update'] = true;
}else{
    $_SESSION['ERRO'] = true;
}


$conexao -> close();
header('location: controlaestoque.php');
exit;