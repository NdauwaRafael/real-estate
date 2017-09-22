    <section>
    <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="<?=base_url()?>dashboard">Gichaga <span>Estate</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="<?=base_url()?>dashboard"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li><a href="<?=base_url()?>landlord"><i class="lnr lnr-power-switch"></i><span>Landlord Dashboard</span></a></li>
						<li><a href="<?=base_url()?>landlord/bills"><i class="lnr lnr-cog"></i><span>Bills</span></a></li>
						<li class="menu-list">
							<a href="#"><i class="fa fa-building-o"></i>
								<span>Houses</span></a>
								<ul class="sub-menu-list">
									<li><a href="<?=base_url()?>landlord/add_house">Add House</a> </li>
									<li><a href="<?=base_url()?>landlord/view_house">View Houses</a></li>
								</ul>
						</li>
				
						

						<li class="menu-list">
							<a href="#"><i class="lnr lnr-indent-increase"></i>
								<span>Tenants</span></a>
								<ul class="sub-menu-list">
									<li><a href="<?=base_url()?>landlord/add_tenants">Add Tenant</a> </li>
									<li><a href="<?=base_url()?>landlord/view_tenants">View Tenants</a></li>
								</ul>
						</li>
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
    <!-- left side end-->