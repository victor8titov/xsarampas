const {src, task, dest, watch} = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');

function task_sass() {
 return src('./**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(dest('./src'))
    .pipe(browserSync.stream());
}


// proxy 
function dev() {
    browserSync.init({
        poxy: 'work.xsaramps.com'
    });

    watch("./**/*.scss", task_sass);
    watch('./**/*.{php,html,js}').on('change',browserSync.reload);
}



exports.dev = dev;
