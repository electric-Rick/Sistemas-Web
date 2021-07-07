<html>
<head>
<meta charset='UTF-8'>
<title> Wallet - Person</title>
<style>
header{
		color: whitesmoke;	
		font-size: 1.8em;
		margin: -1.1em 0 0 0;
		background-image: linear-gradient(45deg, #366e45,#32593c,#437851);
		
		}
		
label {
margin-left: 1em;
margin-right: 2em;

}
p{
margin-left: 2em;
}
</style>


</head>


<body>
	<header>
		<h2>O formulário_</h2>
	</header>
<?php
#Inserir posteriomente o código comentado abaixo
#include_once("conn.php");
#Capta os valores dos inputs
$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$user_aux = [ $nome, $email, $telefone, $endereco ];

#Inserir mais tarde o código abaixo
#if($user_aux[0] == is_string() && $user_aux[0]))
#$result_users = "INSERT INTO clientes_ativos (nome, endereco, telefone) VALUES ('null','$nome', '$endereco','$telefone')";
#$result_user = mysqli_query($conn, $result_users);
#if(mysqli_insert_id($conn)) {
#	header ( 'Location: process.php');
#} else {
#	echo "Não foi possível inserir no banco de dados.";
	 

#}
?>

<div>

<?php
#Caso o value dos inputs sejam menores que 2, retorne para o índice.
if(strlen($nome) < 2 && strlen($endereco) < 2 && strlen($email) < 2) header ( "Location: index.php");
$boas_vindas = "<p><em><h3>Olá $nome!</h3></em> Seja bem-vindo a sua página. Abaixo estão os seus dados digitados na página anterior:</p><br>";
$display_data_user = ["<label><img src='./svgs/file-person.svg' max-width='3.5em' max-height='4em'>Nome:</label> $user_aux[0]<br>", "<label><img src='./svgs/house.svg' max-width='3.5em' max-height='4em'>End.:</label> $user_aux[3]<br>","<label><img src='./svgs/phone.svg' max-width='3.5em' max-height='4em'>Tel.:</label> $user_aux[2]<br>","<label><img src='./svgs/check-circle.svg' max-width='3.5em' max-height='4em'>e-mail:</label> $user_aux[1]<br>"];
#Caso o value recebido dos inputs sejam maiores que 3:
if(strlen($nome)>3 && strlen($endereco)>3 && strlen($email)>3){ 
	echo $boas_vindas;
	
	for ($i = 0; $i < 5; $i++){
	echo "$display_data_user[$i]";
	}
	#em caso de erro, display erro
	} else { echo "<p style='background-color: yellow; font-style: bold; font-size: 2em; color: red; max-width: 10em;'> Não foi possível realizar a sua operação.</p><br>";
	}
?>
<hr>
<button id='voltar' onclick="history.back()" style="margin-top: 2em;">Voltar</button>
<button id='finalizar' onclick="close_window();">Finalizar</button>
<script>
function close_window() {
      close();
  
}
</script>
</div>



</body>
</html>
