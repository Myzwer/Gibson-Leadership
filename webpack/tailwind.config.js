module.exports = {


  /*
   * This project now uses v3 of Tailwind, if you don't know what that means, then don't worry about it.
   * If you're familiar with the way a previous version worked, Tailwind no longer purges CSS, rather it uses a
   * new feature called JIT (just in time) to call the CSS as needed as opposed to purging after the fact.
   *
   * More information: https://tailwindcss.com/blog/tailwindcss-v3
   */
  content: ["*.php", "./assets/src/js/*.js"],
  theme: {
    colors: {
      transparent: "transparent",
      current: "currentColor",
      /* How to Add custom Colors
       * Give your color a name, make it something that makes sense.
       * If you aren't going to use the colors below, delete them.
       *
       * Default is the normal base color.
       * Light / Dark are variants within the same palette
       * Classes are named text-CLASSNAME
       *
       * https://tailwindcss.com/docs/customizing-colors#custom-colors
       * */
      blue: {
        DEFAULT: "#304a64", // text-blue
      },
      green: {
        DEFAULT: "#bdf1e7",
      },
      orange: {
        DEFAULT: "#e3682b",
      },
      white: {
        DEFAULT: "#f5ebe8",
      },
      black: {
        DEFAULT: "#141414",
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
};
