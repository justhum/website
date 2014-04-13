module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        
        'string-replace': {
            dist: {
                files: {
                    '../production/': [
                        '*.html',
                        'about/*.html',
                        'errors/*.html',
                        'blog/wp-content/themes/hum/header.php',
                        'blog/wp-content/themes/hum/footer.php',
                        'linernotes/*.html',
                        'releases/*.html',
                        'support/*.html',
                        'terms/*.html'
                    ]
                },
                options: {
                    replacements: [{
                        pattern: /(\/_\/css\/main.css)+/g,
                        replacement: '/_/css/main.min.css'
                    },{
                        pattern: /(\/_\/css\/secondary.css)+/g,
                        replacement: '/_/css/secondary.min.css'
                    },{
                        pattern: /(\/_\/css\/tertiary.css)+/g,
                        replacement: '/_/css/tertiary.min.css'
                    },{
                        pattern: /(\/_\/js\/main.js)+/g,
                        replacement: '/_/js/main.min.js'
                    },{
                        pattern: /(\/_\/js\/secondary.js)+/g,
                        replacement: '/_/js/secondary.min.js'
                    },{
                        pattern: /(\/_\/)+/g,
                        replacement: 'http://cdn.justhum.com/'
                    }]
                }
            },
        },
        
        concat: {
            basic: {
                src: [
                    '_/js/libs/jquery.ajaxchimp.min.js',
                    '_/js/libs/fastclick.js',
                    '_/js/fastclick.js',
                    '_/js/form.js',
                    '_/js/sub.js'
                ],
                dest: '_/js/secondary.js',
            },
            extras: {
                src: [
                    '_/js/libs/*.js', // All JS in the libs folder
                    '_/js/fastclick.js',
                    '_/js/form.js',
                    '_/js/home.js'
                ],
                dest: '_/js/main.js',
            },
        },
        
        uglify: {
            build: {
                files: {
                    '../production/_/js/secondary.min.js': ['_/js/secondary.js'],
                    '../production/_/js/main.min.js': ['_/js/main.js']
                }
            },
        },
        
        cssmin: {
            build: {
                files: {
                    '../production/_/css/main.min.css': ['_/css/main.css'],
                    '../production/_/css/secondary.min.css': ['_/css/secondary.css'],
                    '../production/_/css/tertiary.min.css': ['_/css/tertiary.css']
                }    
            },
        }
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-string-replace');
    
    grunt.registerTask('deploy', ['string-replace','concat', 'uglify', 'cssmin']);
};