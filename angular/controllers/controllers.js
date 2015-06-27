var controllers = angular.module('Controllers', []);

  controllers.controller('GlobalController', ['$scope', 'Lang',
  function GlobalController($scope, Lang){
    $scope.lang = Lang;
  }]);

  /**
  * Controller of the different pages
  **/
  controllers.controller('IntroController', ['$scope', '$interval', 'Lang',
  function IndexController($scope, $interval, Lang) {
    $scope.count = 0;
    $scope.lang = Lang;
    $scope.swap = "fun";
    $scope.swaplength = $scope.lang.get('intro.subtitle.swap').length;
    console.log('swaplength: ' + $scope.swaplength);
    $scope.update = function() {
      $interval(function(){
          var i = $scope.count++ % $scope.swaplength;
          $scope.swap = $scope.lang.get('intro.subtitle.swap['+ i +']');
        },2000);
    };
    $scope.title = function() {
      return ((window.outerWidth > 767)? $scope.lang.get('intro.title.md') : $scope.lang.get('intro.title.md'));
    };
    $scope.update();
  }]);
