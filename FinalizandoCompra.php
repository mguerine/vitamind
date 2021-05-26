<?php

session_start();
include('conexao.php');

$data = date('Y-m-d');
$ticket = uniqid();
$coduser = $_SESSION['id_usuario'];


if (isset($_SESSION['carrinho'])) {
    foreach ($_SESSION['carrinho'] as $cod_prod => $qtd) {
        $coleta = "SELECT * FROM produtos where produto_id = $cod_prod";
        $result = mysqli_query($conexao, $coleta);
        $exibe = mysqli_fetch_assoc($result);
        $codprod = $exibe['produto_id'];
        $valorprod = $exibe['preco'];
        $qtd_estoque = $exibe['qtd_estoque'];


        $inserecompra = "insert into vendas(ticket_num, id_usuario, produto_id,qt_prod, valor_prod, dt_venda) values
('$ticket', '$coduser', '$codprod', '$qtd', '$valorprod', '$data' )";
        mysqli_query($conexao, $inserecompra);

        $newqtd = $qtd_estoque - $qtd;
        $atualizaestoque = "UPDATE produtos SET qtd_estoque = '$newqtd' where produto_id = '$codprod'";
        mysqli_query($conexao, $atualizaestoque);

        $query = "INSERT INTO ocorrencias(data_da_ocorrencia, descricao, referencia) values('$data', 'Produto Vendido! Saida de estoque: $qtd  Estoque Antigo: $qtd_estoque Estoque Atual: $newqtd', 'vendas');";
        mysqli_query($conexao, $query);

        if ($newqtd == 0) {
            $data = date('Y-m-d');
            $query = "INSERT INTO ocorrencias(data_da_ocorrencia, descricao, referencia) values('$data', 'Produto $codprod esgotado!', 'Produto finalizado');";
            mysqli_query($conexao, $query);
        }
    }
}
unset($_SESSION['carrinho']);
header('location: mostracompras.php');


$conexao->close();


exit;
