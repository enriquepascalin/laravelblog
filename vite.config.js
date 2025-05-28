import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react'; // Add this

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.jsx'], // Ensure this points to your React entry
            refresh: true,
        }),
        react(), // Add React plugin
    ],
});
