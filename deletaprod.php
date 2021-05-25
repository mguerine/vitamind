<?php
session_start();

$codprod = $_GET['cd'];

    unset($_SESSION['carrinho'][$codprod]);

header('Location: carrinho.php');