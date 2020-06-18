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

mix.js('resources/assets/js/app.js', 'public/js');
    // .sass('resources/sass/app.scss', 'public/css');
// mix.js('resources/assets/admin/js/app.js', 'public/admin/js')
//   .sass('resources/assets/admin/sass/app.scss', 'public/admin/css')
//   .copyDirectory('resources/assets/admin/dist/img', 'public/dist/img')
//   .styles([
//     'node_modules/morris.js/morris.css',
//     'node_modules/jvectormap/jquery-jvectormap.css',
//     'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
//     'node_modules/bootstrap-daterangepicker/daterangepicker.css',
//     'node_modules/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
//     'node_modules/bootstrap/dist/css/bootstrap.min.css',
//     'node_modules/font-awesome/css/font-awesome.min.css',
//     'node_modules/Ionicons/css/ionicons.min.css',
//     'resources/assets/admin/dist/css/AdminLTE.min.css',
//     'resources/assets/admin/dist/css/skins/_all-skins.min.css',
//     'resources/assets/admin/dist/css/bootstrap3-wysihtml5.min.css',
//   ], 'public/admin/lte/css/library.min.css')

//   .scripts([
//     'node_modules/jquery-ui/jquery-ui.min.js',
//     'node_modules/raphael/raphael.min.js',
//     'node_modules/raphael/raphael.min.js',
//     'node_modules/morris.js/morris.min.js',
//     'node_modules/jquery-sparkline/dist/jquery.sparkline.min.js',
//     'node_modules/jvectormap/jquery-jvectormap-1.2.2.min.js',
//     'node_modules/jvectormap/jquery-jvectormap-world-mill-en.js',
//     'node_modules/jquery-knob/dist/jquery.knob.min.js',
//     'node_modules/moment/min/moment.min.js',
//     'node_modules/bootstrap-daterangepicker/daterangepicker.js',
//     'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
//     'node_modules/bootstrap-daterangepicker/daterangepicker.js',
//     'node_modules/jquery-slimscroll/jquery.slimscroll.min.js',
//     'node_modules/fastclick/lib/fastclick.js',
//     'resources/assets/admin/dist/js/adminlte.min.js',
//     'resources/assets/admin/dist/js/pages/dashboard.js',
//     'resources/assets/admin/dist/js/demo.js',
//     'resources/assets/admin/dist/js/bootstrap3-wysihtml5.all.min.js',
//   ], 'public/admin/lte/js/library.min.js');

