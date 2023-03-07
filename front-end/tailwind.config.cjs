/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./index.html',
            './src/*.vue',
            './src/components/*.vue',
            './src/components/*/*.vue'],
  theme: {
    extend: {
      fontFamily: {
        main: 'Poppins',
      },
      colors: {
        main: '#1a1a1a',
        primary: '#41bcff',
        secondary: '#1d1b3a',
      }
    },
  },
  plugins: [],
}
