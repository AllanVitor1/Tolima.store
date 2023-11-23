<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Excluir</title>
	</head>
	<body>
		<form method="post">
			Código:<input type="text" name="codigo" /><br /><br />
			<input type="submit" name="bt_excluir" value="Excluir" />
		</form>
		<?php
	/*A função include() do PHP tem como objetivo incluir (como o próprio nome diz) 
      um arquivo dentro do outro quando acessado. */	
			include('connect.php');
			
    /*A função isset() verifica se uma variável foi definida corretamente. Esta função retornará true (verdadeiro) 
	quando uma variável existir e false (falso) quando uma variável não existir */
			if(isset($_POST['bt_excluir'])){
				$codigo = $_POST['codigo'];		
				mysqli_query($conn, "DELETE from tb_veiculos
					where codigo = $codigo");		
				echo "<br />" . $codigo . " Excluido com sucesso";
			}
		?>
		<br /><br />
        <button onclick = "document.location='index.html'" > Voltar </button>	
	</body>
</html>