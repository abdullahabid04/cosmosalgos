import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/cosmos-animations.css',
                'resources/js/app.js',
                'resources/js/cosmos-animations.js',
            ],
            refresh: true,
        }),
    ],
});
