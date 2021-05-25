<?php
Define('HOST', 'sql10.freesqldatabase.com:3306');
Define('USUARIO', 'sql10414837');
Define('SENHA', 'ra2AZ1xXbe');
Define('DB', 'sql10414837');
//Define('HOST', '127.0.0.1:3306');
//Define('USUARIO', 'root');
//Define('SENHA', '');
//Define('DB', 'vitamind');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar'); 