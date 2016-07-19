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
            .when('/topic/:generalId',{
              templateUrl: 'views/topic.php'
            })
            .otherwise({
		          redirectTo: '/'
		   	    });
        //$locationProvider.html5Mode(true);
 }])
.controller('SubjectCtrl', function($scope, $routeParams, $http, DataFactory) {
  this.name = "SubjectCtrl";
  var area_id = $routeParams;
  $scope.concept = [{
    'name': "",
    'description': ""
  }]
  $scope.data = {
    model: null,
    areas: []
  };
  $scope.selected = $scope.data.areas[0];
   $scope.hasChanged = function() {
    console.log($scope.selected);
    var id = $scope.selected;
    $scope.getSubjectById(id);
    $scope.concept.name = ""; 
    $scope.concept.description = "";
    $scope.mainTopics = []; 
    $scope.generalTopics = [];
  }
  // read areas
  $scope.getArea = function(){
      $http.get("read_areas.php").success(function(response){
          $scope.data.areas = response.areas;          
      });
  }
   $scope.getSubjectById = function(id){
      var handleSuccess = function(data, status) {
        $scope.subjects = data.subjects;         
    };
    DataFactory.getSubject(id).success(handleSuccess);
  };
  // read specific subject
  $scope.getAll = function(){
      var handleSuccess = function(data, status) {
        $scope.subjects = data.subjects;         
    };
    DataFactory.getSubject(area_id.areaId).success(handleSuccess);
  };
  $scope.selectSubject = function(s){
    var handleSuccess = function(data, status) {
        $scope.mainTopics = data.maintopics;
        var mt_id = $scope.mainTopics[0];
        $scope.selectMainTopic(mt_id);
        $scope.concept.name = s.name+": "; 
        $scope.concept.description = s.description;           
    };
    DataFactory.getMainTopic(s.id).success(handleSuccess);
    var selector = '.sub li';
        $(selector).on('click', function(){
        $(selector).removeClass('txt-subject');
        $(this).addClass('txt-subject');
   });
  }
  $scope.selectMainTopic = function(mt){
    var handleSuccess = function(data, status) {
        $scope.generalTopics = data.generaltopics;
    };
    DataFactory.getGeneralTopic(mt.id).success(handleSuccess);
     $scope.concept.name = mt.name+": "; 
     $scope.concept.description = mt.description;
     var selector = '.mt li';
        $(selector).on('click', function(){
        $(selector).removeClass('txt-subject');
        $(this).addClass('txt-subject');
   });
  }
})
.controller('TopicCtrl', function($scope, $routeParams, $http, DataFactory){
  this.name="TopicCtrl";
  var general_id = $routeParams;
  var handleSuccess = function(data, status) {
        $scope.specificTopics = data.specifictopics;
    };
  DataFactory.getSpecificTopic(general_id.generalId).success(handleSuccess);
})
.factory('DataFactory',function($http){
  var dataFactory = {};
  dataFactory.getSubject = function(id){
    return $http.get("read_subjects.php", {params: { area_id: id }});
  };
  dataFactory.getMainTopic = function(id){
    return $http.get("read_maintopics.php", {params: { asignatura_id: id}});
  };
  dataFactory.getGeneralTopic = function(id){
    return $http.get("read_generaltopics.php", {params: { eje_id: id}});
  };
  dataFactory.getSpecificTopic = function(id){
    return $http.get("read_specifictopics.php", {params: { general_id: id}});
  };
  return dataFactory;
})