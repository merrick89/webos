(function(){
	// Create the module and name it app
	var app = angular.module('merrick', ['ngAnimate']);

	//Service for global variables
	app.service('windowService', function(){
		var WindowExplorerState = false;
		return{
			setExplorerState: function(){
				WindowExplorerState = !WindowExplorerState;
			},
			getExplorerState: function(){
				return WindowExplorerState;
			}
		};
	});

	//Service for ie variables
	app.service('windowieService', function(){
		var WindowieState = false;
		return{
			setieState: function(){
				WindowieState = !WindowieState;
			},
			getieState: function(){
				return WindowieState;
			}
		};
	});

	//Main Controller for windows
	app.controller('mainController', function($scope, windowService, windowieService){
		//File Explorer
        $scope.toggleExplorer = function(){
        	windowService.setExplorerState();
        	$scope.WindowExplorerState = windowService.getExplorerState();
        };
        //IE
        $scope.toggleie = function(){
        	windowieService.setieState();
        	$scope.WindowieState = windowieService.getieState();
        };
	})

    // Taskbar Controller
	app.controller('navController', function($scope){
		// Start Menu
        $scope.state = false;
        $scope.toggle = function(){
            $scope.state = !$scope.state;
        };
        $scope.untoggle = function(){
            $scope.state = false;
        };
	});

	//Directive for the taskbar
	app.directive('taskbar', function(){
		return{
			restrict: 'E',
			templateUrl: 'templates/taskbar.php'
		}
	});

})();