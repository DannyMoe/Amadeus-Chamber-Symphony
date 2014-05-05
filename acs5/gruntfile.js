module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		concat: {
			js: {
				src: [
					'assets/js/jquery-ui.custom.min.js',
					'assets/js/fullcalendar.js',
					'assets/js/calendar.js',
					'assets/js/base.js'
				],
				dest: 'assets/js/member.js'
			},
			css: {
				src: [
					'assets/css/normalize.css',
					'assets/css/style.css'
				],
				dest: 'assets/css/production.css'
			}
		},

		uglify: {
			js: {
				src: 'assets/js/production.js',
				dest: 'assets/js/production.min.js'
			}
		},

		cssmin: {
			css: {
				src: 'assets/css/production.css',
				dest: 'assets/css/production.min.css'
			}
		},

		watch: {
			css: {
				files: ['assets/css/*.css'],
				tasks: ['concat', 'cssmin'],
				options: {
					spawn: false,
					livereload: true
				},
			},
			js: {
				files: ['assets/js/*.js'],
				tasks: ['concat', 'uglify'],
				options: {spawn: false},
			}
		}

	});

	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default', ['concat', 'uglify', 'cssmin', 'watch']);
};