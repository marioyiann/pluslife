var gulp        = require('gulp');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;
var sass        = require('gulp-sass');
var sourcemaps  = require('gulp-sourcemaps');

function onError(err) {
  console.log(err);
  this.emit('end');
}

gulp.task('browser-sync', function() {
    var files = [
    './style.css',
    './**/*.php',
    './js/custom/*.js'
    ]; 

    browserSync.init(files, {
    proxy: "localhost/pluslife/",
    notify: false
    });
});

gulp.task('sass', function () {
  return gulp.src('sass/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
    .pipe(sourcemaps.write('./sass/map'))
    .pipe(gulp.dest('./'))
    .pipe(reload({stream:true}));
});

gulp.task('default', ['sass', 'browser-sync'], function () {
    gulp.watch("sass/**/*.scss", ['sass']);
});