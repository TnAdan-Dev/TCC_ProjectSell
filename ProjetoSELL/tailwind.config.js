/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './src/**/*.{html,js,php}', 
    './index.php',
    './pages/**/*.php',
    './utils/**/*.php',
    './css/**/*.css',
    './js/**/*.js',  ],
    theme: {
      extend: {
        fontFamily: {
          ubuntu: ['Ubuntu', 'sans-serif'], // Definindo 'Ubuntu' como uma opção de fonte
        },
        colors:{
          darkBg: '#100c0c',
          primary: '#875145',
          secondary: '#d29c9a',
        },
        gridTemplateRows: {
          '[auto,auto,1fr]': 'auto auto 1fr',
      },
    },
  },
  
  plugins: [ 
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
    require('daisyui'),
],
}

