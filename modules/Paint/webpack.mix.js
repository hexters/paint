const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));

const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

mix.js(__dirname + '/Resources/assets/vintage/js/app.js', 'js/vintage-paint.js')
    .sass( __dirname + '/Resources/assets/vintage/sass/app.scss', 'css/vintage-paint.css');

if (mix.inProduction()) {
    mix.version();
}
