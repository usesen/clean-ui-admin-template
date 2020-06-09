const antdTheme = require('./src/theme.js')
module.exports = {
  publicPath: './',
  pwa: {
    iconPaths: {
      favicon32: './favicon.png',
      favicon16: './favicon.png',
      appleTouchIcon: './favicon.png',
      maskIcon: './favicon.png',
      msTileImage: './favicon.png',
    },
  },
  css: {
    loaderOptions: {
      less: {
        modifyVars: antdTheme,
        javascriptEnabled: true,
      },
    },
  },
}
