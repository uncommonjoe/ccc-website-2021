(function () {
	"use strict";

	angular.module("ccc").directive("liveService", liveService);

	liveService.$inject = ["$http", "$rootScope", "constantService"];

	function liveService() {
		var directive = {
			restrict: "A",
			controller: function ($http, $rootScope, constantService) {
				//http://localhost:8888/cornerstone/wp-content/themes/cornerstone-community-church/live.php?live=true
				//https://cornerstonebillings.org/wp-content/themes/CCC/live.php?live=true

				var d = new Date();
				var today = d.getDay();
				var hour = new Date().getHours();

				// console.log("today " + today);
				// console.log("this hour " + hour + "\n");

				if (today == 7) {
					$rootScope.today = "Checking for live";
				}

				$rootScope.nextSunday = setDay(d, 7);

				var checkIfLive = false;
				var config = {
					method: "POST",
					url: constantService.appUrl + "get-live",
				};

				var request = $http(config);

				request.then(function (response) {
					checkIfLive = response.data;

					if (checkIfLive == "true") {
						$rootScope.isServiceLive = true;
						$rootScope.isLoading = false;
						//stopInterval();
					} else {
						$rootScope.isServiceLive = false;
						$rootScope.isLoading = false;
					}
				});

				function setDay(d, day) {
					var c_day = d.getDay();
					d.setDate(d.getDate() - c_day + day);
					return d;
				}
			},
		};

		return directive;
	}
})();
