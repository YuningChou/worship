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

gulpSass = require('gulp-sass');
gulpSass = require('gulp-sass'); // 載入 gulp-sass
gulp.task('styles', function () {
gulp.src('sass/style.sass') // 指定要處理的 Sass 檔案目錄
.pipe(gulpSass()) // 編譯 Sass
.pipe(gulp.dest('css')); // 指定編譯後的 css 檔案目錄
});