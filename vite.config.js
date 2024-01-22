import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    publicDir: 'public',
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/own.css',

                'resources/img/bg-login.png',
                'resources/img/favicon.ico',
                'resources/img/logo.png',


                'resources/js/app.js',
                'resources/js/bootstrap.js',
                'resources/js/navbar-scroll.js',
                'resources/js/preline.js',
                'resources/js/sweetalert.all.js',
            ],
            output: [
                'dist'
            ],
            refresh: true,
        }),
    ],
    build: {
        /** If you set esmExternals to true, this plugins assumes that
         all external dependencies are ES modules */

        commonjsOptions: {
            esmExternals: true,
        },
    },
});
