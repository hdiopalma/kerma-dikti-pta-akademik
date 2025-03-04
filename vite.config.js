import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~font-awesome': path.resolve(__dirname, 'node_modules/@fortawesome/fontawesome-free/'),
            '~admin-lte': path.resolve(__dirname, 'node_modules/admin-lte/'),
            '~datatables': path.resolve(__dirname, 'node_modules/datatables.net-bs5/'),
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap/'),
            '~sweetalert2': path.resolve(__dirname, 'node_modules/sweetalert2/'),
            
        },
    }
});
