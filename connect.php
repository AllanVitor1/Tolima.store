<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tolima";
   
	// Criação da conexão
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	// Verificação da conexão
	if (!$conn) { // Se "não" acontecer a conexão( o "!" nega a condição 
	  die("Falha de Conexão: " . mysqli_connect_error());
	}
	// echo "Conectado com Sucesso <br /><br />";
		
	// método responsável para fechar a conexão
	function fechar(){	
	  $conn->close();
	  echo "Conexão Encerrada";
	}  
?>