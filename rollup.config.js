import { babel } from '@rollup/plugin-babel';
import commonjs from '@rollup/plugin-commonjs';
import nodeResolve from '@rollup/plugin-node-resolve';
import { terser } from 'rollup-plugin-terser';
import multiInput from 'rollup-plugin-multi-input';


import config from './bricks.configR.mjs';
const production = (process.env.BUILD === 'production');

export default {
  // input: ['src/js/scripts.js', 'src/js/bootstrap.js'],
  input: config.js.src,
  output: {
    dir: config.js.dist
  },
  plugins: [
    multiInput(),
    nodeResolve(),
    commonjs(),
    babel({ babelHelpers: 'bundled' }),
    production && terser()
  ]
};
