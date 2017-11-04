var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
});

elixir(function(mix) {
    mix.sass([
        'admin/app.scss',
    ], 'public/assets/admin/css/app.css');
});

// Config gulp javascript
elixir(function(mix) {
    mix.scripts([
    	'admin/validate/rules.js',
    	'admin/validate/messages.js',
    	'admin/validate/index.js'
    ], 'public/assets/admin/js/validate.js');

    mix.scripts([
    	'admin/form/index.js',
    ], 'public/assets/admin/js/form.js');

    mix.scripts([
        'admin/main/alert.js'
    ], 'public/assets/admin/js/alert.js');
});