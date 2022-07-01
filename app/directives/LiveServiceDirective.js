(function () {
	'use strict';

	angular.module('ccc').directive('liveService', liveService);

	liveService.$inject = ['$http', '$rootScope', 'constantService'];

	function liveService() {
		var directive = {
			restrict: 'A',
			controller: function ($http, $rootScope, constantService) {
				//http://localhost:8888/cornerstone/wp-content/themes/cornerstone-community-church/live.php?live=true

				var isLive = 0;
				var d = new Date();
				var today = d.getDay();

				activate();

				function activate() {
					getLive();
					setDate();
				}

				function setDate() {
					if (today == 7) {
						$rootScope.today = 'Checking for live';
					}

					$rootScope.nextSunday = setDay(d, 7);
				}

				function setDay(d, day) {
					var c_day = d.getDay();
					d.setDate(d.getDate() - c_day + day);
					return d;
				}

				function getLive() {
					var config = {
						method: 'POST',
						url: constantService.appUrl + 'get-live',
					};

					var request = $http(config);

					request.then(function (response) {
						isLive = response.data;

						if (isLive == 1) {
							// 1 === live, 0 === not live
							$rootScope.isServiceLive = true;
							$rootScope.isLoading = false;
						} else {
							$rootScope.isServiceLive = false;
							$rootScope.isLoading = false;
						}
					});
				}
			},
		};

		return directive;
	}
})();
