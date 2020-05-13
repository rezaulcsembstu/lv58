require("dotenv").config();
const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

const tailwindcss = require("tailwindcss");

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .styles(
        [
            "resources/css/style.css",
            "node_modules/parsleyjs/src/parsley.css",
            "node_modules/ladda/dist/ladda.min.css"
        ],
        "public/css/style.css"
    )
    .copyDirectory(
        "node_modules/@fortawesome/fontawesome-free/webfonts",
        "public/webfonts"
    )
    .extract()
    .options({
        //extractVueStyles: "public/css/vue-style.css",
        processCssUrls: false,
        postCss: [tailwindcss("tailwind.config.js")]
    });
// .browserSync({
//     proxy: process.env.APP_URL,
//     open: false
// });

// mix.webpackConfig({
//     resolve: {
//         alias: {
//             vue$: "vue/dist/vue.runtime.esm.js"
//         }
//     }
// });
