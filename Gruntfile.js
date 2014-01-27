module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
		
		// Secondary Pages
		concat: {
			basic: {
				src: [
					'_/js/libs/jquery.ajaxchimp.min.js',
					'_/js/libs/jquery.retina.min.js',
					'_/js/retinize.js',
					'_/js/form.js'
				],
				dest: '_/js/production/secondary.js',
			},
			extras: {
				src: [
					'_/js/libs/*.js', // All JS in the libs folder
					'_/js/retinize.js',
					'_/js/form.js',
					'_/js/home.js'
				],
				dest: '_/js/production/home.js',
			},
		},
		
		uglify: {
		    build: {
		    	files: {
			    	'_/js/production/secondary.min.js': ['_/js/production/secondary.js'],
					'_/js/production/home.min.js': ['_/js/production/home.js']
		    	}
		    },
		},
		
		cssmin: {
			build: {
				files: {
					'_/css/main.min.css': ['_/css/main.css'],
					'_/css/secondary.min.css': ['_/css/secondary.css'],
					'_/css/tertiary.min.css': ['_/css/tertiary.css']
				}	
			},
		}
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['concat', 'uglify', 'cssmin']);
};