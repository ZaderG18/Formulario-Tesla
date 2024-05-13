function verificaNome(){
	var nome = document.getElementById('nome');
	//alert(nome.value);
	if(nome.value == ''){
	nome.style.boxShadow ='3px 3px 3px red';
return false
	} else{
		nome.style.boxShadow='0px 0px 0px black';
	}
}
function verificaSobrenome(){
	let sobrenome = document.getElementById('sobrenome')
	if(sobrenome.value == ''){
	sobrenome.style.boxShadow = '3px 3px 3px red';
	} else{
		sobrenome.style.boxShadow ='0px 0px 0px black';
	}
} 
function verificaTelefone(){
	let telefone = document.getElementById('telefone');
	if(telefone.value == ''){
		telefone.style.boxShadow='3px 3px 3px red';
	} else{
		telefone.style.boxShadow ='0px 0px 0px black';
	}
}
function verificarEmail(){
	let email = document.getElementById('email');
	if(email.value == ''){
email.style.boxShadow = '3px 3px 3px red';
	} else{
		email.style.boxShadow ='0px 0px 0px black';
	}
}
function verificarRua(){
	let rua = document.getElementById('rua');
	if(rua.value == ''){
		rua.style.boxShadow ='3px 3px 3px red';
	} else{
		rua.style.boxShadow ='0px 0px 0px black';
	}
}
function verificarCidade(){
	let cidade = document.getElementById('cidade');
	if(cidade.value == ''){
		cidade.style.boxShadow ='3px 3px 3px red';
	}else{
		cidade.style.boxShadow ='0px 0px 0px black';
	}
}
function verificarUF(){
	let UF = document.getElementById('UF');
	if(UF.value == ''){
		UF.style.boxShadow = '3px 3px 3px red'
	}else{
		UF.style.boxShadow = '0px 0px 0px black'
	}

}