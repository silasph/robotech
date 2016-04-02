// Plugins
var
  gulp           	= require('gulp'),
  watch          	= require('gulp-watch'),
  sass           	= require('gulp-sass'),
  sourcemaps 		  = require('gulp-sourcemaps'),
  concat          = require('gulp-concat');

// Folders
var   
  projectName     = "robotech",

  sassFolder      = '_development/scss/**/',
  cssFolder       = 'assets/css/',
  jsFolder        = 'assets/js/',
  libFolder       = 'assets/lib/';

// SASS
gulp.task('sass', function () {
  gulp.src(sassFolder + '*.scss')
  	.pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
  	.pipe(sourcemaps.write())
    .pipe(gulp.dest(cssFolder));
});

// Browser sync
gulp.task('serve', ['sass'], function() {
  browserSync.init({
    proxy: "localhost/" + projectName
  });

  gulp.watch(sassFolder + "*.scss", ['sass']);
  gulp.watch(sassFolder + "*.scss").on('change', browserSync.reload);
  gulp.watch(["*.html"]).on('change', browserSync.reload);
});

// Concat
gulp.task('concat', function() {
  return gulp.src([
      libFolder + 'jquery/*.js',
      libFolder + 'smoothscroll/*.js',
      libFolder + 'bootstrap/js/*.js',
      libFolder + 'triangles/*.js',
      libFolder + 'owl-carousel/*.js'
      // libFolder + 'sweetalert/*.js',
    ])
    .pipe(concat('all.js'))
    .pipe(gulp.dest(jsFolder));
});

// WATCH
gulp.task('watch', function() {
   gulp.watch([sassFolder + '*.scss'], ['sass']);
});

gulp.task('default', function() {
   // default code
});
