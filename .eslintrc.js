module.exports = {
  root: true,
  env: {
    browser: true,
    es2021: true,
    node: true
  },
  parser: '@babel/eslint-parser',
  extends: [
    'standard'
  ],
  rules: {
    'no-unused-vars': ['warn'],
    semi: ['error', 'always']
  }
};
