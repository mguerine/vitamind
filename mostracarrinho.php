<?php

$total = 0;

if(isset($_SESSION['carrinho'])){
foreach($_SESSION['carrinho'] as $cod_prod => $qtd){
    $coleta = "SELECT * FROM produtos where produto_id = $cod_prod";
    $result = mysqli_query($conexao, $coleta);
    $exibe = mysqli_fetch_assoc($result);
    echo "<article class='col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item border '>";
    echo		"<figure>";
    echo			"<img src= '" . $exibe['capa_suplemento'] . "' alt='Image' class='img-fluid tm-gallery-img'/>";
    echo		"<figcaption>";
    echo				"<h4 class='tm-gallery-title'>" . substr($exibe['nome'], 0, 20) . "</h4>";
    echo				"<p class='tm-gallery-description'>Quantia:" . $qtd . "</p>";
    echo				"<p class='tm-gallery-price'>R$" . number_format(($exibe['preco']),2,',','.') . "</p>";      
    echo "<a href='deletaprod.php?cd=".$exibe['produto_id']."'>";	
    echo "<button class='buttondelete' >DELETAR</button>";
    echo "</a>";
    echo			"</figcaption>";
    echo		"</figure>";
    echo   "</article>";
    $total += $exibe['preco'] * $qtd;
 
    
}
}





