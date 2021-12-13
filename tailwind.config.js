module.exports = {
  content: [
    "./resources/**/*.blade.php",    
    "./resources/**/*.js",    
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'garamond': ['"EB Garamond"', 'serif'],
        'gwendolyn': ['"Gwendolyn"', 'cursive'],
      },
      colors: {
        'cj-blue': '#152238',
        'cj-peach': '#FFD6D1',
        'cj-orange': '#f0b57a',
        'cj-cream': '#faf2e4'
      }
    }
  },
  plugins: [],
}
