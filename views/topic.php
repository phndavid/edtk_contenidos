<div ng-controller="TopicCtrl">
	<div class="row">
		<div class="col s12">
			<ul ng-repeat="topic in specificTopics">
				<li><a href="">{{topic.name}}</a></li>
			</ul>
		</div>
	</div>
</div>