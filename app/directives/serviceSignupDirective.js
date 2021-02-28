angular.module('ccc')
    .directive('serviceSignup', ['$http', '$location', '$anchorScroll',
        function($http, $location, $anchorScroll) {
            return {
                restrict: 'E',
                templateUrl: '../wp-content/themes/CCC/app/directives/serviceSignupDirective.html',
                //templateUrl: '../wp-content/themes/cornerstone-community-church/app/directives/serviceSignupDirective.html',
                controller: ['$scope', function($scope) {

                    var url = '/';
                    //var url = '/cornerstone/';

                    // Times are set in attendees-set.php as well
                    $scope.firstServiceValue = "8:30 AM";
                    $scope.secondServiceValue = "10:30 AM";
                    $scope.firstServiceOverflowValue = $scope.firstServiceValue + " Overflow";
                    $scope.secondServiceOverflowValue = $scope.secondServiceValue + " Overflow";

                    $scope.firstServiceAttendees;
                    $scope.secondServiceAttendees;
                    $scope.firstServiceOverflowAttendees;
                    $scope.secondServiceOverflowAttendees;

                    $scope.maxAttendance = 90;
                    $scope.attendanceWarning = $scope.maxAttendance - 15;
                    $scope.overflowMaxAttendance = 45;
                    $scope.overflowAttendanceWarning = $scope.overflowMaxAttendance - 15;

                    $scope.confirmed = false;
                    $scope.isLoading = true;

                    $scope.signup = {
                        people: 1
                    }

                    $scope.submit = submit;
                    $scope.updateMaxValue = updateMaxValue;

                    initial();

                    function initial() {
                        // Checking database for Sunday signups
                        var config = {
                            method: 'POST',
                            url: url + 'attendees-get',
                            data: '',
                        };

                        var request = $http(config);

                        request.then(function(response) {
                            $scope.attendees = response.data;

                            updateVariables();
                            $scope.isLoading = false;
                        });
                        updateMaxValue();
                    }

                    function updateMaxValue() {
                        switch ($scope.signup.time) {
                            case $scope.firstServiceValue:
                                if ($scope.firstServiceAttendees >= $scope.attendanceWarning) {
                                    $scope.maxLength = $scope.mostFull();
                                } else {
                                    $scope.maxLength = 15;
                                }
                                break;

                            case $scope.secondServiceValue:
                                if ($scope.secondServiceAttendees >= $scope.attendanceWarning) {
                                    $scope.maxLength = $scope.mostFull();
                                } else {
                                    $scope.maxLength = 15;
                                }
                                break;

                            case $scope.firstServiceOverflowValue:
                                if ($scope.firstServiceOverflowAttendees >= $scope.overflowAttendanceWarning) {
                                    $scope.maxLength = $scope.mostOverflowFull();
                                } else {
                                    $scope.maxLength = 15;
                                }
                                break;

                            case $scope.secondServiceOverflowValue:
                                if ($scope.secondServiceOverflowAttendees >= $scope.overflowAttendanceWarning) {
                                    $scope.maxLength = $scope.mostOverflowFull();
                                } else {
                                    $scope.maxLength = 15;
                                }
                                break;

                            default:
                                $scope.maxLength = 15;
                        }
                    }

                    function submit() {
                        $scope.isLoading = true;

                        // Submit signup to database
                        var config = {
                            method: 'POST',
                            url: url + 'attendees-set',
                            data: $scope.signup,
                        };

                        var request = $http(config);

                        request.then(function(response) {
                            $scope.attendees = response.data;

                            updateVariables();

                            $scope.confirmed = true;
                            $scope.isLoading = false;
                            $location.hash('serviceSignup');
                            $anchorScroll();
                        });
                    }

                    function updateVariables() {
                        $scope.sunday = $scope.attendees[0].sunday;

                        // Set first service attendee value and how many are left
                        $scope.firstServiceAttendees = $scope.attendees[0].sumFirstService;
                        $scope.firstServiceLeft = $scope.maxAttendance - $scope.firstServiceAttendees;

                        // Set second service attendee value and how many are left
                        $scope.secondServiceAttendees = $scope.attendees[0].sumSecondService;
                        $scope.secondServiceLeft = $scope.maxAttendance - $scope.secondServiceAttendees;

                        // Set first service OVERFLOW attendee value and how many are left
                        $scope.firstServiceOverflowAttendees = $scope.attendees[0].sumFirstServiceOverflow;
                        $scope.firstServiceOverflowLeft = $scope.overflowMaxAttendance - $scope.firstServiceOverflowAttendees;

                        // Set second service OVERFLOW attendee value and how many are left
                        $scope.secondServiceOverflowAttendees = $scope.attendees[0].sumSecondServiceOverflow;
                        $scope.secondServiceOverflowLeft = $scope.overflowMaxAttendance - $scope.secondServiceOverflowAttendees;


                        $scope.servicesAreFull = $scope.firstServiceAttendees >= $scope.maxAttendance && $scope.secondServiceAttendees >= $scope.maxAttendance;
                        $scope.overflowIsFull = $scope.firstServiceOverflowAttendees >= $scope.overflowMaxAttendance && $scope.secondServiceOverflowAttendees >= $scope.overflowMaxAttendance;

                        $scope.mostFull = function() {
                            if ($scope.firstServiceLeft == 0 || $scope.secondServiceLeft == 0) {
                                return (Math.max($scope.firstServiceLeft, $scope.secondServiceLeft));
                            } else {
                                return (Math.min($scope.firstServiceLeft, $scope.secondServiceLeft));
                            }
                        }
                        $scope.mostOverflowFull = function() {
                            if ($scope.firstServiceOverflowLeft == 0 || $scope.secondServiceOverflowLeft == 0) {
                                return (Math.max($scope.firstServiceOverflowLeft, $scope.secondServiceOverflowLeft));
                            } else {
                                return (Math.min($scope.firstServiceOverflowLeft, $scope.secondServiceOverflowLeft));
                            }
                        }
                    }
                }]
            };
        }
    ]);