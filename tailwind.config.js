module.exports = {
  mode: 'jit',
  content: require('fast-glob').sync([
    'source/**/*.{blade.php,md,html}'
  ],{ dot: true }),
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
