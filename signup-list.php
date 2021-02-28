<?php
/* Template Name: Signup List */

get_header();
?>

<div class="page-wrap" data-ng-controller="signupListController as vm">

	<div class="page-header">
        <div class="section-content">
            <h2>
                <?php the_title(); ?>
            </h2>
        </div>
    </div>

	<div class="page-content">
		<div class="container-fluid px-5 padding-lg-top padding-xxl-bottom">

			<div class="row">
				<div class="col-12 col-xl-9 offset-xl-1">
					<div class="row text-center mb-5">
						<div class="col-6 col-sm-3">
							<div>First Service</div>
							<div class="h2 font-800">{{vm.attendees[0].sumFirstService}}</div>
						</div>

						<div class="col-6 col-sm-3">
							<div>Second Service</div>
							<div class="h2 font-800">{{vm.attendees[0].sumSecondService}}</div>
						</div>
						
						<div class="col-6 col-sm-3">
							<div>First Overflow</div>
							<div class="h2 font-800">{{vm.attendees[0].sumFirstServiceOverflow}}</div>
						</div>

						<div class="col-6 col-sm-3">
							<div>Second Overflow</div>
							<div class="h2 font-800">{{vm.attendees[0].sumSecondServiceOverflow}}</div>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col-12">
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
								<label class="btn btn-warning btn-sm" ng-class="{'active' : vm.filter == 'all'}" ng-click="vm.sort('all')" ng-disabled="vm.isLoading">
									<input type="radio" name="options" id="option1" autocomplete="off" > Show All
								</label>
								<label class="btn btn-warning btn-sm" ng-class="{'active' : vm.filter == 'kindergarden'}" ng-click="vm.sort('kindergarden')" ng-disabled="vm.isLoading">
									<input type="radio" name="options" id="option2" autocomplete="off"> Children
								</label>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<table class="table responsive-table">
								<thead class="thead-dark">
									<tr>
										<th class="font-sm align-middle" scope="col">Name</th>
										<th class="font-sm align-middle" scope="col">Childrens Church</th>
										<th class="font-sm align-middle" scope="col">1st Service</th>
										<th class="font-sm align-middle" scope="col">2nd Service</th>
										<th class="font-sm align-middle" scope="col">1st Overflow</th>
										<th class="font-sm align-middle" scope="col">2nd Overflow</th>
										<th class="font-sm align-middle" scope="col"></th>
									</tr>
								</thead>

								<tbody class="table-striped">
									<tr ng-show="vm.attendees.length == 1">
										<td colspan="5">No attendees yet</td>
									</tr>

									<tr ng-repeat="attendee in vm.attendees" title="{{attendee.time}}"  ng-hide="attendee.id == 1">
										<td class="font-sm align-middle">
											<div>
												<a href="mailto:{{attendee.email}}">{{attendee.name}}</a>
											</div>
										</th>

										<td class="font-sm align-middle text-center">
											<div ng-show="attendee.kindergarden == 1">
												<span class="d-inline d-md-none">Childrens Church</span>

												<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="11.43" height="16" viewBox="0 0 20 28">
													<path d="M18.562 8.563l-4.562 4.562v12.875c0 0.969-0.781 1.75-1.75 1.75s-1.75-0.781-1.75-1.75v-6h-1v6c0 0.969-0.781 1.75-1.75 1.75s-1.75-0.781-1.75-1.75v-12.875l-4.562-4.562c-0.578-0.594-0.578-1.531 0-2.125 0.594-0.578 1.531-0.578 2.125 0l3.563 3.563h5.75l3.563-3.563c0.594-0.578 1.531-0.578 2.125 0 0.578 0.594 0.578 1.531 0 2.125zM13.5 6c0 1.937-1.563 3.5-3.5 3.5s-3.5-1.563-3.5-3.5 1.563-3.5 3.5-3.5 3.5 1.563 3.5 3.5z"></path>
												</svg>
											</div>
										</td>

										<td class="font-sm align-middle">
											<div ng-if="attendee.firstService != 0">
												<span class="d-inline d-md-none">1st Service</span>
												<span>{{attendee.firstService}}</span>
										</td>

										<td class="font-sm align-middle">
											<div ng-if="attendee.secondService != 0">
												<span class="d-inline d-md-none">2nd Service</span>
												<span>{{attendee.secondService}}</span>
											</div>
										</td>

										<td class="font-sm align-middle">
											<div ng-if="attendee.firstServiceOverflow != 0">
												<span class="d-inline d-md-none">1st Overflow</span>
												<span>{{attendee.firstServiceOverflow}}</span>
											</div>
										</td>

										<td class="font-sm align-middle">
											<div ng-if="attendee.secondServiceOverflow != 0">
												<span class="d-inline d-md-none">2nd Overflow</span>
												<span>{{attendee.secondServiceOverflow}}</span>
											</div>
										</td>

										<td class="font-sm align-middle d-table-cell d-md-none font-color-gray font-size-xs">
											{{attendee.time}}
										</td>

										<td class="text-right delete-button">
											<button type="button" class="btn btn-danger btn-sm font-sm px-4 py-2" ng-confirm-click="Delete is permanent and removes this entry completely and is irreversible. Are you sure you would like to delete this record?" confirmed-click="vm.deleteSignup(attendee.id)" ng-disabled="vm.isLoading">Delete</button>
										</td> 
									</tr>
								</tbody>

								<tfoot ng-hide="vm.attendees.length == 1">
									<tr>
									<td colspan="2" class="font-sm align-middle text-right font-800">Totals</td>
									<td class="font-sm align-middle font-800">{{vm.attendees[0].sumFirstService}}</td>
									<td class="font-sm align-middle font-800">{{vm.attendees[0].sumSecondService}}</td>
									<td class="font-sm align-middle font-800">{{vm.attendees[0].sumFirstServiceOverflow}}</td>
									<td class="font-sm align-middle font-800">{{vm.attendees[0].sumSecondServiceOverflow}}</td>
									<td></td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>

					<div class="row mt-5">
						<div class="col-12 font-size-xs">
							<button type="button" class="btn btn-danger" ng-confirm-click="Are you sure to expire all records?" confirmed-click="vm.expireList()" ng-disabled="vm.isLoading">Expire List</button>

							<p class="mt-3"><em>Expire list clears this list and is to be used<br />to reset the form manually after each Sunday.</em></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>