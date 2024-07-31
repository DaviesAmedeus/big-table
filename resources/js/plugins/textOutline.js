const plugin = require("tailwindcss/plugin");

const textOutline = plugin(function({addUtilities}){
    const newUtilities = {
        '.font-outline-2': {
          '-webkit-text-stroke': '2px rgb(228 228 231)',
          '-webkit-text-fill-color': 'transparent',
        },
        '.font-outline-4': {
            'color': 'transparent',
          '-webkit-text-stroke': '2px rgb(228 228 231)',
          
        },
      }

      addUtilities(newUtilities, ['responsive', 'hover']);
});


module.exports = textOutline;
