angular.module('ccc')
    .controller('theDailyController', ['$http', '$interval',
        function($http, $interval) {
            var vm = this;

            var d = new Date();
            var day = d.getDay()
            var hour = new Date().getHours();
            var checkIfLive = false;

            vm.isLoading = true;
            vm.isServiceLive = false;

            initial();

            function initial() {

                // 0 = Monday, 2 = Tuesday, etc. Sunday = 0
                //if (day == 7 && hour == 9) {
                // if (day == 0 && hour == 9 || day == 0 && hour == 10) {
                //    vm.today = "Checking for live";

                checkLive();
                var startInterval = $interval(checkLive, 60000)

                var stopInterval = function() {
                    $interval.cancel(startInterval)
                    vm.isLoading = false;
                }

                // } else {
                //     vm.today = "Not live";
                //     console.log(vm.today);
                // }

                function checkLive() {
                    //http://localhost:8888/cornerstone/wp-content/themes/cornerstone-community-church/live.php?live=true
                    //https://cornerstonebillings.org/wp-content/themes/CCC/live.php?live=true

                    var config = {
                        method: 'POST',
                        //url: '//cornerstonebillings.org/wp-content/themes/CCC/live.php',
                        url: '/get-live',
                    };

                    var request = $http(config);

                    request.then(function(response) {
                        checkIfLive = response.data;

                        if (checkIfLive == 'true') {
                            vm.isServiceLive = true;
                            stopInterval();
                        } else {
                            vm.isServiceLive = false;
                            vm.isLoading = false;
                        }
                    });
                }
            }


        }
    ]);