module.exports = {
  content: ["../**.php",
  "../**/**.php",],
  theme: {
    extend: {
      colors: {
        yellow: '#fdff00',
        grey: '#eceae8',        
      }
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
