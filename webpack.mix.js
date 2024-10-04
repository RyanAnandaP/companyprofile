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

mix.js('resources/js/welcome.js', 'public/js')
    .js('resources/js/chat.js', 'public/js')
    .js('resources/js/admin.js', 'public/js')
    .js('resources/js/lounge.js', 'public/js')
    .js('resources/js/news.js', 'public/js')
    .js('resources/js/cs.js', 'public/js')
    .js('resources/js/main.js', 'public/js')
    .js('resources/js/timeline.js', 'public/js')
    .js('resources/js/ib.js', 'public/js')
    .js('resources/js/jquery.tabulation.es6.js','public/js')
    .sass('resources/sass/welcome.scss', 'public/css');
    // .sass('resources/sass/welcome.scss', 'public/css');
    // .sass('resources/sass/style.scss', 'public/css');