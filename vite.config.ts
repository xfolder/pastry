import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import laravel from 'laravel-vite-plugin';

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
      laravel({
          input: ['resources/css/app.css', 'resources/main.ts'],
          refresh: true,
      }),
      vue({
          template: {
              transformAssetUrls: {
                  base: null,
                  includeAbsolute: false,
              },
          },
      })
  ],
})
