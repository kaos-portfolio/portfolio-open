let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/fadein.js', 'public/js')
   .js('resources/assets/js/scroll.js', 'public/js')
   .js('resources/assets/js/viewport.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/common.scss', 'public/css')
   .sass('resources/assets/sass/concept.scss', 'public/css')
   .sass('resources/assets/sass/contact.scss', 'public/css')
   .sass('resources/assets/sass/main.scss', 'public/css')
   .sass('resources/assets/sass/skills.scss', 'public/css')
   .sass('resources/assets/sass/story.scss', 'public/css')
   .sass('resources/assets/sass/top.scss', 'public/css')
   .sass('resources/assets/sass/ui.scss', 'public/css')
   .sass('resources/assets/sass/works.scss', 'public/css')
   .sass('resources/assets/sass/profile.scss', 'public/css')
   .sass('resources/assets/sass/works/nursery.scss', 'public/css/works')
   .sass('resources/assets/sass/works/music.scss', 'public/css/works')
   .sass('resources/assets/sass/works/career.scss', 'public/css/works')
   .sass('resources/assets/sass/works/realestate.scss', 'public/css/works') 
   .sass('resources/assets/sass/works/cafe.scss', 'public/css/works')
   .sass('resources/assets/sass/works/recruit.scss', 'public/css/works');
