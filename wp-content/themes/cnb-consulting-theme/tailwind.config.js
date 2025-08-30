/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php",
    "./src/**/*.{js,css}",
    "./template-parts/**/*.php",
    "./inc/**/*.php",
    "!./node_modules/**/*",
  ],
  theme: {
    extend: {
      colors: {
        "cnb-primary": "#1e40af",
        "cnb-secondary": "#fbbf24",
        "cnb-accent": "#10b981",
        "cnb-dark": "#1f2937",
        "cnb-light": "#f8fafc",
      },
      fontFamily: {
        sans: [
          "Inter",
          "system-ui",
          "-apple-system",
          "BlinkMacSystemFont",
          "Segoe UI",
          "Roboto",
          "sans-serif",
        ],
        serif: ["Georgia", "serif"],
        mono: [
          "Monaco",
          "Consolas",
          "Liberation Mono",
          "Courier New",
          "monospace",
        ],
      },
      fontSize: {
        xs: ["0.625rem", { lineHeight: "0.875rem" }],
        sm: ["0.75rem", { lineHeight: "1.125rem" }],
        base: ["0.875rem", { lineHeight: "1.375rem" }],
        lg: ["1rem", { lineHeight: "1.5rem" }],
        xl: ["1.125rem", { lineHeight: "1.5rem" }],
        "2xl": ["1.25rem", { lineHeight: "1.75rem" }],
        "3xl": ["1.5rem", { lineHeight: "1.875rem" }],
        "4xl": ["1.875rem", { lineHeight: "2.125rem" }],
        "5xl": ["2.25rem", { lineHeight: "1" }],
        "6xl": ["3rem", { lineHeight: "1" }],
      },
      spacing: {
        // Core spacing scale - reduced by ~18%
        0.5: "0.1rem", // Was 0.125rem
        1: "0.2rem", // Was 0.25rem (-20%)
        2: "0.4rem", // Was 0.5rem (-20%)
        3: "0.6rem", // Was 0.75rem (-20%)
        4: "0.8rem", // Was 1rem (-20%)
        5: "1rem", // Was 1.25rem (-20%)
        6: "1.2rem", // Was 1.5rem (-20%)
        7: "1.4rem", // Was 1.75rem (-20%)
        8: "1.6rem", // Was 2rem (-20%)
        9: "1.8rem", // Was 2.25rem (-20%)
        10: "2rem", // Was 2.5rem (-20%)
        11: "2.2rem", // Was 2.75rem (-20%)
        12: "2.4rem", // Was 3rem (-20%)
        14: "2.8rem", // Was 3.5rem (-20%)
        16: "3.2rem", // Was 4rem (-20%)
        20: "4rem", // Was 5rem (-20%)
        24: "4.8rem", // Was 6rem (-20%)
        28: "5.6rem", // Was 7rem (-20%)
        32: "6.4rem", // Was 8rem (-20%)
        36: "7.2rem", // Was 9rem (-20%)
        40: "8rem", // Was 10rem (-20%)
        44: "8.8rem", // Was 11rem (-20%)
        48: "9.6rem", // Was 12rem (-20%)
        52: "10.4rem", // Was 13rem (-20%)
        56: "11.2rem", // Was 14rem (-20%)
        60: "12rem", // Was 15rem (-20%)
        64: "12.8rem", // Was 16rem (-20%)
        // Custom spacing - proportionally scaled
        72: "14.4rem", // Was 18rem (-20%)
        84: "16.8rem", // Was 21rem (-20%)
        96: "19.2rem", // Was 24rem (-20%)
      },
      maxWidth: {
        xs: "16rem", // Was 20rem
        sm: "19.2rem", // Was 24rem
        md: "22.4rem", // Was 28rem
        lg: "25.6rem", // Was 32rem
        xl: "28.8rem", // Was 36rem
        "2xl": "33.6rem", // Was 42rem
        "3xl": "38.4rem", // Was 48rem
        "4xl": "44.8rem", // Was 56rem
        "5xl": "51.2rem", // Was 64rem
        "6xl": "57.6rem", // Was 72rem
        "6.5xl": "67.5rem", // 1080px - services section
        "7xl": "80rem", // 1280px - standard desktop
        "8xl": "70.4rem", // Was 88rem
        "9xl": "76.8rem", // Was 96rem
      },
      animation: {
        "fade-in": "fadeIn 0.5s ease-in-out",
        "slide-up": "slideUp 0.3s ease-out",
        "bounce-gentle": "bounceGentle 2s infinite",
      },
      keyframes: {
        fadeIn: {
          "0%": { opacity: "0" },
          "100%": { opacity: "1" },
        },
        slideUp: {
          "0%": { transform: "translateY(10px)", opacity: "0" },
          "100%": { transform: "translateY(0)", opacity: "1" },
        },
        bounceGentle: {
          "0%, 100%": { transform: "translateY(-5%)" },
          "50%": { transform: "translateY(0)" },
        },
      },
    },
  },
  plugins: [
    require("@tailwindcss/forms"),
    require("@tailwindcss/typography"),
    require("tailwind-scrollbar"),
  ],
};
