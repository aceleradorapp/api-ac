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

// mix.js('resources/js/app.js', 'public/js')
//     .vue()
//     .sass('resources/sass/app.scss', 'public/css');

mix

    .sass('resources/views/scss/style.scss','public/assets/css/style.css')

    .scripts('node_modules/jquery/dist/jquery.js', 'public/assets/js/jquery.js')
    .scripts('resources/js/jquery.mask.js', 'public/assets/js/jquery.mask.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js','public/assets/js/bootstrap.js');
