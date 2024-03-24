/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    colors: {
      primary : '#7D7EE6',
      secondary : 'FF6B6B',
      black : '#000',
      transparent: 'transparent',
      current: 'currentColor'
    }, // Extend Tailwind's default colors
  },
  plugins: [],
};

export default config;
