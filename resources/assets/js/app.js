window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');
require('select2');

$( document ).ready(function() {
    console.log($.fn.tooltip.Constructor.VERSION);
});

$('.course-search').select2({
    ajax: {
        url: "/api/search_courses",
        cache: true,
    },
    placeholder: 'Course code or title'
});
