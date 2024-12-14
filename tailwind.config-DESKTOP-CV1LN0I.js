/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [],
  theme: {
    extend: {
      fontFamily: {
        sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
      }
    },
  },
  plugins: {
    tailwindcss: {},
    autoprefixer: {},
  },
}

