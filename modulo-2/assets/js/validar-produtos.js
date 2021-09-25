function validarProdutos(argument) {
	var produto = document.getElementById('produto').value;
	var preço = document.getElementById('preço').value;

	if (produto == "" || preço == "") {
		 document.getElementById('retorno').setAttribute('class', 'alert alert-danger');
        document.getElementById('retorno').innerHTML = "Ops! Preencha tudo para continuar!";
	}else{
		document.getElementById('form-pessoa').removeAttribute('onsubmit');
	}
}