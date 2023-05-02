/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors:{
            'goldLevel': '#C6A961',
              'greenLevel': '#006F42',
        }
      },
    },
    plugins: [],
  }

