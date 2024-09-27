/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './node_modules/flowbite/**/*.js',
    './src/**/*.{html,js,php}', 
    './index.php',
    './pages/**/*.php',
    './utils/**/*.php',
    './css/**/*.css',
    './js/**/*.js',  ],
    darkmode: 'class',
    theme: {
      extend: {
        fontFamily: {
          ubuntu: ['Ubuntu', 'sans-serif'],
        },
        colors:{
          darkBg: '#100c0c',
          myprimary: '#875145',
          mysecondary: '#d29c9a',
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
    require('flowbite/plugin'),
],
}

