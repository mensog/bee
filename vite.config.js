import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/owl.carousel.js', 'resources/sass/app.scss', 'public/css/app-sass.css', 'resources/js/admin/app.js'],
      refresh: true,
      // publicDirectory: 'public/'
    }),
  ],
  server: {
    host: '0.0.0.0',
    hmr: {
      host: 'localhost',
      // port: 5173
    },
  },
  css: {
    postcss: {
      plugins: [
        // require('tailwindcss'),
        require('autoprefixer'),
      ],
    },
  },
});