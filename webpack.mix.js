mix.js("resources/js/app.js", "public/js").sass(
    "resources/sass/app.scss",
    "public/css"
);
mix.browserSync({
    proxy: 'localhost:8000'
});