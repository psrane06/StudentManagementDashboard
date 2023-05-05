import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/now-ui-dashboard.css',
                'resources/js/now-ui-dashboard.js',
            ],
            refresh: true,
        }),
    ],
});
