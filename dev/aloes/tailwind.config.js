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
}
}
