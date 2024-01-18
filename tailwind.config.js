/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {},
  },
  plugins: [
      require('postcss-import'),
      require('tailwindcss/nesting')(require('postcss-nesting')),
      require('autoprefixer'),
      require('tailwindcss'),
      require('preline/plugin'),
  ],
}

