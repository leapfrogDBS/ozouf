module.exports = {
  content: ["../**.php",
  "../**/**.php",],
  theme: {
    extend: {
      colors: {
        yellow: '#ffff00',
        grey: '#eceae8',        
      }
    },
    letterSpacing: {
      widest: '.25em',
    },
    
  },
  
  plugins: [
    function ({ addVariant }) {
        addVariant('child', '& > *');
        addVariant('child-hover', '& > *:hover');
    }
],
  important: true,
}
