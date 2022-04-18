(function () {
	'use strict';

	angular.module('ccc').directive('liveService', liveService);

	liveService.$inject = ['$http', '$rootScope', 'constantService'];

	function liveService() {
		var directive = {
			restrict: 'A',
			controller: function ($http, $rootScope, constantService) {
				//http://localhost:8888/cornerstone/wp-content/themes/cornerstone-community-church/live.php?live=true

				var d = new Date();
				var today = d.getDay();

				if (today == 7) {
					$rootScope.today = 'Checking for live';
				}

				$rootScope.nextSunday = setDay(d, 7);

				var checkIfLive = 0;
				var config = {
					method: 'POST',
					url: constantService.appUrl + 'get-live',
				};

				var request = $http(config);

				request.then(function (response) {
					checkIfLive = response.data;

					if (checkIfLive == 1) {
						// 1 === live, 0 === not live
						$rootScope.isServiceLive = true;
						$rootScope.isLoading = false;
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
