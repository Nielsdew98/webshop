const {CleanWebpackPlugin} = require('clean-webpack-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const MinifyPlugin = require("babel-minify-webpack-plugin");
const path = require('path');

module.exports = function (env, argv) {
  return {
    mode: 'production',
    entry: {
      app:'./src/app.js'
    },
    resolve: {
      alias: {
        jquery: "jquery/src/jquery"
      }
    },
    optimization: {
      minimizer: [
        new OptimizeCSSAssetsPlugin()
      ]
    }
    ,
    plugins: [
      new CleanWebpackPlugin(),
      new HtmlWebpackPlugin({
        title: 'Webpack starter project',
        filename:'index.html',
        chunks: ['app'],
        template: path.resolve('./src/index.html')

      }),
      new HtmlWebpackPlugin({
        title: 'Webpack starter project',
        filename:'shop.html',
        chunks: ['app'],
        template: path.resolve('./src/shop.html')
      }),
      new HtmlWebpackPlugin({
        title: 'Product pagina',
        filename:'product.html',
        chunks: ['app'],
        template: path.resolve('./src/product.html')
      }),
      new HtmlWebpackPlugin({
        title: 'Checkout pagina',
        filename:'checkout.html',
        chunks: ['app'],
        template: path.resolve('./src/checkout.html')
      }),
      new HtmlWebpackPlugin({

        title: 'Winkelmand pagina',
        template: path.resolve('./src/winkelmand.html'),
        chunks: ['app'],
        filename: 'winkelmand.html'
      }),
      new HtmlWebpackPlugin({

        title: 'login pagina',
        template: path.resolve('./src/login.html'),
        chunks: ['app'],
        filename: 'login.html'
      }),
      new HtmlWebpackPlugin({

        title: 'Contact pagina',
        template: path.resolve('./src/contact.html'),
        chunks: ['app'],
        filename: 'contact.html'
      }),
      new MiniCssExtractPlugin({
        filename: "[name].css",
        chunkFilename: "[id].css"
      }),
      new MinifyPlugin()
    ],
    module: {
      rules: [
        {
          test: /\.scss$/,
          use: [
            MiniCssExtractPlugin.loader,
            "css-loader",
            "sass-loader"
          ]
        },
        {
          test: /\.m?js$/,
          exclude: /(node_modules|bower_components)/,
          use: {
            loader: 'babel-loader',
            options: {
              presets: ['@babel/preset-env']
            }
          }
        },
        {
          test: /\.(woff|woff2|ttf|otf|eot)$/,
          use: [
            {
              loader: "file-loader",
              options: {
                name: "[name].[ext]",
                outputPath:'fonts/',
                esModule: false,
              }
            }
          ]
        },
        {
          test: /\.(jpg|jpeg|gif|png|svg|webp)$/,
          use: [
            {
              loader: "file-loader",
              options: {
                outputPath: 'images/',
                name: "[name].[ext]",
                esModule: false,
              },
            },

          ],
        },

        {
          test: /\.html$/,
          use: {
            loader: 'html-loader',
          }
        },
      ]
    }
  };
}
