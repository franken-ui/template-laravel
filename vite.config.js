import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/core.js",
                "node_modules/franken-ui/dist/js/icon.iife.js",
            ],
            refresh: true,
        }),
    ],
});
