<!DOCTYPE html>
<html ng-app="merrick">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="Merrick Chun">	    
	    <meta content="True" name="HandheldFriendly">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	    <meta name="viewport" content="width=device-width">
	    <link rel="stylesheet" type="text/css" href="files/jquery-ui.min.css">
		<link rel="stylesheet" type="text/css" href="files/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="files/font-awesome-4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="files/custom.css">
		<title>WebOs - Beta</title>
	</head>
	<body>
		
		<div class="app-container flexbox">
			<div class="app-content" ng-controller="mainController">
				<div class="window-container draggable resizable" ng-show="WindowExplorerState">
					<div class="window-header">
						<div class="window-header-title"><img src="images/file-explorer.png"> File Explorer</div>
						<button class="window-header-close" ng-click="toggleExplorer()"><i class="fa fa-times"></i></button>
					</div>
					<div class="window-content flexbox">
						<div class="explorer-left-nav">
							<ul>
								<li><button><img src="images/folder.png"> Images</button></li>
								<li><button><img src="images/folder.png"> Videos</button></li>
								<li><button><img src="images/folder.png"> Settings</button></li>
							</ul>
						</div>
						<div class="explorer-content">asdf</div>
					</div>
				</div>
				<div class="window-container draggable resizable" ng-show="WindowieState">
					<div class="window-header">
						<div class="window-header-title"><img src="images/ie.png"> Internet Explorer</div>
						<button class="window-header-close" ng-click="toggleie()"><i class="fa fa-times"></i></button>
					</div>
					<div class="window-content">
						asdfasdf
					</div>
				</div>
				<div class="window-container draggable resizable" ng-show="WindowAboutState">
					<div class="window-header">
						<div class="window-header-title"><img src="images/notepad.png"> About</div>
						<button class="window-header-close" ng-click="toggleAbout()"><i class="fa fa-times"></i></button>
					</div>
					<div class="window-content">
						<div style="margin:5px;">
							<blockquote>What would a computer look like if it could be controlled by anyone on the Internet?</blockquote>
							<i>Disclaimer: This site is not affiliated with Microsoft in any way. The use of icons is used solely to imitate the popular OS.</i>
						</div>
					</div>
				</div>
				<taskbar></taskbar>
			</div>			
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-route.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-animate.js"></script>
		<script type="text/javascript" src="files/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="files/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="files/jquery-ui.min.js"></script>
		<script type="text/javascript" src="files/moment.js"></script>
		<script type="text/javascript" src="app.js"></script>
		<script type="text/javascript" src="files/typed.min.js"></script>
		<script type="text/javascript" src="files/js.js"></script>
	</body>
</html>