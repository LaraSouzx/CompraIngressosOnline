function validarPessoa() {
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var sexo = document.getElementById('sexo').value;
    var senha = document.getElementById('senha').value;
    var filme = document.getElementById('filme').value;
    var horario = document.getElementById('horario').value;

    if (nome == "" || email == "" || sexo == "" || senha == "" || filme == "" || horario == "") {
        document.getElementById('retorno').setAttribute('class', 'alert alert-danger');
        document.getElementById('retorno').innerHTML = "Ops! Preencha tudo para continuar!";
    } else {
        document.getElementById('form-pessoa').removeAttribute("onsubmit");
    }
}

function deletar($id) {
    Swal.fire({
        title: 'Deletar?',
        text: "Você não poderá reverter essa ação!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#157347',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {

            $.ajax({
                url: 'http://localhost/modulo-2/acoes/pessoas/deletarPessoa.php',
                type: 'POST',
                dataType: 'html',
                data: {
                    id: $id
                }
            }).done(function (data) {
                if (data == 1) {
                    document.getElementById('pessoa-'+$id).remove();
                    Swal.fire(
                        'Sucesso!',
                        'O ítem foi deletado!',
                        'success'
                    )
                }
            })

        }
    })
}
function validarPessoaEdit() {
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var sexo = document.getElementById('sexo').value;
    if (nome == "" || email == "" || sexo == "") {
        document.getElementById('retorno').setAttribute('class', 'alert alert-danger');
        document.getElementById('retorno').innerHTML = "Ops! Preencha tudo para continuar!";
    } else {
        document.getElementById('form-pessoa').removeAttribute("onsubmit");
    }
}
