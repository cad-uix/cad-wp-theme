// Load plugins
var gulp = require('gulp'),
  plugins = require('gulp-load-plugins')({ camelize: true }),
  browserSync = require('browser-sync');

var handleErrors = function() {
  plugins.notify.onError({
  title: "Compile Error",
  message: "<%= error.message %>"
  }).apply(this, arguments);
  this.emit('end');
};

// Styles
gulp.task('styles', function() {
  return gulp.src('./dev/less/styles.less')
  .pipe(plugins.less())
  .pipe(plugins.plumber())
  .on( 'error', handleErrors )
  .pipe(plugins.minifyCss())
  .pipe(plugins.rename({ suffix: '.min' }))
  .pipe(gulp.dest('./css/'))
  .pipe(browserSync.reload({stream:true}))
  .pipe(plugins.notify({ message: 'Styles task complete' }));
});
 
// Vendor Plugin Scripts
gulp.task('plugins', function() {
  return gulp.src(['dev/js/plugins.js', 'dev/js/vendor/*.js'])
  .pipe(plugins.plumber())
  .pipe(plugins.uglify())
  .pipe(plugins.concat('plugins.js'))
  .pipe(plugins.rename({ suffix: '.min' }))
  .pipe(gulp.dest('js/'))
  .pipe(browserSync.reload({stream:true}));
});
 

// Site Scripts
gulp.task('scripts', function() {
  return gulp.src(['dev/js/*.js', '!dev/js/plugins.js' , 'dev/js/theme.js' ])
  .pipe(plugins.plumber())
  .pipe(plugins.jshint('.jshintrc'))
  .pipe(plugins.jshint.reporter('default'))
  .pipe(plugins.uglify())
  .pipe(plugins.concat('scripts.js'))
  .pipe(plugins.rename({ suffix: '.min' }))
  .pipe(gulp.dest('js/'))
  .pipe(browserSync.reload({stream:true}))
  .pipe(plugins.notify({ message: 'Scripts task complete' }));
});
 
// Images
gulp.task('images', function() {
  return gulp.src('img/**/*')
  .pipe(plugins.plumber())
  .pipe(plugins.cache(plugins.imagemin({ optimizationLevel: 7, progressive: true, interlaced: true })))
  .pipe(gulp.dest('img/'))
  .pipe(browserSync.reload({stream:true}))
  .pipe(plugins.notify({ message: 'Images task complete' }));
});

// Files
gulp.task('reload', function() {
    browserSync.reload();
});
 

gulp.task('browser-sync', function() {
    browserSync({
        proxy: "http://localhost/development/"
        // server: {
        //     baseDir: ""
        // }
    });
});

// Watch
gulp.task('watch', function() {
 
  // Watch .less files
  gulp.watch('dev/less/**/*.less', ['styles']);
 
  // Watch .js files
  gulp.watch('dev/js/**/*.js', ['plugins', 'scripts']);
 
  // Watch image files
  gulp.watch('assets/img/**/*', ['images']);

  // Watch files
  gulp.watch('**/*.php', ['reload']);
 
});

gulp.task('copy', function(){
  gulp.src('./bower_components/bootstrap/dist/fonts/**/*.*')
    .pipe(gulp.dest('./fonts'));
  gulp.src('./bower_components/bootstrap/dist/js/bootstrap.min.js')
    .pipe(gulp.dest('./dev/js/vendor'));
});

// Build task
gulp.task('build', ['copy', 'styles', 'plugins', 'scripts', 'images']);

// Default task
gulp.task('default', [ 'copy', 'styles', 'plugins', 'scripts', 'images', 'watch', 'browser-sync']);
