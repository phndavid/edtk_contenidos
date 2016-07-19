<div class="container" ng-controller="SubjectCtrl">
		<div class="col s12" style="text-align: center; margin-top: 10%;">
		<img src="./images/eduteka.jpg">
		</div>
		<input class="validate" placeholder="Buscar..."></input>
		<div class="row">
			<div class="col s4">
				<ul class="collection" ng-init="getArea()">
					<li class="collection-item" ng-repeat="a in data.areas"><a href="#/subject/{{a.id}}">{{a.name}}</a></li>
				</ul>
			</div>
		</div>
</div>