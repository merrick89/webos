<section class="taskbar-container" ng-controller="navController">
	<div class="start-menu" ng-show="state">
		<ul>
			<li>Test Application</li>
			<li>Test Application</li>
			<li>Test Application</li>
			<li>Test Application</li>
			<li>Test Application</li>
		</ul>
	</div>
	<div class="taskbar">
		<button id="start-button" class="system-icon" ng-click="toggle()">
			<div class="start-button-graphic">
				<div class="start-button-line"></div>
				<div class="start-button-line"></div>
			</div>
		</button>
		<button class="system-icon system-application-icon" ng-click="toggleExplorer()" ng-class="{active: WindowExplorerState}">
			<div><img src="images/file-explorer.png"></div>
		</button>
	</div>
</section>