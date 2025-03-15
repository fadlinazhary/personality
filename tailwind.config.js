/** @type {import('tailwindcss').Config} config */

const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {}, // Extend Tailwind's default colors
    },
    fontFamily: {
      sans: ['Nunito', 'sans-serif'],
      mono: ['"JetBrains Mono"', 'ui-monospace'],
    }
  },
  plugins: [],
};

export default config;
