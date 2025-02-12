/** @type {import('tailwindcss').Config} config */

const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {}, // Extend Tailwind's default colors
    },
    fontFamily: {
      'sans': ['"Plus Jakarta Sans"', 'sans-serif'],
    }
  },
  plugins: [],
};

export default config;
