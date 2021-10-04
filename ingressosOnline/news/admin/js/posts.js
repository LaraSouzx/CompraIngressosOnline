function validarPost(){    
    var nome = document.getElementById('nome').value;
    var filme = document.getElementById('filme').value;
    var horario = document.getElementById('horario').value;

     alert ("teste");
    if(nome== "" || filme == "" || horario == "" ){
        document.getElementById('erro-posts').removeAttribute('hidden');
    }else{
        document.getElementById('form-post').removeAttribute('onsubmit');
    }    
}