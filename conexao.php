<?php

Define('HOST', '127.0.0.1:3307');
Define('USUARIO', 'root');
Define('SENHA', '142536Sj');
Define('DB', 'vitamind');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar'); 