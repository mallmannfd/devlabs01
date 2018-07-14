$('#enviar').click(function (e) {
    e.preventDefault();

    if(formEValido()){

        $('#formAdd').submit();
    }
});

function formEValido() {
    var nome = $('#nome').val();
    var email = $('#email').val();
    var senha = $('#senha').val();

    if (!nome) {
        alert('Campo nome é obrigatório');
        $('#nome').focus();
        return false;
    }

    if ($('#nome').val().replace(/ /g, '').match(/\W|\d/)) {
        alert('Nome não deve conter números ou caracteres especiais');
        $('#nome').focus();
        return false;
    }

    if (!email.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
        alert('E-mail inválido');
        return false;
    }

    if (!senha.match(/(?=.*[a-z])(?=.*\d).{6,}/)) {
        alert('Senha deve ter no mínimo 6 caracteres, uma letra e um número');
        return false;
    }

    return true;
}
