import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    // content: [
    //     './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    //     './storage/framework/views/*.php',
    //     './resources/views/**/*.blade.php',
    // ],

    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                // sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'popins' : 'Poppins',
                'roboto' : 'Roboto',
                'jaro' : 'Jaro',
                'poetsen-one' : 'Poetsen One',
                'montserrat' : 'Montserrat',
            },            
      colors:{
        primary: {
          black: "#050729",
          gray: {
            100: "#EDEEF2",
            500: "#989AAE"
          },
          purple: {
            100 : '#F3F0F8',
            500 : '#5313CA'
          },
          yellow: {
            500 : '#FF9736',
          },
          blue: {
            300 : '#75F1F1'
          }
        }
      },
        },
    },

    plugins: [forms],
};
