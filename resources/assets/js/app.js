window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');
require('select2');

$('#course-quick-search').select2({
    ajax: {
        url: "/search/autocomplete",
        cache: true,
    },
    placeholder: 'Course code or title'
});
