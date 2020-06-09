//ref: https://umijs.org/config/
export default {
  history: 'hash',
  sass: {},
  treeShaking: true,
  theme: 'src/theme.js',
  publicPath: './',
  plugins: [
    // ref: https://umijs.org/plugin/umi-plugin-react.html
    [
      'umi-plugin-react',
      {
        locale: {
          enable: true,
          default: 'en-US',
          baseNavigator: true,
          antd: true,
        },
        antd: true,
        dva: {
          hmr: true,
        },
        dynamicImport: {
          loadingComponent: 'components/LayoutComponents/Loader',
        },
        dll: {
          include: ['dva', 'dva/router', 'dva/saga', 'dva/fetch', 'antd/es'],
        },
        hardSource: /* isMac */ process.platform === 'darwin',
        pwa: {
          manifestOptions: {
            srcPath: '.manifest.json',
          },
        },
      },
    ],
  ],
}
