import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.jsx',
    ],


theme: {
  extend: {
    fontFamily: {
      sans: ['Figtree', ...defaultTheme.fontFamily.sans],
    },
    colors: {
      primary: '#FA5419',
      secondary: '#3C7B24',
      beige: '#FFFFE7',
      negro: '#161616',
      marron: '#290301',
      // Añade otros colores que necesites
    },
  },
},
plugins: [
  require('@tailwindcss/forms'),
],
};