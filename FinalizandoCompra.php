<?php

session_start();
include ('conexao.php');

$data = date('Y-m-d');
$ticket = uniqid();
$coduser = $_SESSION['id_usuario'];


if(isset($_SESSION['carrinho'])){
foreach($_SESSION['carrinho'] as $cod_prod => $qtd){
    $coleta = "SELECT * FROM produtos where produto_id = $cod_prod";
    $result = mysqli_query($conexao, $coleta);
    $exibe = mysqli_fetch_assoc($result);
    $codprod = $exibe['produto_id'];
    $valorprod = $exibe['preco'];


$inserecompra = "insert into vendas(ticket_num, id_usuario, produto_id,qt_prod, valor_prod, dt_venda) values
('$ticket', '$coduser', '$codprod', '$qtd', '$valorprod', '$data' )";
mysqli_query($conexao, $inserecompra);

echo "Compra finalizada! Seu ticket da compra do produto: ".$codprod ." é ". $ticket."!<hr>";


 }
}
unset($_SESSION['carrinho']);
header('location: mostracompras.php');


$conexao -> close();


exit;