import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD
=======
import tailwindcss from '@tailwindcss/vite';
>>>>>>> b38206ac7376d41bf8af11b27f7f9943d4ab0cac

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
<<<<<<< HEAD
=======
        tailwindcss(),
>>>>>>> b38206ac7376d41bf8af11b27f7f9943d4ab0cac
    ],
});
