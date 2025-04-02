import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/styles.scss',
                    'resources/css/app.css',
                    'resources/js/app.js',
                    'resources/js/script.js',
                    'resources/css/login.css'
                    ],
                    
            refresh: [`resources/views/**/*`],
        }),
    ],
    server: {
        cors: true,
    },
});