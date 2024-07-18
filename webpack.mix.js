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

    mix.js('resources/assets/js/advanced-form-elements.js', 'public/assets/js')
    mix.js('resources/assets/js/app-calendar-events.js', 'public/assets/js')
    mix.js('resources/assets/js/app-calendar.js', 'public/assets/js')
    mix.js('resources/assets/js/carousel-rtl.js', 'public/assets/js')
    mix.js('resources/assets/js/carousel.js', 'public/assets/js')
    mix.js('resources/assets/js/chart.chartjs.js', 'public/assets/js')
    mix.js('resources/assets/js/chart.flot.js', 'public/assets/js')
    mix.js('resources/assets/js/chart.flot.sampledata.js', 'public/assets/js')
    mix.js('resources/assets/js/chart.morris.js', 'public/assets/js')
    mix.js('resources/assets/js/chart.peity.js', 'public/assets/js')
    mix.js('resources/assets/js/chart.sparkline.js', 'public/assets/js')
    mix.js('resources/assets/js/chat.js', 'public/assets/js')
    mix.js('resources/assets/js/check-all-mail.js', 'public/assets/js')
    mix.js('resources/assets/js/contact.js', 'public/assets/js')
    mix.js('resources/assets/js/cookie.js', 'public/assets/js')
    mix.js('resources/assets/js/custom.js', 'public/assets/js')
    mix.js('resources/assets/js/dashboard.sampledata.js', 'public/assets/js')
    mix.js('resources/assets/js/echarts.js', 'public/assets/js')
    mix.js('resources/assets/js/file-upload.js', 'public/assets/js')
    mix.js('resources/assets/js/form-editor.js', 'public/assets/js')
    mix.js('resources/assets/js/form-elements.js', 'public/assets/js')
    mix.js('resources/assets/js/form-layouts.js', 'public/assets/js')
    mix.js('resources/assets/js/form-validation.js', 'public/assets/js')
    mix.js('resources/assets/js/form-wizard.js', 'public/assets/js')
    mix.js('resources/assets/js/gallery.js', 'public/assets/js')
    mix.js('resources/assets/js/image-comparision.js', 'public/assets/js')
    mix.js('resources/assets/js/index-4', 'public/assets/js')
    mix.js('resources/assets/js/index-map.js', 'public/assets/js')
    mix.js('resources/assets/js/index.js', 'public/assets/js')
    mix.js('resources/assets/js/invoice.js', 'public/assets/js')
    mix.js('resources/assets/js/jquery.vmap.sampledata.js', 'public/assets/js')
    mix.js('resources/assets/js/left-menu.js', 'public/assets/js')
    mix.js('resources/assets/js/mail-two.js', 'public/assets/js')
    mix.js('resources/assets/js/map-leafleft.js', 'public/assets/js')
    mix.js('resources/assets/js/map.apple.js', 'public/assets/js')
    mix.js('resources/assets/js/map.bluewater.js', 'public/assets/js')
    mix.js('resources/assets/js/map.mapbox.js', 'public/assets/js')
    mix.js('resources/assets/js/map.shiftworker.js', 'public/assets/js')
    mix.js('resources/assets/js/modal-popup.js', 'public/assets/js')
    mix.js('resources/assets/js/modal.js', 'public/assets/js')
    mix.js('resources/assets/js/navigation.js', 'public/assets/js')
    mix.js('resources/assets/js/newsticker.js', 'public/assets/js')
    mix.js('resources/assets/js/popover.js', 'public/assets/js')
    mix.js('resources/assets/js/profile.js', 'public/assets/js')
    mix.js('resources/assets/js/rangeslider.js', 'public/assets/js')
    mix.js('resources/assets/js/search.js', 'public/assets/js')
    mix.js('resources/assets/js/select2.js', 'public/assets/js')
    mix.js('resources/assets/js/sidemenu.js', 'public/assets/js')
    mix.js('resources/assets/js/sticky.js', 'public/assets/js')
    mix.js('resources/assets/js/table-data.js', 'public/assets/js')
    mix.js('resources/assets/js/tabs.js', 'public/assets/js')
    mix.js('resources/assets/js/timline.js', 'public/assets/js')
    mix.js('resources/assets/js/tooltip.js', 'public/assets/js')
    mix.js('resources/assets/js/vector-map.js', 'public/assets/js')
    mix.js('resources/assets/js/widget-chart.js', 'public/assets/js')
    mix.sass('resources/assets/scss/style.scss', 'public/assets/css')
    mix.sass('resources/assets/custom-theme/animate.scss', 'public/assets/css')
    mix.sass('resources/assets/custom-theme/sidemenu.scss', 'public/assets/css')
    mix.sass('resources/assets/custom-theme/skin-modes.scss', 'public/assets/css')
    mix.sass('resources/assets/custom-theme/style-dark.scss', 'public/assets/css')
    mix.sass('resources/assets/custom-theme/colors/color.scss', 'public/assets/css/colors')
    mix.sass('resources/assets/custom-theme/colors/color2.scss', 'public/assets/css/colors')
    mix.sass('resources/assets/custom-theme/colors/color3.scss', 'public/assets/css/colors')
    mix.sass('resources/assets/custom-theme/colors/color4.scss', 'public/assets/css/colors')
    mix.sass('resources/assets/custom-theme/colors/color5.scss', 'public/assets/css/colors')
    mix.sass('resources/assets/custom-theme/colors/color6.scss', 'public/assets/css/colors')
    mix.copyDirectory('resources/assets/img', 'public/assets/img')
    mix.copyDirectory('resources/assets/plugins', 'public/assets/plugins')
    mix.options({
        processCssUrls: false
    });

    mix.browserSync('http://127.0.0.1:8000');