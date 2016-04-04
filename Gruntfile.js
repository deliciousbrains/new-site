module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		uglify: {
			options: {
				mangle: false
			},
			my_target: {
				files: {
					'assets/js/main.min.js': ['assets/js/main.js'],
					'assets/js/plugins.min.js': ['assets/js/plugins.js']
				}
			}
		},
		compress: {
		  main: {
		    options: {
		      mode: 'gzip'
		    },
		    files: [
		      {expand: true, src: ['assets/js/main.min.js','assets/js/plugins.min.js'], dest: 'assets/js/', ext: '.gz.js'}
		    ]
		  }
		},
		svgmin: {
			options: {
				plugins: [
					{ removeViewBox: false },
					{ removeUselessStrokeAndFill: true },
					{ removeEmptyAttrs: false },
					{ removeUnknownsAndDefaults: false },
					{ cleanupIDs: false },
					{ removeUselessStrokeAndFill: true }
				]
			},
			dist: {
				expand: true,
				cwd: 'assets/svg',
				src: ['*.svg'],
				dest: 'assets/svg/o'
			}
		},
		svgstore: {
			options: {
				prefix : 'icon-', // This will prefix each ID
				svg: {
					//viewBox : '0 0 100 100',
					xmlns: 'http://www.w3.org/2000/svg',
					style: "display: none;"
				}
			},
			default: {
				files: {
					"parts/svg-defs.php": ["assets/svg/o/*.svg"]
				}
			},
		},
		sass: {
			dist: {
				options: {
					style: 'compressed',
					sourcemap: 'none'
				},
				files: {
					'assets/css/main.css': 'assets/scss/main.scss'
				}
			}
		},
		autoprefixer: {
			options: {
				// Task-specific options go here.
				browsers: ['last 2 version', 'safari 7', 'ie 9', 'opera 12.1', 'ios 7', 'android 4'],
				map: true
			},
			single_file: {
				// Target-specific file lists and/or options go here.
				src: 'assets/css/main.css',
				dest: 'assets/css/main.min.css'
			},
		},

		imagemin: {
      options: {
        optimizationLevel: 3,
        progressive: true
      },
	    dynamic: {
	      files: [{
	        expand: true,
	        cwd: 'assets/images',
	        src: ['**/*.{png,jpg,gif}'],
	        dest: 'assets/images'
	      }]
	    }
	  },

		watch: {
			options: {
				livereload: 1026,
			},
			css : {
				files: ['assets/scss/**/*'],
				tasks: 'css',
			},
			js : {
				files: ['assets/js/main.js','assets/js/plugins.js'],
				tasks: 'js',
			},
			images : {
				files: ['assets/images/*'],
				tasks: 'images',
			},
			svg : {
				files: ['assets/svg/*'],
				tasks: 'svg',
			},
			php : {
				files: ['**/*.php']
			}
		},

		browserSync: {
			dev: {
				bsFiles: {
				  src : [
				  	'assets/css/main.min.css',
				  	'assets/js/main.min.js',
				  	'assets/js/plugins.min.js',
				  	'**/*.php'
				  ]
				},
				options: {
				  proxy: "dbrains.dev",
				  watchTask: true
				}
			}
		},
	});


	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-svgmin');
	grunt.loadNpmTasks('grunt-svgstore');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-browser-sync');

	var browserSync = require("browser-sync");

	//grunt.registerTask('default', ['svgmin','svgstore','sass','autoprefixer','uglify']);

	grunt.registerTask('default', ['browserSync', 'watch']);

	grunt.registerTask('css', ['sass','autoprefixer']);
	grunt.registerTask('js', ['uglify']);
	grunt.registerTask('svg', ['svgmin','svgstore']);
	grunt.registerTask('images', ['imagemin']);
	grunt.registerTask('php', ['uglify']);



};
