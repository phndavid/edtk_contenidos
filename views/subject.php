<div ng-controller="SubjectCtrl">
	<div class="container">
		<div class="row">
			<div style="height: 100px; margin-top: 25px;">
				<div input-field class="col s4" ng-init="getArea()">
					<label>Area</label>
					<select class="browser-default" ng-model="selected" ng-change="hasChanged()">
						<option value="">---Seleccione una Area---</option>
					    <option ng-repeat="value in data.areas" value="{{value.id}}">{{value.name}}</option>
					</select>					
				</div>	
				<div class="col s8">
					<label>{{concept.name}} {{concept.description}}</label>					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s4">					
				<label>Asignaturas</label>
				<ul class="sub collection" ng-init="getAll()">
					<li class=" collection-item" ng-repeat="s in subjects">
						<a ng-click="selectSubject(s)" href="">{{s.name}}</a>
					</li>
				</ul>
			</div>
			<div class="col s4">
				<label>Ejes tematicos</label>
				<ul class="mt collection">
					<li class="collection-item" ng-repeat="mt in mainTopics">
						<a ng-click="selectMainTopic(mt)" href="">{{mt.name}}</a>
					</li>
				</ul>
			</div>
			<div class="col s4">
				<label>Temas generales</label>
				<ul class="collection">
					<li class="collection-item" ng-repeat="gt in generalTopics ">
						<a href="#/topic/{{gt.id}}">{{gt.name}}</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
