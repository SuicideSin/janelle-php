module.exports = function(grunt)
{
	grunt.initConfig({
		exec: {
			build: "docker build -t systemdisc/my-first-php .",
			run_dev: "docker run -p 8080:80 -v `pwd`/src:/var/www/html php:5.6-apache",
			run: "docker run systemdisc/my-first-php"
		},
		watch: {
			files: ['src/**/*'],
			tasks: ['exec:build']
		}
	});

	grunt.loadNpmTasks('grunt-exec');

	grunt.registerTask('dev', ['exec:run_dev']);
	grunt.registerTask('start', ['exec:run']);

	grunt.registerTask('default', ['exec:build']);
};
