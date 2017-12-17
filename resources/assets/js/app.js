window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');
require('select2');

$('#course-quick-search').select2({
    ajax: {
        url: "/search/autocomplete",
        cache: true,
        delay: 200
    },
    placeholder: 'Course code or title'
}).on('select2:select', function(event){
    window.location.href = event.params.data.url;
});
$('.select2').select2();
