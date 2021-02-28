angular.module('ccc')

.constant('_', window._)

.run(['$rootScope', function($rootScope) {
    $rootScope._ = window._;
}])