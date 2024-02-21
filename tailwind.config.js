/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
        colors : {
            'primary' : {
                '50' : '#edfff4',
                '100' : '#d6ffe8',
                '200' : '#afffd1',
                '300' : '#71ffaf',
                '400' : '#2dfb85',
                '500' : '#02e565',
                '600' : '#00bf4f',
                '700' : '#009240',
                '800' : '#067537',
                '900' : '#085f30',
                '950' : '#003618',
            },
            'secondary' : {
                '50' : '#fefde8',
                '100' : '#fffec2',
                '200' : '#fffa88',
                '300' : '#ffef44',
                '400' : '#fede11',
                '500' : '#f3c904',
                '600' : '#ce9900',
                '700' : '#a46e04',
                '800' : '#87550c',
                '900' : '#734610',
                '950' : '#432405',
            }
        }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

