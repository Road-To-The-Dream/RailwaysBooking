const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/jquery-datetimepicker/build/jquery.datetimepicker.full.js',
    'resources/js/showRoutes.js',
    'resources/js/showTrains.js',
    'resources/js/info.js',
    'resources/js/showDate.js',
    'resources/js/showCities.js',
    'resources/js/selectCarriage.js',
    'resources/js/placesForCarriage.js',
], 'public/js/app.js');

mix.styles([
    'resources/css/login.css',
    'resources/css/base.css',
    'node_modules/jquery-datetimepicker/build/jquery.datetimepicker.min.css',
    'resources/css/home.css',
    'resources/css/carriage.css',
], 'public/css/app.css');

mix.styles('resources/css/404.css', 'public/css/error.css');

mix.copyDirectory([
    'resources/img'
], 'public/img');

