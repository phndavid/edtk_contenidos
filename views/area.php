<div class="container" ng-controller="AreaCtrl">
		<h1>Eduteka</h1>
		<input class="validate" placeholder="Buscar..."></input>
		<ul class="collection" ng-init="getAll()">
			<li class="collection-item" ng-repeat="a in areas"><a href="/subject/{{a.id}}">{{a.name}}</a></li>
		</ul>
</div>