(function () {
	"use strict";

	angular.module("ccc").controller("ContactController", ContactController);

	ContactController.$inject = ["$http", "constantService"];

	function ContactController($http, constantService) {
		var vm = this;

		vm.wasMessageSent = false;
		vm.messageError = false;
		vm.submitForm = submitForm;

		function submitForm(form) {
			form.$submitted = true;

			var config = {
				method: "POST",
				url:
					constantService.themeUrl +
					"template-parts/components/contact-email/email-api.php",
				data: form,
			};

			var request = $http(config);
			request.then(
				function (response) {
					vm.response = response.data;
					vm.wasMessageSent = true;
				},
				function (error) {
					vm.response = error.data;
					vm.messageError = true;
				}
			);
		}
	}
})();
