<?php
date_default_timezone_set("Asia/Kolkata");
?>
<body>
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>				</button>

				<div class="navbar-header pull-left">
					<a href="admin.php" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							ARBAZO						</small>					</a>				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
				  <ul class="nav ace-nav"><li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<!--<img class="nav-user-photo" src="assets/images/avatars/user.png" alt="Jason's Photo" />-->
								<span class="user-info">
									<small>Welcome:<br> <?php if(isset($_SESSION['username']))
									{	
										echo ($_SESSION['username']);
									}else
									{
									 echo "<script>window.location='index.php';</script>";
									}
									 ?>
</small>								</span>
								<i class="ace-icon fa fa-caret-down"></i>							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										
																	</a>								</li>

								<li>
									<a href="profile.php">
									
										</a>								</li>

								<li class="divider"></li>

								<li>
									<a href="logout.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout									</a>								</li>
							</ul>
						</li>
					</ul>
			  </div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
			</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">

							<div class="" id="">
								<i class=""></i>							</div>

							<div class="" id="">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
									</div>

									<div class="ace-settings-item">
										<input type="hidden" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"></label>
									</div>

									<div class="ace-settings-item">
										
									</div>

									<div class="ace-settings-item">
										
									</div>

									<div class="ace-settings-item">
										
									</div>

									<div class="ace-settings-item">
									
									</div>
								</div><!-- /.pull-left -->

							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<!-- /.page-header -->
						<div class="row">
							<div class="col-xs-12">
						
