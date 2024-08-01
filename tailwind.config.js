/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require("./resources/js/plugins/textOutline"),
    require("./resources/js/plugins/openVariant"),
    require("./resources/js/plugins/animationDelay")
  ],
}

