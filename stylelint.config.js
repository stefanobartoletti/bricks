module.exports = {
  extends: [
    'stylelint-config-standard',
    'stylelint-config-standard-scss',
    'stylelint-config-recess-order'
  ],
  plugins: [],
  rules: {
    'at-rule-no-unknown': null,
    'scss/at-rule-no-unknown': true,
    'scss/double-slash-comment-empty-line-before': null,
    'string-quotes': 'single'
  }
};
