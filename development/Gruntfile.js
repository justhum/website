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
        },
        
        s3: {
            options: {
                key: 'AKIAJF6IWUYTMAGWSF4Q',
                secret: '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',
                bucket: 'justhum.com',
                access: 'public-read',
                headers: {
                    "Cache-Control": "max-age=630720000, public",
                    "Expires": new Date(Date.now() + 63072000000).toUTCString()
                    }
                },
        
            dev: {
                upload: [
                    {
                        src: '../production/_/css/*.css',
                        dest: 'css/',
                        options: { gzip: true }
                    },
                    
                    {
                        src: '../production/_/js/*.js',
                        dest: 'js/',
                        options: { gzip: true }
                    }
                ],
            }
        },
        
        ftp_push: {
            your_target: {
                options: {
                    username: "justhum",
                    password: "xB#)2uaRnKA;",
                    host: "ftp.justhum.com",
                    dest: "/public_html/",
                    port: 21
                },
            files: [
                {
                    expand: true,
                    cwd: '../production/',
                    src: [
                        '*.html',
                        'about/*.html',
                        'errors/*.html',
                        'blog/wp-content/themes/hum/**',
                        'linernotes/*.html',
                        'releases/*.html',
                        'support/*.html',
                        'terms/*.html'
                        ]
                    }
                ]
            }
        },
        
        cloudfront_clear: {
            invalidateIndex: {
                resourcePaths: [
                    '/css/main.min.css',
                    '/css/secondary.min.css',
                    '/css/tertiary.min.css',
                    '/js/main.min.js',
                    '/js/secondary.min.js'
                ],
                secret_key: "S3NXysLAIZ55/Olmjt+hwc6g5dGF4FcF5/oAh8JO",
                access_key: "AKIAJF6IWUYTMAGWSF4Q",
                dist: "E2MBWZMEY1I71H"
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-string-replace');
    grunt.loadNpmTasks('grunt-s3');
    grunt.loadNpmTasks('grunt-cloudfront-clear');
    grunt.loadNpmTasks('grunt-ftp-push');
    
    grunt.registerTask('build', ['string-replace','concat', 'uglify', 'cssmin']);
    grunt.registerTask('deploy', ['ftp_push', 's3', 'cloudfront_clear']);
    grunt.registerTask('deploy-html', ['ftp_push']);
};