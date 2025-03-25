<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link type="image/svg+xml" href="/favicon.svg" rel="icon" />
    <meta name="viewport" content="width=device-width" />
    <title>Franken UI</title>
    <link type="font/woff2" href="{{ asset('fonts/geist-font/fonts/GeistVariableVF.woff2') }}" rel="preload"
        as="font" crossorigin />
    <link type="font/woff2" href="{{ asset('fonts/geist-font/fonts/GeistMonoVariableVF.woff2') }}" rel="preload"
        as="font" crossorigin />
    <link href="{{ asset('fonts/geist-font/style.css') }}" rel="stylesheet" />

    <script>
        const htmlElement = document.documentElement;

        const __FRANKEN__ = JSON.parse(
            localStorage.getItem("__FRANKEN__") || "{}",
        );

        if (
            __FRANKEN__.mode === "dark" ||
            (!__FRANKEN__.mode &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            htmlElement.classList.add("dark");
        } else {
            htmlElement.classList.remove("dark");
        }

        htmlElement.classList.add(__FRANKEN__.theme || "uk-theme-rose");
        htmlElement.classList.add(__FRANKEN__.radii || "uk-radii-md");
        htmlElement.classList.add(__FRANKEN__.shadows || "uk-shadows-sm");
        htmlElement.classList.add(__FRANKEN__.font || "uk-font-sm");
        htmlElement.classList.add(__FRANKEN__.chart || "uk-chart-default");
    </script>

    @vite('resources/css/app.css')
    @vite('node_modules/franken-ui/dist/css/franken-ui.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-background font-geist-sans text-foreground antialiased">
    <!-- START CODING HERE -->
    <div class="uk-container mt-40">
        <div class="space-y-4">
            <h1 class="uk-hero-sm text-center font-bold">Franken UI: Dos</h1>
            <div class="flex justify-center gap-x-2">
                <a class="uk-btn uk-btn-primary" href="https://franken-ui.dev/docs/introduction">
                    Learn
                </a>
                <div class="uk-inline">
                    <button class="uk-btn uk-btn-default" type="button">
                        Follow <span uk-drop-parent-icon></span>
                    </button>
                    <div class="uk-drop uk-dropdown min-w-52" data-uk-dropdown>
                        <ul class="uk-nav uk-dropdown-nav">
                            <li>
                                <a class="flex items-center justify-between" href="https://github.com/franken-ui"
                                    target="_blank">
                                    <span class="flex-1">Github</span>
                                    <uk-icon icon="external-link"></uk-icon>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center justify-between"
                                    href="https://bsky.app/profile/frankendashui.bsky.social" target="_blank">
                                    <span class="flex-1">Bluesky</span>
                                    <uk-icon icon="external-link"></uk-icon>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center justify-between"
                                    href="https://mastodon.social/@frankendashui" target="_blank">
                                    <span class="flex-1">Mastodon</span>
                                    <uk-icon icon="external-link"></uk-icon>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center justify-between" href="https://twitter.com/frankendashui"
                                    target="_blank">
                                    <span class="flex-1">Twitter</span>
                                    <uk-icon icon="external-link"></uk-icon>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END -->

    @vite('node_modules/franken-ui/dist/js/icon.iife.js')
</body>

</html>
