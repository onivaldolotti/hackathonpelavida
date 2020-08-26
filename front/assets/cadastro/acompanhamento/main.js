$(document).ready(function () {
    requestApi(
        'paciente/local',
        function (res) {
            if (!res) {
                return;
            }

            res.forEach(local => {
                let selectOption = `
                    <option value='${local.id}'> ${local.descricao} </option>
                `;

                $('#local').append(selectOption);
            });
        }
    );

    $(document).on('click', '#btnSalvar', function (ev) {
        let dados = $('#formularioAcompanhamento').serializableArray();

        requestApi(
            'paciente/salvar',
            function (res) {
                console.log(res);
            },
            {
                dados
            }
        );
    });    
});