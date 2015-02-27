//npm install --save-dev browser-sync gulp gulp-concat gulp-uglify gulp-jshint gulp-less less-plugin-clean-css gulp-notify

var   gulp               = require('gulp'),
      concat             = require('gulp-concat'),
      uglify             = require('gulp-uglify'),
      jshint             = require('gulp-jshint'),
      less               = require('gulp-less'),
      notify             = require('gulp-notify'),
      browserSync        = require('browser-sync'),
      LessPluginCleanCSS = require('less-plugin-clean-css'),
      cleancss           =  new LessPluginCleanCSS({ advanced: true });

var   virtualHost     = 'virtual_host_here';

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
    .pipe(less({
      plugins: [cleancss]
    }))
    .on('error', handleErrors)
    .pipe(gulp.dest('./css'))
    .pipe(browserSync.reload({stream:true}));
});

gulp.task('scripts', function () {
  gulp.src(['./dev/js/*.js'])
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(uglify())
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('./js'))
    .pipe(browserSync.reload({stream:true}));
});

// Reload all Browsers
gulp.task('bs-reload', function () {
    browserSync.reload();
});

gulp.task('watch', function () {
  gulp.watch(['./dev/less/**/*.less'], ['styles']);
  gulp.watch(['./dev/js/**/*.js'], ['scripts']);
  gulp.watch(['./**/*.php'], [ 'bs-reload']);
});

gulp.task('browser-sync', function () {
  browserSync({
        proxy: virtualHost
    });
});

gulp.task('bower-copy', function(){
  gulp.src('./bower_components/bootstrap/dist/fonts/**/*.*')
  .pipe(gulp.dest('./fonts'));
  gulp.src('./bower_components/bootstrap/dist/js/**/*.*')
  .pipe(gulp.dest('./js'));
  gulp.src('./bower_components/jquery-prettyPhoto/**/*.*')
  .pipe(gulp.dest('./vendor/jquery-prettyPhoto'));
});

gulp.task('default', [
    'bower-copy', 
    'styles', 
    'scripts', 
    'browser-sync', 
    'watch'
]);
