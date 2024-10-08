/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      listStyleType: {
        'lower-alpha': 'lower-alpha', // a, b, c, ...
        'upper-alpha': 'upper-alpha', // A, B, C, ...
      },
    },
  },
  plugins: [],
}

