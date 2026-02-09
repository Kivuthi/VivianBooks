/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
  extend: {
    colors: {
      maroon: {
        500: '#7A1F2E',
        400: '#883744',
      },
      cream: {
        50: '#F8F6F1',
        100: '#FDFBF6',
      },
      rose: {
        300: '#B98A8F',
        400: '#B98A8F',
      },
    },
  },
},
  plugins: [],
}

