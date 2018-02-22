var gulp = require('gulp');
var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('main.scss', 'assets/css')
    mix.sass('ie9.scss', 'assets/css')
    mix.sass('noscript.scss', 'assets/css')
});
