<!DOCTYPE html>
<html lang="en" class="wide wow-animation smoothscroll scrollTo">
  <head>
    <!-- Site Title-->
    <title>Home</title>
   <link rel="icon" href="<?php echo base_url(); ?>assets/vendor/img/fav.png" >
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
<meta property="og:url" content="http://whatslyf.com/">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="<?php echo base_url(); ?>assets/vendor/css/images-grid.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/fontawesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/style.css">
	 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/custom.css">
	 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/dataTables.bootstrap4.min.css">
	     
    <?php header('Cache-Control: no cache');
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
 ?>

</head>
  
  <body>
    <!-- Page-->
	<div id="loading" class="loading"></div>
    <div class="page text-center ">
      <!-- Page Header-->
      <header class="page-header page-header-with-slider" >
        <!-- RD Navbar-->
        <div class="">
        <div class="rd-navbar-wrap">
          <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static" class="rd-navbar rd-navbar-default" data-stick-up-offset="50px" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fullwidth" data-lg-device-layout="rd-navbar-static">
            <div class="rd-navbar-inner">
            
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
				 <span class="md-hide" style="position: absolute;
    left:65px;color: #d30f61;font-size: 21px;top:-3px">
		<form class="navbar-form" role="search">
							<div class="input-group">
								<input style="padding:0px 5px;width:250px;height:40px;" type="text" class="form-control " placeholder="Search"  onkeyup="getsarchdata1(this.value);" name="q" id="q" style="background:#fff;z-index:1024">
								<span class="sear-btn"  >
									<span  class=" text-danger " type="submit"><i class="fa fa-search" aria-hidden="true"></i>
									</span>
								</span>
								<div class="search-bac" id="result1" style="display:none;">
									<ul class="text-left mar-t10 pad-l-r" id="searchresult1">
									</ul>
								</div>
							</div>
							</form>
	</span>
              </div>
			 
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Brand-->
                <span onclick="hideshow()">
				<div class="rd-navbar-brand"><a href="<?php echo base_url(); ?>" class="brand-name"><img src="<?php echo base_url(); ?>assets/vendor/img/logo.png" alt="" width="158" height="50"></a></div>
                <!-- RD Navbar Nav-->
				<div class="side-user-img-bac">
				<div class="side-user-img">
				<img class="md-hide  img-responsive" src="<?php echo base_url(); ?>assets/vendor/img/user.png" alt="User" >
				</div>
				</div>
				</span>
                <div class="rd-navbar-nav-outher">
                  <ul class="rd-navbar-nav mobile-side-margin">
                    <li class="active sm-hide">
						
							<form class="navbar-form" role="search">
							<div class="input-group">
								<input type="text" class="form-control sear-sty" placeholder="Search"  onkeyup="getsarchdata(this.value);" name="q" id="searchq" style="background:#fff;z-index:1024;bottom:8px">
								<span class="sear-btn"  >
									<span  class=" text-danger " type="submit"><i class="fa fa-search" aria-hidden="true"></i>
									</span>
								</span>
								<div class="search-bac" id="result" style="display:none;">
									<ul class="text-left mar-t10 pad-l-r" id="searchresult">
									</ul>
								</div>
							</div>
							</form>
						
					</li>
             
						<li class="list-icon-s <?php if($currentURL==base_url()){ echo "active"; } ?>">
						<a href="<?php echo base_url(''); ?>">
						<div class="text-center sm-hide">
							<i class="fa fa-home" aria-hidden="true"></i>
						</div>
						Home</a>
						</li>
						<li class="list-icon-s <?php if($currentURL==base_url('motivation/aboutus')){ echo "active"; } ?>"><a href="<?php echo base_url('motivation/aboutus'); ?>">
						<div class="text-center sm-hide">
							<i class="fa fa-info-circle" aria-hidden="true"></i>
						</div>About us</a></li>
						<li class="list-icon-s" ><a href="#" data-toggle="modal" data-target="#modalPoll">
						<div class="text-center sm-hide">
							<i class="fa fa-commenting" aria-hidden="true"></i>
						</div>Feedback</a></li>
						<li class="list-icon-s <?php if($currentURL==base_url('motivation/contactus')){ echo "active"; } ?>"><a href="<?php echo base_url('motivation/contactus'); ?>">
						<div class="text-center sm-hide">
							<i class="fa fa-paper-plane" aria-hidden="true"></i>
						</div> Contacts</a></li>
						<li class="rd-navbar--has-dropdown rd-navbar-submenu list-icon-s "><a href="#">
						<div class="text-center user-img sm-hide">
							<img src="<?php echo base_url(); ?>assets/vendor/img/user.png" alt="user">
						</div>User </a>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-navbar-dropdown">
                        <?php if($this->session->userdata('userdetails'))
						{ ?>
                         <li class="<?php if($currentURL==base_url('motivation/lists')){ echo "active"; } ?>"><a href="<?php echo base_url('motivation/lists'); ?>">My Posts</a></li>
                    <li class="<?php if($currentURL==base_url('motivation/changepassword')){ echo "active"; } ?>"><a href="<?php echo base_url('motivation/changepassword'); ?>">Change Password</a></li>
					 <li><a href="<?php echo base_url('motivation/logout'); ?>">Logout</a></li>
					
                      <?php }else{ ?>
					  <li class="<?php if($currentURL==base_url('admin')){ echo "active"; } ?>"><a href="<?php echo base_url('admin'); ?>">Sign In</a></li>
						<li class="<?php if($currentURL==base_url('admin/signup')){ echo "active"; } ?>"><a href="<?php echo base_url('admin/signup'); ?>">Sign Up</a></li>
                 
					  	<?php } ?>
					  </ul>
                    </li>
                  
				  </ul>
                </div>
              
              </div>
            </div>
          </nav>
        </div>
        </div>
        <!-- Swiper-->
      </header>
	  
    <?php if($this->session->flashdata('success')): ?>
				<div class="alert_msg1 animated slideInUp bg-succ">
				<?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
			<?php if($this->session->flashdata('error')): ?>
				<div class="alert_msg1 animated slideInUp bg-warn">
				<?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa-exclamation-triangle text-warning ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
      <!-- Modal content-->
	  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-body">
           <input class="form-control" type="text" placeholder="Search for Follow " id="myInput" onkeyup="myFunction()"><br>
			  <ul class="" id="myUL">
				
					<div class="row icon-si ">
						<li><div class="col-md-4 col-xs-4">	
								<a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/whatsup.png">
								<span>What'sapp</span></a>
						</div></li>
						<li>
						<div class="col-md-4 col-xs-4">	
								<a href="https://www.instagram.com/whats_lyf/" target="_blank""><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/instagram.png">
								<span>Instagram</span></a>

						</div>
						</li>
						<li><div class="col-md-4 col-xs-4" style="word-wrap: break-word;">	
								<a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/stumbleupon.png">
								<span>stumbleupon</span></a>
						</div></li>
					</div>
					
					
				
 
				
			  </ul>
        </div>
        
      </div>
      
    </div>
  </div> 
  
  <style>
  .serachide{
	  display
  }
  </style>
  
  <script>
 
  /*loader*/
  function preloader(){
            document.getElementById("loading").style.display = "none";
        }
        window.onload = preloader;
		/*loader*/
		function hideshow(){
			document.getElementById("searchq").value='';
			$('#searchresult').hide();
		}
	function getsarchdata(val){
		
		if(val!=''){
				jQuery.ajax({
					url: "<?php echo base_url('motivation/search');?>",
					data: {
						searchdata: val,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
						if(data.msg==1){
						 $('#result').show();
						 $('#searchresult').show();
						$('#searchresult').empty();
						for(i=0; i<data.text.length; i++) {
						$('#searchresult').append("<a href='<?php echo base_url("motivation/singlepost/");?>"+data.text[i].url+"'><li>"+data.text[i].lit+" in <b style='color:#d30f61'>"+data.text[i].title+"</b></li></a>");                      
                      
						}
						}else{
						 $('#result').show();
						  $('#searchresult').show();
							$('#searchresult').empty();						 
						 $('#searchresult').append("No result found");                      

						}
				 }
				});
				
		}
			
			
		}
		// mobile
		function getsarchdata1(val){
		if(val!=''){
				jQuery.ajax({
					url: "<?php echo base_url('motivation/search');?>",
					data: {
						searchdata: val,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
						 $('#result1').show();
						  $('#searchresult').show();
						$('#searchresult1').empty();
						for(i=0; i<data.text.length; i++) {
						$('#searchresult1').append("<a href='<?php echo base_url("motivation/singlepost/");?>"+data.text[i].url+"'><li>"+data.text[i].lit+" in <b style='color:#d30f61'>"+data.text[i].title+"</b></li></a>");                      
                      
					}
				 }
				});
				
		}
			
			
		}
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        if (li[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

		
</script>