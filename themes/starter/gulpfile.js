// Require gulp packages
var gulp = require('gulp');
var sass = require('gulp-sass');
var js = require('gulp-uglify');
var livereload = require('gulp-livereload');

// Compile and minify Sass
gulp.task('sass', function () {
  return gulp.src('./assets/sass/**/*.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('./assets/css'))
    .pipe(livereload());
});

// Minify JS
gulp.task('js', function () {
  return gulp.src('./assets/js/*.js')
    .pipe(js())
    .pipe(gulp.dest('./assets/js/min'))
    .pipe(livereload());
});

// // Set up Watchers
gulp.task('watch', function() {
  livereload.listen();
  gulp.watch('./assets/sass/**/*.scss', ['sass']);
  gulp.watch('./assets/js/*.js', ['js']);
  gulp.watch('./*.php', livereload.reload);
});

// Default Gulp tasks
gulp.task('default', ['sass', 'js', 'watch']);