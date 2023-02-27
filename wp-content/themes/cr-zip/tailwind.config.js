/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    fontFamily: {
        'Merriweather': ['Merriweather', ' serif'],
        'Ubuntu': ['Ubuntu', 'sans-serif'],
      },
    extend: {
      zIndex: {
        0: 0,
        10: 10,
        20: 20,
        30: 30,
        40: 40,
        50: 50,
        25: 25,
        50: 50,
        75: 75,
        100: 100,
        auto: "auto",
      },
      
    },
  },
  lineClamp: {
    1: '1',
    2: '2',
    3: '3',
    4: '4',
    5: '5',
    6: '6',
  },
  
  daisyui: {
    styled: true,
    themes: true,
    base: true,
    utils: true,
    logs: true,
    rtl: false,
    prefix: "",
    darkTheme: false,
    themes: [
      {
        light: {
          ...require("daisyui/src/colors/themes")["[data-theme=light]"],
        },
        dark: {
          ...require("daisyui/src/colors/themes")["[data-theme=dark]"],
        },
      },
    ],
  },

  plugins : [
    require('tailwindcss/plugin'),
    require('daisyui'),
    require('@tailwindcss/line-clamp'),
  ],
  
  
}