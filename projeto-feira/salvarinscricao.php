<?php
	echo "GET:" . var_dump($_GET) . "<br>";
	echo "POST:" . var_dump($_POST) . "<br>";
	echo "posicao nome" . $_POST['nome'];
	/*configuracao de enderecamento do banco de dados*/
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	
	$conexao =mysql_connect($servidor, $usuario, $senha);
	echo "<br>";
	var_dump($conexao); 
	echo "<br>";
	
	$banco = mysql_select_db($nome_banco, $conexao) or die( "nao foi possivel conectar ao banco MYSQL");
	var_dump ($banco);
	echo "<br>";
	echo $conexao;
	echo "<br>";
	/*verifica se a coneao realmente foi criada*/
	/*se (nao conexao) entao, ou seja, conexao e falsa*/
	if (!$conexao) {
        echo "nao foi possivel conectar ao banco MYSQL";
        exit;
	}/*senao*/
	else {
		echo "Conectou!";
	}	
?>