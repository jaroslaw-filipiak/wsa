module.exports = {
    build: {
      minify: true,
      rollupOptions: {
        output: {
          assetFileNames: "[name].min.[ext]",
          entryFileNames: '[name].js',
        },
      },
    },
  };