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
    .copy([
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/admin-lte/bootstrap/js/bootstrap.min.js',
        'node_modules/admin-lte/dist/js/app.min.js',
        'node_modules/admin-lte/dist/js/pages/dashboard.js',
        'node_modules/admin-lte/dist/js/demo.js',
    ], 'public/_admin/js')
    .copyDirectory('node_modules/admin-lte/plugins', 'public/plugins')
    .copyDirectory('node_modules/admin-lte/dist/img', 'public/_admin/images')
    .sass('resources/_admin/scss/app.scss', 'public/_admin/css')
    .sass('resources/sass/app.scss', 'public/css')
    .less('resources/_admin/less/bootstrap.less', 'public/_admin/css')
    .less('resources/_admin/less/admin.less', 'public/_admin/css');
