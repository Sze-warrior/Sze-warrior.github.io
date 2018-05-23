var gulp = require("gulp");
var sass = require("gulp-sass");
var postcss = require("gulp-postcss");
var autoprefixer = require("autoprefixer");

//Compile SASS and prefix for browser compatabilities. Used PostCSS to run all at once to make build go faster and help with management.
gulp.task("sass", function() {
	
	//The var postPlugins holds all plugins for postCSS
	var postPlugins = [
		autoprefixer({browsers: ["> 0%"]})	
	];

	return gulp.src("sass/*.scss")
	.pipe(sass())
	.pipe(postcss(postPlugins))
	.pipe(gulp.dest("css"));
});

gulp.task("default", ['sass']);