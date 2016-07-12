<div ng-controller="SubjectCtrl">
	<div class="row">
		<div class="col s4">
			<h4>Asignaturas</h4>
			<ul class="collection" ng-init="getAll()">
				<li class="collection-item" ng-repeat="s in subjects">
					<a ng-click="selectSubject(s.id)" href="#">{{s.name}}</a>
				</li>
			</ul>
		</div>
		<div class="col s4">
			<h4>Ejes tematicos</h4>
			<ul class="collection">
				<li class="collection-item" ng-repeat="mt in mainTopics"><a href="#">{{mt.name}}</a></li>
			</ul>
		</div>
		<div class="col s4">
			<h4>Temas generales</h4>
			<ul class="collection" ng-init="getAll()">
				<li class="collection-item" ng-repeat="s in subjects "><a href="#">{{s.name}}</a></li>
			</ul>
		</div>
	</div>
</div>