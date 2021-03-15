// put this in html file
// data-ng-controller="LiveController as vm"

(function () {
	"use strict";

	angular.module("ccc").controller("LiveController", LiveController);

	//LiveController.$inject = [""];

	function LiveController() {
		var vm = this;
	}
})();
