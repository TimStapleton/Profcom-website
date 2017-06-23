//Packages inclusion
const gulp       = require('gulp'),
      uglify     = require('gulp-uglify'),
      csso       = require('gulp-csso'),
      sass       = require('gulp-ruby-sass'),
      autoprefix = require('gulp-autoprefixer'),
      uncss      = require('gulp-uncss'),
      concat     = require('gulp-concat');


//Base scripts

//Html
gulp.task('html', function(){
  gulp.src('./*.html')
  .pipe(gulp.dest('./build/'));
});

//Images
gulp.task('images', function(){
  gulp.src('./images/*.*')
  .pipe(gulp.dest('./build/images/'));
});

//Scss
gulp.task('scss', function() {
  return sass('./scss/*.scss')
  .on('error', sass.logError)
  .pipe(autoprefix())
  .pipe(concat('app.css'))
  .pipe(gulp.dest('./css/'));
});

//Styles
gulp.task('styles', function(){
  gulp.src('./css/*.css')
  .pipe(csso())
  .pipe(concat('app.css'))
  .pipe(gulp.dest('./build/css/'));
});

//Scripts
gulp.task('scripts', function(){
  gulp.src('./js/*.js')
  .pipe(uglify())
  .pipe(concat('scripts.js'))
  .pipe(gulp.dest('./build/js/'));
});


//Scripts directly to use

//Watch
gulp.task('watch', function(){
  gulp.watch('./scss/app.scss', ['html', 'scss', 'styles', 'scripts']);
});

//Build
gulp.task('build', ['html', 'scss', 'styles', 'scripts', 'images']);

//Default
gulp.task('default', ['build', 'watch']);
