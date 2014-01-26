module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        
        // Home
        concat: {   
		    dist: {
		        src: [
		            '_/js/libs/*.js', // All JS in the libs folder
					'_/js/form.js',
					'_/js/retinize.js',
					'_/js/home.js'
		        ],
		        dest: '_/js/build/home.js',
		    }
		},
		
		uglify: {
		    build: {
		        src: '_/js/build/home.js',
		        dest: '_/js/build/home.min.js'
		    }
		},
		
		// Secondary Pages
		
		concat: {   
		    dist: {
		        src: [
		            '_/js/libs/*.js', // All JS in the libs folder
					'_/js/form.js',
					'_/js/retinize.js'
		        ],
		        dest: '_/js/build/secondary.js',
		    }
		},
		
		uglify: {
		    build: {
		        src: '_/js/build/secondary.js',
		        dest: '_/js/build/secondary.min.js'
		    }
		}
		
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['concat', 'uglify']);

};