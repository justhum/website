module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        clean: ["build"],

        copy: {
          build: {
            files: [{
              expand: true,
              cwd: 'src',
              src: '**',
              dest: 'build/',
              flatten: false,
              dot: true
            }]
          }
        },

        cssmin: {
          build: {
            files: [{
              expand: true,
              cwd: 'build/_/css',
              src: ['*.css', '!*.min.css'],
              dest: 'build/_/css',
              ext: '.css'
            }]
          },
        },

        uglify: {
          options: {
            mangle: true
          },
          build: {
            files: {
              'build/_/js/main.js':'src/_/js/main.js'
            }
          },
        },

        watch: {
          build: {
            files: ['src/**/*'],
            tasks: ['build']
          },
        },

        rsync: {
          options: {
            args: ["--verbose"],
            exclude: [".DS_Store"],
            recursive: true
          },
          production: {
            options: {
              src: "build/",
              dest: "/srv/users/serverpilot/apps/justhum/public",
              host: "serverpilot@45.55.179.159",
              delete: false
            }
          }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-rsync');

    grunt.registerTask('default', ['build']);
    grunt.registerTask('build', ['clean', 'copy', 'cssmin', 'uglify']);
    grunt.registerTask('deploy', ['build', 'rsync']);
};
