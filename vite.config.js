import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/own.css',
                'resources/js/app.js',
                'resources/js/navbar-scroll.js',
                'resources/js/preline.js',
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
