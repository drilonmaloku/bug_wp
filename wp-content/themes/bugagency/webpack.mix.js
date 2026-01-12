const mix = require("laravel-mix");
const path = require("path");

mix.sass("assets/scss/main.scss", "assets/prod/style.css");
mix.js("assets/js/scripts.js", "assets/prod/scripts.min.js");

mix.options({
  processCssUrls: false,
});

mix.webpackConfig({
  resolve: {
  },
  module: {
    rules: [
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/,
        use: [
          {
            loader: "file-loader",
            options: {
              name: "fonts/[name].[ext]",
            },
          },
        ],
      },
    ],
  },
});