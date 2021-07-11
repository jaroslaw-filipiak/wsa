module.exports = {
  purge: ['./*.html', './src/purge/*.php'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    screens: {
      'sm': '640px',
     

      'md': '768px',
      

      'lg': '1024px',
      

      'xl': '1120px',
      

      '2xl': '1536px',
      
    },
  variants: {
    extend: {},
  },
  plugins: [],
}
}
