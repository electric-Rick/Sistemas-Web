<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>O formulário_</title>
		<meta charset='UTF-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<style>
		header{
		color: whitesmoke;	
		font-size: 1.8em;
		margin: 0 0 0 0;
		background-image: linear-gradient(45deg, #366e45,#32593c,#437851);
		
		}
		
		input{
		margin: 1.5em 0em 0em 1em;
		width: 25em;
		box-shadow: 5px 5px silver;
		}
		input#btns_01, #btns_00 {
		max-width: 7em;
		}			
		</style>
	</head>
	
	<body>

		<noscript>
		<h1>Aviso!</h1>
		<br>
		<p>É preciso mantar o JavaScript ligado para acessar esta página!</p>
		</noscript>
		<header class='_header_'>
	<h2>O formulário</h2>
		</header>
			<form class='_form_general' name='sf_01' method='post' action='process.php'>
				<label>Digite os dado abaixo para consulta:</label><br>
				<hr>
				<label>
				<img src='./svgs/file-person.svg' max-width='3.5em' max-height='4em'></label><input type='text'  placeholder='Digite seu nome' id='nome' name='nome' onchange='dados_salvos(this)' oninvalid="this.setCustomValidity('Você precisa digitar um nome válido para este campo.')" oninput="setCustomValidity('')" required>
				<br>
				<label>
				<img src='./svgs/house.svg' max-width='3.5em' max-height='4em'></label><input type='text'  placeholder='Digite o seu endereço' id='endereco'  name='endereco' onchange='dados_salvos(this)' required oninvalid="this.setCustomValidity('É necessário preencher o endereço para continuar.')" oninput="setCustomValidity('')">
				<br>
				<label>
				<img src='./svgs/phone.svg' max-width='3.5em' max-height='4em'>
				</label>
				<input type='text' placeholder='Digite os eu telefone' id='telefone' name='telefone' onchange='dados_salvos(this)' oninvalid="this.setCustomValidity('Preencha um número correto.')" oninput="setCustomValidity('')">
				<br>
				<label>
				<img src='./svgs/check-circle.svg' max-width='3.5em' max-height='4em'>
				</label>
				<input type='email'  placeholder='Digite o seu email' id='email' name='email' onchange='dados_salvos(this)' oninvalid="this.setCustomValidity('Você precisa digitar um e-mail válido, por favor.')" oninput="setCustomValidity('')"><br>
				<input type='submit' id='btns_00' value='Verificar'>
				<input type='reset' id='btns_01' value='Limpar' style=''>
				<br>			
			</form>
			
			<section class='results' style='display:none'>
				<p></p>
			</section>
<script>
document.getElementById('nome').value, document.getElementById('endereco').value, document.getElementById('email').value, document.getElementById('telefone').value = dados_salvos('nome'), dados_salvos('endereco'), dados_salvos('email'), dados_salvos('telefone');

console.log('Valores salvos com sucesso');
function armazena_valor(e){
	var ident_ = e.id; 
	var dados = e.value;
	localStorage.setItem(ident_, dados);

};

function dados_salvos(v){
	if(!localStorage.getItem(v)) {
		return ""
		}
		return localStorage.getItem(v);
		
};
var nome = document.getElementById("nome") 
function alert_user(el){
	if(el.value.lenght  < 3){
		el.style.borderColor = 'red';
			} else {}
}

alert_user(nome);




</script>	
	</body>


</html>
