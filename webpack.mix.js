const mix = require('laravel-mix');


mix.
    styles([
        'resources/views/site/css/style.css'
    ], 'public/site/css/style.css');