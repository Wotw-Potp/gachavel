/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["resources/views/**/*.blade.php"],
  theme: {
    extend: {
      fontFamily: {
        sigmar: ["'Sigmar'", "cursive"],
      },
      colors: {
        gray: {
          light: "#fbfbfd",
        },
        viva: "#BE3455",
      },
    },
  },
  plugins: [],
};
