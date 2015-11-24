module.exports = function (grunt) {
	
grunt.initConfig({  
 
	csso: {
	  compress: {
		options: {
		  report: 'gzip'
		},
		files: {
		  'prod/css/style.min.css': ['libs/bootstrap-material-design/dist/css/ripples.css', 'dev/css/style.css'],
		  'dev/css/meta.min.css': ['dev/css/meta.css']
		}
	  }
	},

	autoprefixer: {
		dist: {
			files:{'prod/css/style.min.css':'prod/css/style.min.css','dev/css/meta.min.css':'dev/css/meta.min.css'}
		}  
	},

	jshint: {
		options: {jshintrc: true},
		all: 'dev/js/common.js'
	},

	uglify: {
	  my_target: {
		files: {
			'prod/js/scripts.min.js': [
				'dev/libs/jquery/dist/jquery.min.js',
				'dev/libs/bootstrap-sass/assets/javascripts/bootstrap.js',
				'dev/js/jquery.mobile.custom.min.js',
				'dev/libs/fancybox/source/jquery.fancybox.pack.js',
				'dev/libs/fancybox/source/helpers/jquery.fancybox-thumbs.js',
				'dev/js/blocksit.min.js',
				'dev/js/main.js',
				'dev/js/callback.js',
				'dev/js/jquery.maskedinput.min.js',
				'dev/js/jquery.stickyheader.js',
				'dev/js/jquery.ba-throttle-debounce.min.js',
				'dev/js/common.js'
			]
		}
	  }
	},

	fixmyjs: {
		options: {
		  config: 'dev/.jshintrc', 
		  indentpref: 'spaces'
		},
		test: {
		  files: [
			{src: ['dev/js/common.js'], dest: 'dev/js/common.js', ext: '.js'}
		  ]
		}
	},

	copy: {
		main: {files: [{expand: true, cwd: 'dev/', src: ['**/*.php', '.htaccess', '**/.htaccess','robots.txt','sitemap.xml','*.ico','*.svg','!meta.php','!script.php'], dest: 'prod/'},
				{expand: true, cwd: 'dev/libs/font-awesome/fonts', src: ['**'], dest: 'prod/fonts'}]
		}
	},

	htmlmin: {
	  dist: {
		options: {
			removeComments: true,
			collapseWhitespace: true
		  },
		files: [{                                   
			expand: true,
			cwd: 'prod/',
			src: ['**/*.php', '*.php', '!config.php', '!tel.php', '!**/array.php', '!**/index.php', '!index.php','**/*.svg', '!email.php','!refer/*.php'],
			dest: 'prod/'     
		}]
	  }
	},

	watch: {
		html: {
			files: ['*.html','*/*.html', '!dist/*.html', '!release/*.html'],
			tasks: ['includereplace', 'processhtml']
		},
		css: {
			files: ['css/*.css'],
			tasks: ['cssmin']
		}
	},

	processhtml: {
	  dev:{
		options: {
			process: true,
		},
		files: [{
			expand: true,     
			cwd: 'dev/',   
			src: ['blocks/meta.php', 'blocks/script.php'],
			dest: 'prod/'  
		}]
	  }  
	},

	wiredep: {
	  task: {
		src: ['dev/blocks/meta.php'],
		options: {}
	  }
	},

	critical: {
		test: {
			options: {
				base: './',
				css: ['prod/css/style.min.css'],
				width: 1600,
				height: 1500
			},
			files: [{                                   
				expand: true,
				cwd: 'prod/',
				src: ['index.html'],
				dest: 'prod/'
			}]
		}
	},

	imagemin: {
		dynamic: {
		  files: [{
			expand: true,
			cwd: 'dev/',
			src: ['**/*.{png,jpg,gif,JPG}','!libs/*.{png,jpg,gif,JPG}'],
			dest: 'prod/'
		  }]
		}
	}
	

});

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-include-replace');
    grunt.loadNpmTasks('grunt-processhtml');
    
    grunt.loadNpmTasks('grunt-csso');
    grunt.loadNpmTasks('grunt-wiredep');
    grunt.loadNpmTasks('grunt-critical');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-fixmyjs');
    grunt.loadNpmTasks('grunt-uncss');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-csslint');
    
    grunt.registerTask('default', ['copy','processhtml', 'htmlmin']);
    grunt.registerTask('all', ['csso', 'autoprefixer','uglify','copy', 'processhtml', 'htmlmin']);
    grunt.registerTask('css', ['csso', 'autoprefixer']);
	grunt.registerTask('js', ['uglify']);
	grunt.registerTask('php', ['copy', 'processhtml', 'htmlmin']);
    grunt.registerTask('img', ['imagemin']);
	  
};