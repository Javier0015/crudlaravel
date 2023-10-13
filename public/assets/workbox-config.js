module.exports = {
	globDirectory: '.',
	globPatterns: [
		'**/*.{css,png,html,json}'
	],
	swDest: 'sw,js',
	ignoreURLParametersMatching: [
		/^utm_/,
		/^fbclid$/
	]
};