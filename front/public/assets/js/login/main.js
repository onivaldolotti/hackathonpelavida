$(document).ready(function () {

    $(document).on('click', '#btnEntrar', function (ev) {
        ev.preventDefault();
        let dados = getDadosFormulario('formularioLogin');
        $('.input-error').removeClass('input-error');

        requestApi(
            'Usuario/login',
            function (res) {
                redirect('Usuario');
            },
            dados,
            function name(rej) {
                $('.custom-input').addClass('input-error');
            }
        );
    }); 
});