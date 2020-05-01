const HtmlWebpackPlugin = require('html-webpack-plugin');
const webpack = require('webpack');
const path = require('path');
const CopyPlugin = require('copy-webpack-plugin');

module.exports = function(){
  return {
    mode: 'development',
    entry: {
      app:'./src/app.js'
    }
    ,
    watch: true,
    watchOptions: {
      aggregateTimeout: 300, // Process all changes which happened in this time into one rebuild
      poll: 1000, // Check for changes every second,
      ignored: /node_modules/,
      // ignored: [
      //   '**/*.scss', '/node_modules/'
      // ]
    },
    devtool: 'source-maps',
    devServer: {
      contentBase: path.join(__dirname, 'src'),
      watchContentBase: true,
      hot: true,
      open: true,
      inline: true
    },
    plugins: [

      new CopyPlugin([
        { from: 'src/fonts', to: 'dist' },
        { from: 'src/images', to: 'dist' },
      ]),
      new HtmlWebpackPlugin({
        title: 'Homepagina',
        filename:'index.html',
        chunks: ['app'],
       template: path.resolve('./src/index.html')

      }),
      new HtmlWebpackPlugin({

        title: 'Shop pagina',
        template: path.resolve('./src/shop.html'),
        chunks: ['app'],
        filename: 'shop.html'
      }),
      new HtmlWebpackPlugin({

        title: 'Product pagina',
        template: path.resolve('./src/product.html'),
        chunks: ['app'],
        filename: 'product.html'
      }),
      new HtmlWebpackPlugin({

        title: 'Checkout pagina',
        template: path.resolve('./src/checkout.html'),
        chunks: ['app'],
        filename: 'checkout.html'
      }),
      new HtmlWebpackPlugin({

        title: 'Winkelmand pagina',
        template: path.resolve('./src/winkelmand.html'),
        chunks: ['app'],
        filename: 'winkelmand.html'
      }),
      new HtmlWebpackPlugin({

        title: 'Login pagina',
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
      new webpack.ProvidePlugin({
        $: "jquery",
        jQuery: "jquery"
      }),
      new webpack.HotModuleReplacementPlugin()
    ],
    module: {
      rules: [
        {
          test: /\.scss$/,
          use: [{
            loader: 'style-loader', // inject CSS to page
          }, {
            loader: 'css-loader', // translates CSS into CommonJS modules
          }, {
            loader: 'postcss-loader', // Run post css actions
            options: {
              plugins: function () { // post css plugins, can be exported to postcss.config.js
                return [
                  require('precss'),
                  require('autoprefixer')
                ];
              }
            }
          }, {
            loader: 'sass-loader' // compiles Sass to CSS
          }]
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
          test: /\.(jpg|jpeg|gif|png|svg|webp)$/,
          use: [
            {
              loader: "url-loader",
              options: {
                outputPath: 'images/',
                name: "[name].[ext]",
                esModule: false,
              },
            },
          ]
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
          test: /\.html$/,
          use: {
            loader: 'html-loader',
          }
        },
      ]
    }
  };
}
