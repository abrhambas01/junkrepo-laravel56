let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/index.sass', 'public/css/app.css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.js') ],
    })
    .browserSync({
         proxy: '127.0.0.1:8000',
        // https: true,
        // host: 'junkrepo-laravel56.dev',
        // proxy: 'junkrepo-laravel56.dev',
        // https: {
        //     key: "/Users/eric/.valet/Certificates/junkrepo-laravel56.dev.key",
        //     cert: "/Users/eric/.valet/Certificates/junkrepo-laravel56.dev.crt"
        // }
    });
