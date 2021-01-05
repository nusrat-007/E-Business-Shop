<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>"
		class="" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $admin['firstname'].' '.$admin['lastname']; ?></p>
        
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header"></li>
      <li><a href="home.php"><i class=""></i> <span>Dashboard</span></a></li>
      <li><a href="sales.php"><i class=""></i> <span>Sales Details</span></a></li>
	  <li><a href="usera.php"><i class=""></i> <span>Add Users</span></a></li>
	  <li><a href="users.php"><i class=""></i> <span>View Users</span></a></li>
	  <li><a href="userb.php"><i class=""></i> <span>Delete Users</span></a></li>
      <li><a href="category.php"><i class=""></i>Product Category</span></a></li>
	  
      <li><a href="products.php"><i class=""></i> Product List</span></a></li>
      <li><a href="aboutus.php"><i class=""></i> About Us</span></a></li>
      <li><a href="contactus.php"><i class=""></i> Contact Us</span></a></li>
	  	  <li><a href="setting.php"><i class=""></i> See Profile</span></a></li>
      <li><a href="#profile" data-toggle="modal" class="" id="admin_profile">Update Profile</span></a></li>
     
     <li><a href="../logout.php"><i class=""></i> Log out</span></a></li>
     
       
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>