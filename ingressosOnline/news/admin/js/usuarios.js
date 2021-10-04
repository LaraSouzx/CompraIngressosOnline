function validarUsuario() {
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;

    if(nome == "" || email == "" || senha == "" ){
        document.getElementById('erro-usuario').removeAttribute('hidden');
    }else{
        document.getElementById('form-usuario').removeAttribute('onsubmit');
    }
}

function validarEdicaoUsuario(){
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;

    if(nome == "" || email == ""){
        document.getElementById('erro-usuario').removeAttribute('hidden');
    }else{
        document.getElementById('form-usuario').removeAttribute('onsubmit');
    }
}