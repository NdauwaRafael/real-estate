      <!-- main content start-->
		<div class="main-content main-content2 main-content2copy">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details_left">
				
					</div>
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(images/1.jpg) no-repeat center"> </span> 
										 <div class="user-name">
											<p>Michael<span>Administrator</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="<?=base_url()?>dashboard/profile"><i class="fa fa-user"></i>Profile</a> </li> 
									<li> <a href="<?=base_url()?>dashboard/logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>		
					<div class="social_icons">
						<div class="col-md-4 social_icons-left">
							<a href="#" class="yui"><i class="fa fa-facebook i1"></i><span>300<sup>+</sup> Likes</span></a>
						</div>
						<div class="col-md-4 social_icons-left pinterest">
							<a href="#"><i class="fa fa-google-plus i1"></i><span>500<sup>+</sup> Shares</span></a>
						</div>
						<div class="col-md-4 social_icons-left twi">
							<a href="#"><i class="fa fa-twitter i1"></i><span>500<sup>+</sup> Tweets</span></a>
						</div>
						<div class="clearfix"> </div>
					</div>			             	
					<div class="clearfix"></div>
				</div>
			</div>
			<!--notification menu end -->
			</div>
	<!-- //header-ends -->



			<div id="page-wrapper">
				<div class="graphs">

 <h3 class="blank1">Landlord | Add House</h3>
						<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" id="add_house_frm">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">House Name</label>
									<div class="col-sm-8">
										<input type="text" name="name" class="form-control1" id="focusedinput" placeholder="Name/Number of the house">
									</div>
                                </div>


								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">House Cartegory</label>
									<div class="col-sm-8">
                                        <select name="category" id="selector1" class="form-control1">
										<option>........................[SELECT].................................</option>
										<option>Single Room</option>
										<option>Double Room</option>
										<option>Bed Sitter</option>
                                        <option>One Bedroom Apartment</option>
                                        <option>Two Bedroom Apartment</option>
                                        <option>Three Bedroom Bedroom Apartment</option>
                                        <option>Two Bedroom Mansion</option>
                                        <option>Three Bedroom Mansion</option>
                                        <option>Four Bedroom Mansion</option>
                                        
									</select></div>
								</div>

								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">House Location</label>
									<div class="col-sm-8">
                                        <select name="location" id="selector1" class="form-control1">
										<option>................CHAGUA HAPA(SELECT HERE)......................</option>
										<option>Bamburi</option>
                                        <option>Bombolulu</option>
                                        <option>Changamwe</option>
                                        <option>Docks</option>
                                        <option>Ganjoni</option>
                                        <option>Kisauni</option>
                                        <option>Kisimani</option>
										<option>Kizingo</option>
										<option>Likoni</option>
                                        <option>Mshomoroni</option>
                                        <option>Mwembe Tayari</option>
                                        <option>Nyali</option>
                                        <option>Old Town</option>
                                        <option>Tudor</option>
									</select></div>
								</div>

								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Description</label>
									<div class="col-sm-8"><textarea name="description" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
								</div>
								
								<div class="form-group">
									<label for="mediuminput" class="col-sm-2 control-label">Rent Cost</label>
									<div class="col-sm-8">
										<input type="number" name="rent" class="form-control1" id="mediuminput" placeholder="Rent (Ksh/Month)">
									</div>
								</div>

							</form>
						</div>
					</div>

<!--=======================================================================-->                
			</div>
		</div>