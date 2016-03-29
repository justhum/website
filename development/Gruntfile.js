module.exports = function(grunt) {

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
                        replacement: '//d3st4vfgl01ske.cloudfront.net/'
                    }]
                }
            },
        },

        concat: {
            basic: {
                src: [
                    '_/js/libs/*.js', // All JS in the libs folder
                    '_/js/libs/fastclick.js',
                    '_/js/fastclick.js',
                    '_/js/video.js',
                    '_/js/form.js',
                    '_/js/sub.js'
                ],
                dest: '_/js/secondary.js',
            },
            extras: {
                src: [
                    '_/js/libs/*.js', // All JS in the libs folder
                    '_/js/fastclick.js',
                    '_/js/video.js',
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

        aws_s3: {
          options: {
            accessKeyId: 'AKIAJF6IWUYTMAGWSF4Q',
            secretAccessKey: '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'
          },
          production: {
            options: {
              bucket: 'justhum.com',
              // params: { Punt on this for now
              //   ContentEncoding: 'gzip'
              // }
            },
            files: [
              {expand: true, cwd: '../production/_/css', src: ['**'], dest: 'css/'},
              {expand: true, cwd: '../production/_/js', src: ['**'], dest: 'js/'},
            ]
          }
        },

        rsync: {
          options: {
              args: ["--verbose"],
              exclude: [".DS_Store", "_/"],
              recursive: true
          },
          production: {
              options: {
                  src: "../production/",
                  dest: "/srv/users/serverpilot/apps/justhum/public",
                  host: "serverpilot@45.55.179.159",
                  delete: false
              }
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
    grunt.loadNpmTasks('grunt-aws-s3');
    grunt.loadNpmTasks('grunt-cloudfront-clear');
    grunt.loadNpmTasks('grunt-rsync');

    grunt.registerTask('build', ['string-replace','concat', 'uglify', 'cssmin']);
    grunt.registerTask('deploy', ['rsync:production', 'aws_s3:production', 'cloudfront_clear']);
    grunt.registerTask('deploy-html', ['rsync:production']);
    grunt.registerTask('deploy-s3', ['aws_s3:production', 'cloudfront_clear']);
};
