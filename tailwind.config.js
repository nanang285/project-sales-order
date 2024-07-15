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
        primary: {
          light: '#1B2579',
          DEFAULT: '#1B2579',
          dark: '#1B2579',
        },
        skyblue: {
          light: '#1b2479ad',
          DEFAULT: '#1b2479ad',
          dark: '#1b2479ad',
        },
        violet: {
          light: '#7581E3',
          DEFAULT: '#7581E3',
          dark: '#7581E3',
        },
        lightblue: {
          light: '#DBDFFE',
          DEFAULT: '#DBDFFE',
          dark: '#DBDFFE',
        }
      },
    },
  },
  plugins: [],
}