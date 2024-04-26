<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <meta name="viewport" content="width=device-width" />
    <title>Franken UI</title>
    <link rel="preload" href="{{ asset('fonts/geist-font/fonts/GeistVariableVF.woff2') }}" as="font"
        type="font/woff2" crossorigin />
    <link rel="preload" href="{{ asset('fonts/geist-font/fonts/GeistMonoVariableVF.woff2') }}" as="font"
        type="font/woff2" crossorigin />
    <link rel="stylesheet" href="{{ asset('fonts/geist-font/style.css') }}" />

    <script>
        const htmlElement = document.documentElement;

        if (
            localStorage.getItem("mode") === "dark" ||
            (!("mode" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            htmlElement.classList.add("dark");
        } else {
            htmlElement.classList.remove("dark");
        }

        htmlElement.classList.add(
            localStorage.getItem("theme") || "uk-theme-zinc",
        );
    </script>


    @vite('resources/css/app.css')
    @vite('resources/js/core.js')
    @vite('node_modules/franken-ui/dist/js/icon.iife.js')
</head>

<body class="bg-background font-geist-sans text-foreground antialiased">
    <!-- START CODING HERE -->
    <div class="flex flex-col items-center justify-center gap-6">
        <h1 class="text-4xl">Franken UI</h1>

        <div class="uk-inline">
            <button class="uk-icon-button uk-icon-button-small uk-icon-button-outline">
                <uk-icon icon="palette" uk-cloak></uk-icon>
            </button>
            <div class="uk-card uk-card-body uk-card-default uk-drop uk-width-large"
                uk-drop="mode: click; offset: 8; pos: bottom-center">
                <div class="uk-card-title uk-margin-medium-bottom">Customize</div>
                <uk-theme-switcher></uk-theme-switcher>
            </div>
        </div>

    </div>
    <!-- END -->
</body>

</html>
