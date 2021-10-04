function validarCadastro() {
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;
    if (email == "" || senha == "") {
        document.getElementById('retorno').setAttribute('class', 'alert alert-danger');
        document.getElementById('retorno').innerHTML = "Ops! Preencha tudo para continuar!";
    } else {
        document.getElementById('form-pessoa').removeAttribute("onsubmit");
    }
}