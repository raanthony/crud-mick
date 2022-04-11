var gulp = require("gulp");
const concat = require('gulp-concat');

// Specific Task
function js() {
    return gulp
        .src([
            'bower_components/jquery/dist/jquery.min.js',
            'bower_components/bootstrap/dist/js/bootstrap.bundle.min.js'
        ])
        .pipe(concat('all.js'))
        .pipe(gulp.dest('public/js'))

}

// Specific Task
function css() {
    return gulp
        .src([
            'bower_components/bootstrap/dist/css/bootstrap.min.css',
            'bower_components/Font-Awesome/css/all.min.css'
        ])
        .pipe(concat('all.css'))
        .pipe(gulp.dest('public/css'))

}

function copy(){
    return gulp
        .src([
            'bower_components/Font-Awesome/js-packages/@fortawesome/fontawesome-free/webfonts/*',
        ])
        .pipe(gulp.dest('public/webfonts'))
}

gulp.task(js);
gulp.task(css);
gulp.task(copy);
