import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({

    plugins: [
        laravel({
            input: [

                'resources/css/app.css',
                'resources/sass/app.scss',
                'resources/assets/vendors/simplebar/css/simplebar.css',
                'resources/assets/css/style.css',
                'resources/assets/vendors/@coreui/chartjs/css/coreui-chartjs.css',
                'resources/assets/css/ads.css',
                //
                'resources/js/app.js',
                'resources/assets/js/color-modes.js',
                'resources/assets/js/config.js',
                'resources/assets/vendors/chart.js/js/chart.umd.js',
                'resources/assets/vendors/@coreui/chartjs/js/coreui-chartjs.js',
                "resources/assets/vendors/@coreui/utils/js/index.js",
                'resources/assets/js/main.js',
                'resources/assets/vendors/simplebar/js/simplebar.min.js'
            ],
            refresh: true,
        }),
    ],
    server: {
        hmr: {
            overlay: false,
        }
    }
});
