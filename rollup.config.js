import { babel } from '@rollup/plugin-babel';
import commonjs from '@rollup/plugin-commonjs';
import nodeResolve from '@rollup/plugin-node-resolve';
import { terser } from 'rollup-plugin-terser';
import multiInput from 'rollup-plugin-multi-input';
import scss from 'rollup-plugin-scss';
import postcss from 'postcss'
import autoprefixer from 'autoprefixer'


import config from './bricks.configR.mjs';
const production = (process.env.BUILD === 'production');

export default {
  input: config.js.src,
  output: {
    dir: config.js.dist,
    sourcemap: !production && true
  },
  plugins: [
    multiInput(),
    nodeResolve(),
    commonjs(),
    babel({ babelHelpers: 'bundled' }),
    production && terser(),
    scss({
      output: config.css.dist + 'style.min.css',
      // include: ['./src/sass/style.scss']
      sourceMap: !production && true,
      processor: () => postcss([autoprefixer({ cascade: false })]),
      outputStyle: production ? 'compressed' : 'expanded',
    }),
  ]
};
