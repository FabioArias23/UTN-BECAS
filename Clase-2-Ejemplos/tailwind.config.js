/** @type {import('tailwindcss').TailwindConfig} */
module.exports = {
  content: [
    // Aquí va la ruta a tus archivos HTML, PHP, JS, etc.
    // Ejemplo:
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
