const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

mix.js("resources/js/app.js")
    .sass("resources/scss/app.scss")
    .options({
        processCssUrls: false,
        postCss: [tailwindcss("./tailwind.config.js")],
    });
