
<!DOCTYPE html>
<html lang="en" class="wide wow-animation smoothscroll scrollTo">
  <head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="<?php echo base_url(); ?>assets/vendor/css/images-grid.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/fontawesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/style.css">
	 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/custom.css">
	     
    
	
  </head>
  
  <body>
    <!-- Page-->
    <div class="page text-center ">
      <!-- Page Header-->
      <header class="page-header page-header-with-slider" >
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static" class="rd-navbar rd-navbar-default" data-stick-up-offset="50px" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fullwidth" data-lg-device-layout="rd-navbar-static">
            <div class="rd-navbar-inner">
            
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a href="<?php echo base_url(); ?>" class="brand-name"><img src="<?php echo base_url(); ?>assets/vendor/img/logo.png" alt="" width="158" height="50"></a></div>
                <!-- RD Navbar Nav-->
                <div class="rd-navbar-nav-outher">
                  <ul class="rd-navbar-nav">
                    <li class="active">
						
							<form class="navbar-form" role="search">
							<div class="input-group">
								<input type="text" class="form-control sear-sty" placeholder="Search"  onkeyup="getsarchdata(this.value);" name="q" style="background:#fff;z-index:1024">
								<span class="sear-btn"  >
									<span  class=" text-danger " type="submit"><i class="fa fa-search" aria-hidden="true"></i>
									</span>
								</span>
								<div class="search-bac" id="result" style="display:none;">
									<ul class="text-left mar-t10" id="searchresult">
									</ul>
								</div>
							</div>
							</form>
						
					</li>
             
					<?php if($this->session->userdata('userdetails'))
						{ ?>
                    <li><a href="<?php echo base_url('motivation/lists'); ?>">List</a></li>
                    <li><a href="<?php echo base_url('motivation/logout'); ?>">Logout</a></li>
					
						<?php }else{ ?>
						<li class="active"><a href="./">Home</a></li>
						<li><a href="<?php echo base_url('motivation/aboutus'); ?>">About us</a></li>
                     <li><a href="#" data-toggle="modal" data-target="#modalPoll">Feedback</a></li>
                    <li><a href="<?php echo base_url('motivation/contactus'); ?>">Contacts</a></li>
						<?php }	?>
                  </ul>
                </div>
              
              </div>
            </div>
          </nav>
        </div>
        <!-- Swiper-->
        
      </header>
	  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <?php if($this->session->flashdata('success')): ?>
				<div class="alert_msg1 animated slideInUp bg-succ">
				<?php echo $this->session->flashdata('success');?> &nbsp; <i class="glyphicon glyphicon-ok text-success ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
			<?php if($this->session->flashdata('error')): ?>
				<div class="alert_msg1 animated slideInUp bg-warn">
				<?php echo $this->session->flashdata('error');?> &nbsp; <i class="glyphicon glyphicon-ok text-success ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
           <input class="form-control" type="text" placeholder="Search for Follow " id="myInput" onkeyup="myFunction()"><br>
			  <ul class="" id="myUL">
				
					<div class="row icon-si ">
						<li><div class="col-md-4">	
								<a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/whatsup.png">
								<span>Whatsup</span></a>
						</div></li>
						<li>
						<div class="col-md-4">	
								<a href="https://www.instagram.com/whats_lyf/" target="_blank""><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/instagram.png">
								<span>Instagram</span></a>

						</div>
						</li>
						<li><div class="col-md-4">	
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
  $('html').click(function(){
    alert('fgfd')
});
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
						console.log(data.text);
						 $('#result').show();
						$('#searchresult').empty();
						for(i=0; i<data.text.length; i++) {
						$('#searchresult').append("<a href='<?php echo base_url("motivation/singlepost/");?>"+data.text[i].url+"'><li>"+data.text[i].text+"</li></a>");                      
                      
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