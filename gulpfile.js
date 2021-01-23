const {src, task, dest, watch} = require('gulp');
const browserSync = require('browser-sync').create();
const debug = require('gulp-debug');
const rename = require('gulp-rename');

// work with styles
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const gulpStylelint = require('gulp-stylelint');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');

// один из самых полезных плагинов, который автоматически 
// расставляет префиксы к CSS свойствам, исходя из статистики ca
// Важно сказать, что Автопрефиксер это лишь один из множества дополнений в рамках проекта PostCSS от Злых Марсиан.
const qcmq = require('gulp-group-css-media-queries');
const cssnano = require('cssnano');

function task_sass() {
 return src(['./assets/styles/scss/main.scss', './assets/styles/scss/main-page.scss'])
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write('logfile'))
   /*  .pipe(gulpStylelint({
        reporters: [
          {formatter: 'string', console: true}
        ]
      })) */
    .pipe(debug())
    .pipe(dest('./assets/styles'))
    .pipe(browserSync.reload({stream: true}));
}


// proxy 
function dev() {
    browserSync.init({
        poxy: 'work.xsaramps.com'
    });

    watch("./assets/styles/scss/**/*.scss", task_sass);
    watch('./**/*.{php,html,js}').on('change',browserSync.reload);
}

function minimization_styles() {
  return src(['./assets/styles/scss/main.scss', './assets/styles/scss/main-page.scss'])
    .pipe( sass().on('error', sass.logError))
    .pipe( qcmq())
    .pipe( postcss([ autoprefixer(), cssnano() ]))
    .pipe( rename((path) => path.basename += '.min'))
    .pipe( dest('./assets/styles'))
};



exports.dev = dev;
exports.minStyles = minimization_styles;
