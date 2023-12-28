/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js,css}'],
  theme: {
    extend: {
      colors: {
        red: "#f00000",
        purple: "#f061FF",
        green: "#008000",
      }, // Extend Tailwind's default colors
      textColor: {
        red: "#f00000",
        purple: "#f061FF"
      }, 
      fontWeight: {
        hairline: '100',
        extralight: '200',
        light: '300',
        normal: '400',
        medium: '500',
        semibold: '600',
        bold: '700',
        'extra-bold': '800',
        black: '900',
      },
      padding: {
        yt: '56.25%',
        full: '25px 50px'
      },
      fontSize:{
        '5xl': '5em'
      }
    },
  },
  plugins: [],
};

export default config;
