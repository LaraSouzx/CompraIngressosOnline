function validarCategoria(){
    var filme = document.getElementById('filme').value;

    if(filme == ""){
        document.getElementById('erro-categorias').removeAttribute('hidden');
    }else{
        document.getElementById('form-categoria').removeAttribute('onsubmit');
    }
}