<div class="page-sidebar navbar-collapse collapse">
	<!-- BEGIN SIDEBAR MENU -->
	<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
	<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
	<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
	<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" ng-class="{'page-sidebar-menu-closed': settings.layout.pageSidebarClosed}">
		<li class="start">
			<a href="#/dashboard.html">
			<i class="icon-home"></i>
			<span class="title">Dashboard</span>
			</a>
		</li>
		<li>
			<a href="javascript:;">
			<i class="icon-settings"></i>
			<span class="title">AngularJS Features</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="#/ui_bootstrap.html">
					<i class="icon-puzzle"></i> UI Bootstrap</span>
					</a>
				</li>
				<li>
					<a href="#/file_upload.html">
					<i class="icon-paper-clip"></i> File Upload</span>
					</a>
				</li>
				<li>
					<a href="#/ui_select.html">
					<i class="icon-check"></i> UI Select</span>
					</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
			<i class="icon-wrench"></i>
			<span class="title">jQuery Plugins</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="#/form-tools">
						<i class="icon-puzzle"></i> Form Tools
					</a>
				</li>
				<li>
					<a href="#/pickers">
						<i class="icon-calendar"></i> Date & Time Pickers
					</a>
				</li>
				<li>
					<a href="#/dropdowns">
						<i class="icon-refresh"></i> Custom Dropdowns
					</a>
				</li>
				<li>
					<a href="#/tree">
						<i class="icon-share"></i> Tree View
					</a>
				</li>
				<li>
					<a href="javascript:;">
						<i class="icon-briefcase"></i> Datatables
						<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="#/datatables/advanced.html">
							<i class="icon-tag"></i> Advanced Datatables
							</a>
						</li>
						<li>
							<a href="#/datatables/ajax.html">
							<i class="icon-refresh"></i> Ajax Datatables
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</li>
		<li>
			<a href="#/profile/dashboard" id="sidebar_menu_link_profile">
			<i class="icon-user"></i>
			<span class="title">User Profile</span>
			</a>
		</li>
		<li>
			<a href="#/todo">
			<i class="icon-check"></i>
			<span class="title">Task & Todo</span>
			</a>
		</li>
		<li>
			<a href="../index.html" target="_blank">
			<i class="icon-paper-plane"></i>
			<span class="title">HTML Version</span>
			</a>
		</li>
	</ul>
	<!-- END SIDEBAR MENU -->
</div>	