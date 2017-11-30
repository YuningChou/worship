var gulp = require('gulp');
var webserver = require('gulp-webserver');
gulp.task('webserver', function() {
gulp.src('./')
.pipe(webserver({
port:1234,
livereload: true,
directoryListing: false,
open: true,
fallback: 'index.php'
}));
});
gulp.task('default',['webserver']);