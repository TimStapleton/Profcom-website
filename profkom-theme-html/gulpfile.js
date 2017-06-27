//Packages inclusion
const gulp       = require('gulp'),
      uglify     = require('gulp-uglify'),
      csso       = require('gulp-csso'),
      sass       = require('gulp-ruby-sass'),
      autoprefix = require('gulp-autoprefixer'),
      uncss      = require('gulp-uncss'),
      concat     = require('gulp-concat'),
      notify     = require('gulp-notify'),
      connect    = require('gulp-connect');


//Base scripts

//Html
gulp.task('html', function(){
  gulp.src('./*.html')
  .pipe(gulp.dest('./build/'))
  .pipe(connect.reload());
  //.pipe(notify('Done transferring HTML to build!'));
});

//Images
gulp.task('images', function(){
  gulp.src('./images/*.*')
  .pipe(gulp.dest('./build/images/'))
  .pipe(connect.reload());
  //.pipe(notify('Done transferring images to build!'));
});

//Scss
gulp.task('scss', function() {
  return sass('./scss/*.scss')
  .on('error', sass.logError)
  .pipe(autoprefix('last 3 versions', '>1%'))
  .pipe(concat('app.css'))
  .pipe(gulp.dest('./css/'));
  //.pipe(notify('Done compiling SCSS!'));
});

//Styles
gulp.task('styles', ['scss'],function(){
  gulp.src('./css/*.css')
  .pipe(csso())
  .pipe(concat('app.css'))
  .pipe(uncss({
    html: ['./*.html'],
    ignore: [/is-visible/, /is-expanded/]
  }))
  .pipe(gulp.dest('./build/css/'))
  .pipe(connect.reload());
  //.pipe(notify('Done transferring CSS to build!'));
});

//Scripts
gulp.task('scripts', function(){
  gulp.src('./js/*.js')
  .pipe(uglify())
  .pipe(concat('scripts.js'))
  .pipe(gulp.dest('./build/js/'))
  .pipe(connect.reload());
  //.pipe(notify('Done uglifying & transferring JS to build!'));
});

// Start server
gulp.task('connect', function() {
  connect.server({
    root: './build/',
    livereload: true
  });
});

//Scripts directly to use


//Watch
gulp.task('watch', ['build'], function(){
  gulp.watch('./scss/*.scss', ['scss']);
  gulp.watch('./css/*.css', ['styles']);
  gulp.watch('./js/*.js', ['scripts']);
  gulp.watch('./*.html', ['html']);
  gulp.watch('./images/*.*', ['images']);
});

//Build
gulp.task('build', ['html', 'scss', 'styles', 'scripts', 'images']);

//Default
gulp.task('default', ['connect', 'build', 'watch']);
