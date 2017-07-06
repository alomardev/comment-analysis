    var gulp = require('gulp'),
     plumber = require('gulp-plumber'),
        sass = require('gulp-sass'),
autoprefixer = require('gulp-autoprefixer'),
     htmlmin = require('gulp-htmlmin'),
     cssnano = require('gulp-cssnano'),
          ts = require('gulp-typescript'),
      uglify = require('gulp-uglify'),
      rename = require('gulp-rename'),
 fileinclude = require('gulp-file-include'),
     connect = require('gulp-connect'),
    delEmpty = require('delete-empty'),
         del = require('del');

/* Scripts */
gulp.task('scripts', ['clean:scripts'], function() {
	return gulp.src('app/assets/scripts/main.ts')
	.pipe(plumber())
	.pipe(ts())
	.pipe(uglify())
	.pipe(rename('main.min.js'))
	.pipe(gulp.dest('dist/assets'))
	.pipe(connect.reload());
});

/* Styles */
gulp.task('styles', ['clean:styles'], function() {
	return gulp.src('app/assets/styles/main.{scss,sass}')
	.pipe(plumber())
	.pipe(sass())
	.pipe(autoprefixer())
	.pipe(cssnano())
	.pipe(rename('main.min.css'))
	.pipe(gulp.dest('dist/assets'))
	.pipe(connect.reload());
});

/* HTMLs */
gulp.task('htmls', ['clean:htmls'], function() {
	return gulp.src(['app/**/*.html', '!app/**/_*.html'])
	.pipe(plumber())
	.pipe(fileinclude(/* Default: {prefix: '@@', path: '@file'} */))
	.pipe(htmlmin({collapseWhitespace: true}))
	.pipe(gulp.dest('dist'))
	.pipe(connect.reload());
});

/* Copy images */
gulp.task('copy:images', ['clean:images'], function() {
	return gulp.src('app/assets/images/*.{png,gif,jpg,jpeg}')
	.pipe(gulp.dest('dist/assets/images'));
});

/* Copy raw files */
gulp.task('copy:raw', ['clean:raw'], function() {
	return gulp.src('app/raw/**/*')
	.pipe(gulp.dest('dist/raw'));
});

/* Server setup */
gulp.task('connect', function() {
	connect.server({
		root: './dist/',
		livereload: true
	});
});

/* Clean */
gulp.task('clean:scripts', function() {
	del.sync('dist/assets/main.min.js');
});

gulp.task('clean:styles', function() {
	del.sync('dist/assets/main.min.css');
});

gulp.task('clean:htmls', ['clean:empty'], function() {
	del.sync('dist/**/*.html');
});

gulp.task('clean:images', function() {
	del.sync('dist/assets/images/*.{png,gif,jpg,jpeg}');
});

gulp.task('clean:raw', function() {
	del.sync('dist/raw');
});

gulp.task('clean:empty', function() {
	delEmpty.sync('dist/');
});

gulp.task('clean', function() {
	del.sync('dist');
});

/* Build */
gulp.task('build', ['scripts', 'styles', 'htmls', 'copy:images', 'copy:raw']);

/* Watch */
gulp.task('watch', ['build'], function() {
	gulp.watch('app/assets/scripts/*.ts', ['scripts']);
	gulp.watch('app/assets/styles/*.{scss,sass}', ['styles']);
	gulp.watch('app/**/*.html', ['htmls']);
	gulp.watch('app/assets/images/*.{png,gif,jpg,jpeg}', ['copy:images']);
	gulp.watch('app/raw/**/*', ['copy:raw']);
});

/* Default */
gulp.task('default', ['connect', 'watch']);