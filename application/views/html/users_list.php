<style>
.pagination > li > a, .pagination > li > span {
    height: 0;
    min-width: 0;
    font-size: 16px;
	padding:15px;
    line-height: 49px;
    vertical-align: middle;
}
.pagination > li.next > a:after, .pagination > li.next > span:after {
    content: '';
	color:#fff
}
.pagination > li:last-child > a, .pagination > li:last-child > span {
    border-radius: 4px;
    color: #fff;
}

</style>

<main class="page-content offset-top-30" >
   <div id="fb-root"></div>
  
   <div id="topscrooling"></div>
   <div class="shell ">
      <div class="range">
         <div class="col-md-3 col-lg-3 sm-hide" >
            <div class="card hovercardnav ">
               <div class="nav-pills nav-stacked" data-spy="affix" data-offset-top="0">
                  <?php if($this->session->userdata('userdetails'))
                     { ?>
                  <div class="card hovercard pad-20">
                     <div class="cardheader" style="background:#d30f61">
                     </div>
                     <div class="avatar">
                        	  <?php if($details['profile_pic']!=''){ ?>
						 		<img   src="<?php echo base_url('assets/profile_pic/'.$details['profile_pic']); ?>">

						 <?php }else{  ?>
								<img alt="user" src="<?php echo base_url(); ?>assets/vendor/img/user-profile.png">
						 <?php } ?>
                     </div>
                     <div class="title">
                        <h6><?php echo isset($user_details['name'])?$user_details['name']:''; ?></h6>
                     </div>
                     <div class="profile-usermenu" >
                       <ul class="nav sidemenu-active-help">
                           <li class="<?php if($currentURL==base_url('')){ echo "active"; } ?>">
                              <a href="<?php echo base_url(); ?>">
                              <i class="fa fa-home" aria-hidden="true"></i>
                              Home </a>
                           </li>
                           <li class="<?php if($currentURL==base_url('motivation/lists')){ echo "active"; } ?>">
                              <a href="<?php echo base_url('motivation/lists'); ?>">
                              <i class="fa fa-clipboard" aria-hidden="true"></i>
                              My posts </a>
                           </li>
                           <li class="<?php if($currentURL==base_url('motivation/profile')){ echo "active"; } ?>">
                              <a href="<?php echo base_url('motivation/profile'); ?>">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              Profile </a>
                           </li>
                           <li>
                              <a href="javascript:void(0)javascript:void(0)">
                              <i class="fa fa fa-globe" aria-hidden="true"></i>
                              Notifications </a>
                           </li>
						  <?php  if(isset($details['role']) && $details['role']==1){ ?>
							<li class="<?php if($currentURL==base_url('motivation/users_list')){ echo "active"; } ?>">

                              <a href="<?php echo base_url('motivation/users_list'); ?>">
                              <i class="fa fa-cogs" aria-hidden="true"></i>
                              Users List </a>
                           </li>
						   <?php } ?>
                           <li>
                              <a href="<?php echo base_url('motivation/logout'); ?>">
                              <i class="fa fa-sign-out" aria-hidden="true"></i>
                              Logout </a>
                           </li>
                        </ul>
                     </div>
                     <div class="clearfix">&nbsp;</div>
                  </div>
                  <?php }else{ ?>
                  <div class="box">
                     <div class="section-20 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                        <h4>Login </h4>
                     </div>
                     <hr class="divider offset-none">
                     <div class="section-30 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                        <form  method="POST" action="<?php echo base_url('admin/loginpost'); ?>">
                           <input class="form-control" type="text" id="email" name="email"  placeholder="Email Adress" required><br> 
                           <input class="form-control" type="password" id="password" name="password" placeholder="Enter Password " required> 
                           <a href="<?php echo base_url('admin/signup'); ?>" class=" pad-5 pull-left">Register</a>
                           <a href="<?php echo base_url('admin/forgotpassword'); ?>" class="pull-right pad-5">Forgot password?</a>
                           <br>
                           <br>
                           <button type="submit" class="btn btn-primary btn-sm">Login</button>
                        </form>
                     </div>
                  </div>
                  <?php } ?>
               </div>
            </div>
         </div>
         <div class="cell-sm-9 cell-sm-preffix-2 cell-md-9 cell-md-preffix-0">
           <div class="box">
                <div class="section-20 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30" style="position:relative">
                  <h4>Users List</h4>
                  
                </div>
                <hr class="divider offset-none">
                <div class="section-30 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                  <div class="range">
                  
                    <div class="cell-md-12 ">
                      <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Date of Join</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
		
		<?php foreach($user_list as $List){ ?>
            <tr>
                <td><?php echo $List['name']; ?></td>
                <td><?php echo $List['email']; ?></td>
                <td><?php echo $List['mobile']; ?></td>
                <td><?php echo $List['create_at']; ?></td>
				<td>
					<a href="<?php echo base_url('motivation/userdelete/'.base64_encode($List['id'])); ?>" class="btn btn-primary btn-sm">Delete</a>
				</td>
                
            </tr>
			
		<?php } ?>
			
            
			
           
           
        </tbody>
        <tfoot>
            <tr>
               <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Date of Join</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>

                      </div>
                     
                    </div>
                  </div>
                </div>
                <hr class="divider offset-none">
               
                
              </div>
         </div>
         
      </div>
   </div>
</main>





