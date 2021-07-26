module.exports = {
  purge: ['./*.html', './src/purge/*.php' , './src/purge/*.scss'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      maxWidth: {
        '380': '380px',
       }
    },
    
  variants: {
    extend: {},
  },
  plugins: [],
},
corePlugins: {
  container: false
},
plugins: [
  function ({ addComponents }) {
    addComponents({
      '.container': {
        maxWidth: '90%',
        '@screen sm': {
          maxWidth: '540px',
        },
        '@screen md': {
          maxWidth: '668px',
        },
        '@screen lg': {
          maxWidth: '924px',
        },
        '@screen xl': {
          maxWidth: '1180px',
        },
        '@screen 2xl': {
          maxWidth: '1336px',
        },
      }
    })
  }
]
}
