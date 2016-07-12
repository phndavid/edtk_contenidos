angular.module('app', ['ngRoute'])
.config(['$routeProvider', '$locationProvider',
  function($routeProvider, $locationProvider) {
         $routeProvider
            .when('/',{
            	templateUrl: 'views/area.php'
            })
            .when('/subject/:areaId',{
              templateUrl: 'views/subject.php'
            })
            .otherwise({
		          redirectTo: '/'
		   	    });
        $locationProvider.html5Mode(true);
 }])
.controller('AreaCtrl', function($scope, $http){
	// read areas
	$scope.getAll = function(){
	    $http.get("read_areas.php").success(function(response){
	        $scope.areas = response.areas;
	    });
	}
})
.controller('SubjectCtrl', function($scope, $routeParams, $http, DataFactory) {
  this.name = "SubjectCtrl";
  var area_id = $routeParams;
  // read specific subject
  $scope.getAll = function(){
    $http.get("read_subjects.php", {params: {
            area_id: area_id.areaId
        }}).success(function(response){
          $scope.subjects = response.subjects;
    });
  };
  $scope.selectSubject = function(s){
    console.log(s);
    var handleSuccess = function(data, status) {
        $scope.mainTopics = data.maintopics;
        console.log($scope.mainTopics);
    };
    DataFactory.getMainTopic(s).success(handleSuccess);
  }
})
.factory('DataFactory',function($http){
  var dataFactory = {};
  dataFactory.getMainTopic = function(id){
     return $http.get("read_maintopics.php", {params: { asignatura_id: id}});
  };
  dataFactory.getGeneralTopic = function(){

  };
  dataFactory.getSpecificTopic = function(){

  };
  return dataFactory;
})