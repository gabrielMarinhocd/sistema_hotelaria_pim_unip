const { version } = require("laravel-mix");
const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles(
    ["resources/views/HunipHotel/css/reset.css",
     "resources/views/HunipHotel/css/style.css",
    ],"public/HunipHotel/css/style.css"
    ).version()
    .scripts(["node_modules/jquery/dist/jquery.js"
    ],"public/HunipHotel/jquery.js"
    ).version()
    .scripts(["node_modules/bootstrap/dist/js/bootstrap.bundle.js"
    ],"public/HunipHotel/bootstrap.js"
    ).version()
    .styles(["node_modules/bootstrap/dist/css/bootstrap.css"
    ],"public/HunipHotel/bootstrap.css"
    ).version();
    
