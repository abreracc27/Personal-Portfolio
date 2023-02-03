let mix = require('laravel-mix');

mix.browserSync('127.0.0.1:8000');

mix.js('resources/js/main.js', 'public/js')
   .css('resources/css/app.css', 'public/css');
