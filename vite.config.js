import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";
import franken from "franken-ui/plugin-vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "node_modules/franken-ui/dist/css/franken-ui.css",
                "resources/js/app.js",
                "node_modules/franken-ui/dist/js/icon.iife.js",
            ],
            refresh: true,
        }),
        tailwindcss(),
        franken({
            preflight: false,
            layer: true,
            layerExceptions: ["chart"],
        }),
    ],
});
