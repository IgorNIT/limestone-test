const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('src/js/main.js', 'build/js')
    .sass('src/scss/header.scss', 'build/css')
    .sass('src/scss/footer.scss', 'build/css')
    .sass('src/scss/front-page.scss', 'build/css')
    .options({
        postCss: [
            require("css-mqpacker")
        ]
    });

