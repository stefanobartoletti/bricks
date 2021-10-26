module.exports = {
  extends: [
    'stylelint-config-standard',
    'stylelint-config-standard-scss',
    'stylelint-config-recess-order'
  ],
  plugins: [],
  rules: {
    'color-function-notation': 'legacy',
    'at-rule-no-unknown': null,
    'string-quotes': 'single',
    'max-line-length': null,
    'scss/at-rule-no-unknown': true,
    'scss/double-slash-comment-empty-line-before': null
  }
};
