angular.module("ccc").factory("constantService", constantService);

constantService.$inject = [];

function constantService() {
	var service = {
		appUrl: "//localhost:8888/cornerstone/",
		//appUrl: "//cornerstonebillings.org/",
	};

	return service;
}
