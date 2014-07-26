'use strict';
module.exports = function (grunt) {

  grunt.initConfig({
    compass: {
      dist: {
        options: {
          sassDir: 'assets/sass',
          cssDir: 'assets/css',
          outputStyle: 'expanded'
        }
      }
    },
    uglify: {
      dist: {
        files: {
          'assets/js/scripts.min.js': [
            'assets/js/plugins.js',
            'assets/js/custom.js'
          ]
        }
      }
    },
    watch: {
      compass: {
        files: [
          'assets/sass/*.scss',
          'assets/sass/partials/**/*.scss'
        ],
        tasks: ['compass'],
        options: {
          livereload: true
        }
      },
      js: {
        files: [
          'assets/js/custom.js',
          'assets/js/plugins.js',
          'assets/js/vendor/**/*.js',
        ],
        tasks: ['uglify']
      },
      markup: {
        files: [
          '**/*.php'
        ],
        options: {
          livereload: true
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compass');

  grunt.registerTask('default', [
    'compass',
    'uglify'
  ]);
  grunt.registerTask('dev', [
    'watch'
  ]);

};