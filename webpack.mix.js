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
let resourcesPath = 'resources';
let resourcesAssets = 'resources/assets';


mix.js('resources/js/app.js', 'public/js/init.js')
    .postCss('resources/css/app.css', 'public/css/init.css', [
        //
    ])
    .combine([
        'public/css/init.css',
        resourcesAssets + '/css/preloader.min.css',
        resourcesAssets + '/css/bootstrap.min.css',
        resourcesAssets + '/css/icons.min.css',
        resourcesAssets + '/css/app.min.css',
        resourcesAssets + '/css/custom.css'
    ],'public/css/app.css')
    .combine([
        'public/js/init.js',
        resourcesAssets + '/libs/jquery/jquery.min.js',
        resourcesAssets + '/libs/bootstrap/js/bootstrap.bundle.min.js',
        resourcesAssets + '/libs/metismenu/metisMenu.min.js',
        resourcesAssets + '/libs/simplebar/simplebar.min.js',
        resourcesAssets + '/libs/node-waves/waves.min.js',
        resourcesAssets + '/libs/feather-icons/feather.min.js',
        resourcesAssets + '/libs/pace-js/pace.min.js',
        resourcesAssets + '/js/app.js',
        // resourcesAssets + '/js/ajax.js'
    ],'public/js/app.js')
    .combine([
        resourcesAssets + '/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
        resourcesAssets + '/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css',
        resourcesAssets + '/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css',
    ],'public/css/datatables.css')
    .combine([
        resourcesAssets + '/libs/datatables.net/js/jquery.dataTables.min.js',
        resourcesAssets + '/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
        resourcesAssets + '/libs/datatables.net-buttons/js/dataTables.buttons.min.js',
        resourcesAssets + '/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js',
        resourcesAssets + '/libs/jszip/jszip.min.js',
        resourcesAssets + '/libs/pdfmake/build/pdfmake.min.js',
        resourcesAssets + '/libs/pdfmake/build/vfs_fonts.js',
        resourcesAssets + '/libs/datatables.net-buttons/js/buttons.html5.min.js',
        resourcesAssets + '/libs/datatables.net-buttons/js/buttons.print.min.js',
        resourcesAssets + '/libs/datatables.net-buttons/js/buttons.colVis.min.js',
        resourcesAssets + '/libs/datatables.net-responsive/js/dataTables.responsive.min.js',
        resourcesAssets + '/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js',
        resourcesAssets + '/js/pages/datatables.init.js'
    ],'public/js/datatables.js');