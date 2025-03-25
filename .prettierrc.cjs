module.exports = {
    plugins: [
        "@prettier/plugin-php",
        "@shufo/prettier-plugin-blade",
        "prettier-plugin-tailwindcss",
    ],
    overrides: [
        {
            files: ["*.blade.php"],
            options: {
                parser: "blade",
                indentSize: 4,
                wrapAttributes: "auto",
                wrapAttributesMinAttrs: 2,
                wrapLineLength: 120,
                endWithNewLine: true,
                noMultipleEmptyLines: false,
                useTabs: false,
                sortTailwindcssClasses: true,
                sortHtmlAttributes: "code-guide",
                noPhpSyntaxCheck: false,
                noSingleQuote: false,
            },
        },
    ],
};
