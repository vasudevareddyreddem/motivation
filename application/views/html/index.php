<main class="page-content offset-top-30" >
		
        <div id="fb-root"></div>
        <!-- Owl Carousel-->
		<?php //echo '<pre>';print_r($post_images); exit; ?>
        <div data-items="1" data-xs-items="2" data-md-items="3" data-lg-items="4" data-loop="true" data-nav="true" data-mouse-drag="false" data-margin="30px" class="owl-carousel owl-carousel-flex offset-top-0">
          <?php foreach($post_images as $List){ ?>
				  <?php if(count($List['p_list'])>0){ ?>
				  <div class="owl-item">
					<div class="post post-variant-1 post-variant-1-short box post-variant-1-equal-height">
					  <div>
						<div class="post-media-wrap"><a href="#"><img src="<?php echo base_url('assets/files/'.$List['p_list'][0]['imgname']); ?>" width="370" height="231" alt="" class="img-responsive post-image"/></a>
						  
						</div>
						<div class="post-content-wrap">
						  <div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by <a href="#"><?php echo isset($List['name'])?$List['name']:''; ?></a></span></div>
						  <h5><a href="#"><?php echo isset($List['text'])?$List['text']:''; ?></a></h5>
						</div>
						<div class="post-content-bottom">
						  <ul class="post-meta list-inline list-inline-md">
							<li><a href="javascript:void(0)" class="post-meta-date small"><?php echo date('M d,  Y',strtotime(htmlentities($List['create_at'])));?></a></li>
							<li><a href="javascript:void(0)" class="post-meta-comment small">18</a></li>
						  </ul>
						</div>
					  </div>
					</div>
				  </div>
				  <?php } ?>
		  <?php } ?>
         
          
       
        
        </div>
        <!--Posts-->
        <div class="shell">
          <div class="range">
            <div class="cell-sm-8 cell-sm-preffix-2 cell-md-8 cell-md-preffix-0">
			<?php foreach($post_images as $List){?>
			<?php if(count($List['p_list'])==0){ ?>
						  <div class="post post-variant-1 box mar-t30">
							<div>
							  <div class="post-content-wrap">
								<h4><a href="#"><?php echo isset($List['text'])?$List['text']:''; ?><h4>
								<div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by <a href="javascript:void(0)"><?php echo isset($List['name'])?$List['name']:''; ?></a></span></div>
								<ul class="post-meta list-inline list-inline-md">
								  <li><a href="#" class="post-meta-date small"><?php echo date('M d,  Y',strtotime(htmlentities($List['create_at'])));?></a></li>
								 <li  id="comm_expand<?php echo $List['p_id']; ?>"><a  class="post-meta-comment small">34</a></li>
								  <li><a href="#" class="post-meta-like small">4</a></li>
								  <li><a href="#" class="post-meta-share small">4</a></li>
								</ul>
							  </div>
							  <hr class="divider offset-none"/>
							  <div class="post-bottom reveal-xs-flex range-xs-justify range-xs-middle">
										<ul class="list-inline-0">
										  <li><a href="#" class="icon icon-circle fa-facebook icon-default text-info"></a></li>
										  <li><a href="#" class="icon icon-circle fa-twitter icon-default text-info"></a></li>
										  <li><a href="#" class="icon icon-circle fa-google-plus icon-default text-info"></a></li>
										  <li><a href="#" class="icon icon-circle fa-linkedin icon-default text-info"></a></li>
										  <li><a href="#" class="icon icon-circle fa-pinterest icon-default text-info"></a></li>
										</ul><a href="single.php" class="btn btn-primary offset-top-10 offset-xs-top-0">Read more</a>
							  </div>
							  <div class="card-footer" style="display:none;" id="comm_sec<?php echo $List['p_id']; ?>">
				<div class="row">
				<hr>
				<span class="col-md-2 col-xs-2 comm-img"><img class="img-responsive" src="<?php echo base_url(); ?>assets/vendor/img/coment-user.png"></span>
					<form action="<?php echo base_url('motivation/addcomment'); ?>" method="post">
					<div class="col-md-8 col-xs-8">
					<input type="hidden" id="post_id" name="post_id"  value="<?php echo $List['p_id']; ?>">
					<textarea type="text" id="comment" name="comment" class="form-control pad-lef" placeholder="Enter your Comment" rows="1"></textarea>
					</div>
					<div class="col-md-2 col-xs-2">
						<div class="file btn btn-sm btn-primary ">
							<button type="submit">Send</button>
							
						</div>
						</div>
					</form>
				
				</div>
			</div>
							</div>
						  </div>
			<?php }else{ ?>
			<?php //echo '<pre>';print_r($List);exit; ?>
					 <div class="post post-variant-1 box mar-t30">
						<div>
						  <div class="post-media-wrap">
							<div id="gallery<?php echo $List['p_id']; ?>"></div>
						  </div>
						  <div class="post-content-wrap">
							<div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by <a href="javascript:void(0)"><?php echo isset($List['name'])?$List['name']:''; ?></a></span></div>
							<h4><a href="#"><?php echo isset($List['text'])?$List['text']:''; ?></a></h4>
							<ul class="post-meta list-inline list-inline-md">
							  <li><a href="#" class="post-meta-date small"><?php echo date('M d,  Y',strtotime(htmlentities($List['create_at'])));?></a></li>
							  <li  id="comm_expand<?php echo $List['p_id']; ?>"><a  class="post-meta-comment small">34</a></li>
							   <li><a href="#" class="post-meta-like small">4</a></li>
							  <li><a href="#" class="post-meta-share small">4</a></li>
							</ul>
						  </div>
						  <hr class="divider offset-none"/>
						  <div class="post-bottom reveal-xs-flex range-xs-justify range-xs-middle">
									<ul class="list-inline-0">
									  <li><a href="#" class="icon icon-circle fa-facebook icon-default text-info"></a></li>
									  <li><a href="#" class="icon icon-circle fa-twitter icon-default text-info"></a></li>
									  <li><a href="#" class="icon icon-circle fa-google-plus icon-default text-info"></a></li>
									  <li><a href="#" class="icon icon-circle fa-linkedin icon-default text-info"></a></li>
									  <li><a href="#" class="icon icon-circle fa-pinterest icon-default text-info"></a></li>
									</ul><a href="#" class="btn btn-primary offset-top-10 offset-xs-top-0">Read more</a>
						  </div>
						   <div class="card-footer" style="display:none;" id="comm_sec<?php echo $List['p_id']; ?>">
				<div class="row">
				<hr>
				<span class="col-md-2 col-xs-2 comm-img"><img class="img-responsive" src="<?php echo base_url(); ?>assets/vendor/img/coment-user.png"></span>
					<form action="<?php echo base_url('motivation/addcomment'); ?>" method="post">
					<div class="col-md-8 col-xs-8">
					<input type="hidden" id="post_id" name="post_id"  value="<?php echo $List['p_id']; ?>">
					<textarea type="text" id="comment" name="comment" class="form-control pad-lef" placeholder="Enter your Comment" rows="1"></textarea>
					</div>
					<div class="col-md-2 col-xs-2">
						<div class="file btn btn-sm btn-primary ">
							<button type="submit">Send</button>
							
						</div>
						</div>
					</form>
				
				</div>
			</div>
						</div>
					  </div>
			<?php } ?>
			  
			<?php } ?>
			<!--second post-->
			 
			  <!--third post-->
			  <div class="post post-variant-1 box mar-t30">
                <div>
                  <div class="post-media-wrap">
					<div >
					<iframe width="100%" height="315" src="<?php echo base_url('assets/files/video.mp4'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
                  </div>
                  <div class="post-content-wrap">
                    <div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by <a href="">Lorem Ipsum</a></span></div>
                    <h4><a href="#">Lorem Ipsum is simply dummy text </a></h4>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged...</p>
                    <ul class="post-meta list-inline list-inline-md">
                      <li><a href="#" class="post-meta-date small">Dec 15, 2016</a></li>
                      <li><a href="#" class="post-meta-comment small">34</a></li>
					   <li><a href="#" class="post-meta-like small">4</a></li>
                      <li><a href="#" class="post-meta-share small">4</a></li>
                    </ul>
                  </div>
                  <hr class="divider offset-none"/>
                  <div class="post-bottom reveal-xs-flex range-xs-justify range-xs-middle">
                            <ul class="list-inline-0">
                              <li><a href="#" class="icon icon-circle fa-facebook icon-default text-info"></a></li>
                              <li><a href="#" class="icon icon-circle fa-twitter icon-default text-info"></a></li>
                              <li><a href="#" class="icon icon-circle fa-google-plus icon-default text-info"></a></li>
                              <li><a href="#" class="icon icon-circle fa-linkedin icon-default text-info"></a></li>
                              <li><a href="#" class="icon icon-circle fa-pinterest icon-default text-info"></a></li>
                            </ul><a href="#" class="btn btn-primary offset-top-10 offset-xs-top-0">Read more</a>
                  </div>
                </div>
              </div>
			  <!--plugin start-->
			  
            </div>
            <div class="cell-md-4">
              <!-- Sidebar-->
              <div class="range offset-top-30 offset-md-top-0">
                
                <div class="cell-sm-8 cell-sm-preffix-2 cell-md-12 cell-md-preffix-0 ">
                  <div class="box text-center">
                    <div class="section-xs-size">
                      <h5>Follow us</h5>
                                    <ul class="list-inline-0">
                                      <li><a href="#" class="icon icon-circle fa-facebook icon-default text-info"></a></li>
                                      <li><a href="#" class="icon icon-circle fa-twitter icon-default text-info"></a></li>
                                      <li><a href="#" class="icon icon-circle fa-google-plus icon-default text-info"></a></li>
                                      <li><a href="#" class="icon icon-circle fa-linkedin icon-default text-info"></a></li>
									  <li><a data-toggle="modal" data-target="#myModal" class="icon icon-circle  fa-plus icon-default text-info"></a></li>
                                      
                                    </ul>
                    </div>
                    <hr class="divider offset-none">
                    <div class="section-xs-size">
                      <h5>Newsletter</h5>
                      <p>Sign up for the latest news on this startup further process and when the product will be released!</p>
                      
                      <form data-result-class="rd-mailform-validate" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" class="rd-mailform form-inline-flex form-inline reveal-xs-flex">
                        <input type="text" name="email" data-constraints="@NotEmpty @Email" placeholder="Your e-mail">
                        <button class="btn btn-primary offset-top-15 offset-xs-top-0"> Subscribe</button>
                      </form>
                      
                    </div>
                    <div class="rd-mailform-validate">
                      <form action="#" class="form-inline-custom form-inline-flex reveal-xs-flex">
                        <div class="form-group offset-bottom-0">
                          <input type="text" name="email" placeholder="Search..." class="form-control">
                        </div>
                        <button type="submit" class="btn btn-sm btn-icon material-icons-search btn-primary offset-top-10 offset-xs-top-0"></button>
                      </form>
                    </div>
                  </div>
                </div>
                
                
               
              </div>
            </div>
          </div>
        </div>
        
        
      </main>
	  <script>
	  <?php foreach($post_images as $List){ ?>
		 
			$(document).ready(function(){
			$("#comm_expand<?php echo $List['p_id']; ?>").click(function(){
			$("#comm_sec").toggle();
			});
			});
	  <?php } ?>
		 </script>
		
  <script>
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
