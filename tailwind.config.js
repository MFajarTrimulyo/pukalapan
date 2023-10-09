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
        brown: "#874B29",
        lightbrown: "#d99a77",
        semibrown: "#a16747",
        bgbtn: "#6477DB",
      },
      fontFamily: {
        lilita: ['Lilita One'],
        bebas: ['Bebas Neue'],
      }
    },
  },
  plugins: [],
}

