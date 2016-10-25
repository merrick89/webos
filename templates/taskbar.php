<section class="taskbar-container" ng-controller="navController">
	<div class="start-menu" ng-show="state">
		<ul>
			<li><button ng-click="toggleAbout()">About this site</button></li>
			<li><button>Test Application</button></li>
			<li><button>Test Application</button></li>
			<li><button>Test Application</button></li>
			<li><button>Test Application</button></li>
		</ul>
	</div>
	<div class="taskbar">
		<div class="system-icon-container">
			<button id="start-button" class="system-icon" ng-click="toggle()">
				<div class="start-button-graphic">
					<div class="start-button-line"></div>
					<div class="start-button-line"></div>
				</div>
			</button>
			<button class="system-icon system-application-icon" ng-click="toggleExplorer()" ng-class="{active: WindowExplorerState}">
				<div><img src="images/file-explorer.png"></div>
			</button>
			<button class="system-icon system-application-icon" ng-click="toggleie()" ng-class="{active: WindowieState}">
				<div><img src="images/ie.png"></div>
			</button>
		</div>
		<div class="system-time-container">
			<div class="text-right">
				<strong class="system-time"></strong><br>
				<span class="system-date">2016-10-25</span>
			</div>
		</div>
	</div>
</section>