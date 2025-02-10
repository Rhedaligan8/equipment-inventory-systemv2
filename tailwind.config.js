/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
       animation: {
        floatRotateLeft: "floatRotateLeft 4s ease-in-out infinite",
        floatRotateRight: "floatRotateRight 3s ease-in-out infinite",
      },
      keyframes: {
        float: {
          "0%": { transform: "translateY(0px)" },
          "50%": { transform: "translateY(-10px)" },
          "100%": { transform: "translateY(0px)" },
        },
        floatRotateLeft: {
          "0%": { transform: "translateY(0px) rotate(-6deg)" },
          "50%": { transform: "translateY(-10px) rotate(-6deg)" },
          "100%": { transform: "translateY(0px) rotate(-6deg)" },
        },
          floatRotateRight: {
          "0%": { transform: "translateY(0px) rotate(6deg)" },
          "50%": { transform: "translateY(-10px) rotate(6deg)" },
          "100%": { transform: "translateY(0px) rotate(6deg)" },
        },
      },
    },
  },
  plugins: [],
}