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
			} else {
	el.style.borderColor = 'green';
}
}

alert_user(nome);

