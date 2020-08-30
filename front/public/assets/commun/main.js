function requestApi(link, cb = '', params = {}) {
    let url = 'http://localhost:8080/hackathonpelavida/back-end/';

    if (url.includes('http')) {
        url = link;        
    } else {
        url = url + link;
    }

    params = $.extends({}, params);

    $.ajax({
        'url': url,
        'method': 'post',
        'contentType': 'application/x-www-url-encoded',
        'processData': true,
        'dataType': 'json',
        success: function (res) {
            if (typeof(cb) == 'function') {
                cb(res);
            }
        },
        error: function (err) {
            alert(err.responseJson.message);
        }
    });    
}