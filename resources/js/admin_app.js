window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

$(document).ready(function () {
    $('#dt-banner').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
        }
    });
    $('#dt-product').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
        }
    });
});

require('./components/banner');
require('./components/product');