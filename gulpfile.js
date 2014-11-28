//npm install --save-dev browser-sync gulp gulp-concat gulp-uglify gulp-jshint gulp-less gulp-csscomb gulp-minify-css gulp-notify

var   gulp            = require('gulp'),
      concat          = require('gulp-concat'),
      uglify          = require('gulp-uglify'),
      jshint          = require('gulp-jshint'),
      less            = require('gulp-less'),
      csscomb         = require('gulp-csscomb'),
      minify          = require('gulp-minify-css'),
      notify          = require('gulp-notify'),
      browserSync     = require('browser-sync'),
      reload          = browserSync.reload;

var   virtualHost     = 'http://localhost/oracle';

var handleErrors = function() {
  notify.onError({
  title: "Compile Error",
  message: "<%= error.message %>"
  }).apply(this, arguments);
  this.emit('end');
};

gulp.task('styles', function () {
  gulp.src([
    "./dev/less/bootstrap.less"
    ])
    .pipe(less())
    .on('error', handleErrors)
    .pipe(csscomb())
    .pipe(minify())
    .pipe(gulp.dest('./css'));
});

gulp.task('scripts', function () {
  gulp.src(['./dev/js/*.js'])
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('./js'));
});

gulp.task('watch', function () {
  gulp.watch(['./dev/less/**/*.less'], ['styles']);
  gulp.watch(['./dev/js/**/*.js'], ['scripts']);
});

gulp.task('browser-sync', function () {
  var files = [
  './js/**/*.js', 
  './css/**/*.css', 
  './img/**/*.{png,jpg,jpeg,gif}', 
  './**/*.php'];

  browserSync.init(
    files, {
      proxy: virtualHost
    }
  );
});

gulp.task('bower-copy', function(){
  gulp.src('./bower_components/bootstrap/dist/fonts/**/*.*')
  .pipe(gulp.dest('./fonts'));
  gulp.src('./bower_components/bootstrap/dist/js/**/*.*')
  .pipe(gulp.dest('./js'));
});

gulp.task('default', [
    'bower-copy', 
    'styles', 
    'scripts', 
    'browser-sync', 
    'watch'
]);