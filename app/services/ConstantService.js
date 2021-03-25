angular.module("ccc").factory("constantService", constantService);

constantService.$inject = [];

function constantService() {
	var service = {
		appUrl: "//localhost:8888/cornerstone/",
		themeUrl:
			"//localhost:8888/cornerstone/wp-content/themes/ccc-website-2021/",
		//appUrl: "//cornerstonebillings.org/",
	};

	return service;
}
