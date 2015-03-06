'use strict';
module.exports = function (grunt) {

  grunt.initConfig({

    sass: {
      dist: {
        files: {
        'assets/css/vinnie.css': 'assets/sass/vinnie.scss'
        },
        options: {
          precision: 6,
          style: 'compressed'
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
      sass: {
        files: [
          'assets/sass/*.scss',
          'assets/sass/partials/**/*.scss'
        ],
        tasks: ['sass'],
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
  grunt.loadNpmTasks('grunt-contrib-sass');

  grunt.registerTask('default', [
    'sass',
    'uglify'
  ]);
  grunt.registerTask('dev', [
    'watch'
  ]);

};