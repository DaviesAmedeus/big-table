/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens:{
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px',

    },
    extend: {
      colors: {
        brightRed: 'hsl(12, 88%, 58%)',
        normalGray: 'hsl(0,0%,97.65%)',
        solidTextColor: 'hsl(128,9.43%,31.18%)',
        brightTextColor: 'hsl(128.57,7%,50.08%)'
        

      }
    },
  },
  plugins: [
    require("./resources/js/plugins/textOutline"),
    require("./resources/js/plugins/openVariant"),
    require("./resources/js/plugins/animationDelay")
  ],
}

