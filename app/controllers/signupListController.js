angular.module('ccc')
    .controller('signupListController', ['$http', '_',
        function($http, _) {
            var vm = this;
            var url = '/';
            //var url = '/cornerstone/';

            vm.isLoading = true;
            vm.deleteSignup = deleteSignup;
            vm.expireList = expireList;
            vm.sort = sort;

            vm.filter = 'all';

            initial();

            function initial() {
                vm.isLoading = true;
                var config = {
                    method: 'POST',
                    url: url + 'attendees-get',
                };

                var request = $http(config);
                request.then(function(response) {
                    vm.attendees = response.data;
                    vm.isLoading = false;
                });
            }

            function deleteSignup(id) {
                vm.isLoading = true;

                var config = {
                    method: 'POST',
                    url: url + 'attendees-delete',
                    data: id,
                };

                var request = $http(config);
                request.then(function(response) {
                    vm.deleted = response.data;

                    initial();
                    vm.isLoading = false;
                });
            }

            function expireList() {
                vm.isLoading = true;

                var config = {
                    method: 'POST',
                    url: url + 'attendees-delete',
                    data: 'expire',
                };

                var request = $http(config);
                request.then(function(response) {
                    vm.expired = response.data;

                    initial();
                    vm.isLoading = false;
                });
            }

            function sort(type) {
                vm.filter = type;

                if (type == 'all') {
                    vm.isLoading = true;

                    initial();
                } else {
                    vm.attendees = _.filter(vm.attendees, function(o) {
                        return o.kindergarden == 1;
                    });
                }
            }
        }
    ])