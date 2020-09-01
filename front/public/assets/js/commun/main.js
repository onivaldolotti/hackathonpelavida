function requestApi(link, cb = '', params = {}, cbErr = '') {
    let url = 'http://localhost/hackathonpelavida/back-end/public/';

    if (link.includes('http')) {
        url = link;        
    } else {
        url = url + link;
    }

    params = $.extend({}, params);

    $.ajax({
        'url': url,
        'method': 'post',
        'contentType': 'application/x-www-form-urlencoded',
        'processData': true,
        'dataType': 'json',
        'data': params,
        success: function (res) {
            if (typeof(cb) == 'function') {
                cb(res);
            }
        },
        error: function (err) {
            if (typeof(cbErr) == 'function') {
                cbErr(err);
            }
            iziToast.error({
                'position': 'topCenter',
                'message': err.responseJSON.message || 'Error'
            });
        }
    });    
}

function getDadosFormulario(elementId, dataExtra = {}) {
    let filtros = $(`#${elementId}`).serializeArray();
    objFiltros = {};
    for (i in filtros) {
        objFiltros[filtros[i].name] = filtros[i].value
    }

    filtros = $.extend(objFiltros, dataExtra);

    return filtros;
}

function redirect(url) {
    window.location.href = url;
}