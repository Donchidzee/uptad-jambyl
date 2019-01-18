const gulp = require('gulp');
const sass = require('gulp-sass');
const rename = require('gulp-rename');

// Add watcher to scss files
gulp.task('default', function() {
    gulp.watch('assets/scss/**/*.scss', function() {
        return gulp.src('assets/scss/main.scss')
            .pipe(sass({outputStyle: 'compressed'}))
            .pipe(rename('main.min.css'))
            .pipe(gulp.dest('out'));
    });
});

gulp.task('scss', function() {
    return gulp.src('assets/scss/main.scss')
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(rename('main.min.css'))
        .pipe(gulp.dest('out'));
});