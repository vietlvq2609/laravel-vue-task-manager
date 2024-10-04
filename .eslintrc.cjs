require('@rushstack/eslint-patch/modern-module-resolution');

module.exports = {
  env: {
    browser: true,
    node: true,
    es2021: true,
  },
  root: true,
  extends: [
    'plugin:vue/vue3-essential',
    'eslint:recommended',
    '@vue/eslint-config-typescript',
    '@vue/eslint-config-prettier',
  ],
  parserOptions: {
    ecmaVersion: 'latest',
    sourceType: 'module',
  },
  rules: {
    'vue/multi-word-component-names': 'off',
    'no-undef': 'off',
    'vue/no-unused-vars': 'warn',
    'vue/no-v-for-template-key': 'error',
    'vue/no-template-target-blank': 'warn',
    'no-console': process.env.NODE_ENV === 'production' ? 'warn' : 'off',
    'prefer-const': 'error',
    semi: ['error', 'always'],
  },
  settings: {
    'vue/typescript': true,
  },
};
