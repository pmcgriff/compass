// https://github.com/jscs-dev/grunt-jscs
module.exports = {
	options: {
		config: '.jscsrc'
	},
	assets: {
		files: {
			src: [
				'<%= paths.authorAssets %>js/{,*/}*.js'
			]
		}
	},
	grunt: {
		options: {
			// We have no control over task names that use underscores
			requireCamelCaseOrUpperCaseIdentifiers: 'ignoreProperties'
		},
		files: {
			src: [
				'<%= files.config %>'
			]
		}
	}
};
