'use strict';
module.exports = function(grunt) {

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
          // 'build/js/scripts.min.js': [
          //   'assets/js/_*.js'
          // ]
        },
        options: {
          // JS source map: to enable, uncomment the lines below and update sourceMappingURL based on your install
          // sourceMap: 'assets/js/scripts.min.js.map',
          // sourceMappingURL: '/app/themes/roots/assets/js/scripts.min.js.map'
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
          'assets/js/_*.js'
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
