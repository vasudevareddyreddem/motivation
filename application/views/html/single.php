<main class="page-content">
        <div id="fb-root"></div>
        <div class="shell">
          <div class="range">
            <div class="cell-sm-8 cell-sm-preffix-2 cell-md-8 cell-md-preffix-0">
              <div class="box section-bottom-15">
			  
                <div class="post post-default section-top-30 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                  
                  <h4><?php echo isset($post_images['text'])?$post_images['text']:''; ?></h4>
				  <?php if(count($post_images['p_list'])>0){ ?>
                     <div id="gallery<?php echo $post_images['p_id']; ?>"></div>
					<?php } ?>
                  <div class="post-meta element-groups-15">
                    <div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by <a href="">
					<?php echo isset($post_images['name'])?$post_images['name']:''; ?></a></span></div>
					<a href="#" class="post-meta-date small">
					<?php echo date('M d,  Y',strtotime(htmlentities($post_images['create_at'])));?></a>
					<a href="#comments" class="post-meta-comment small"><?php if(count($post_images['comment_list'])>0){ echo count($post_images['comment_list']) ; } ?></a>
					<a href="javascript:void(0)" onclick="likecount('<?php echo $post_images['p_id']; ?>');" class="post-meta-like small"><span id="count"><?php if($post_images['like_count']>0){ echo $post_images['like_count']; } ?> </span></a>

                  </div><img src="img/p2.jpg" width="770" height="480" alt="" class="img-responsive post-image"/>
                  
                  <div class="offset-top-20 reveal-sm-flex range-sm-justify range-xs-middle">
                   
                    <div class="offset-top-15 offset-sm-top-0">
                              <ul class="list-inline-0">
                                <li><a href="#" class="icon icon-circle fa-facebook icon-default text-info"></a></li>
                                <li><a href="#" class="icon icon-circle fa-twitter icon-default text-info"></a></li>
                                <li><a href="#" class="icon icon-circle fa-google-plus icon-default text-info"></a></li>
                                <li><a href="#" class="icon icon-circle fa-linkedin icon-default text-info"></a></li>
                                <li><a href="#" class="icon icon-circle fa-pinterest icon-default text-info"></a></li>
                              </ul>
                    </div>
                  </div>
                </div>
				
              <div class="row">
                           <hr>
                           <span class="col-md-2 col-xs-2 comm-img"><img class="img-responsive" src="<?php echo base_url(); ?>assets/vendor/img/coment-user.png"></span>
                           <form action="<?php echo base_url('motivation/addcomment'); ?>" method="post">
                              <div class="col-md-8 col-xs-8">
                                 <input type="hidden" id="post_id" name="post_id"  value="<?php echo $post_images['p_id']; ?>">
                                 <textarea type="text" id="comment" name="comment" class="form-control pad-lef" placeholder="Enter your Comment" rows="1"></textarea>
                              </div>
                              <div class="col-md-2 col-xs-2">
                                 <div class="file btn btn-sm btn-primary ">
                                    <button class="btn btn-sm btn-primary" type="submit">Send</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                <hr class="divider">
                <div class="section-top-15 section-bottom-15 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                  <!--Comments-->
                  <h5>3 Responses</h5>
                  <div id="comments">
                   
				
					    <div class="comment bg-ghost-white section-xs-size">
							<?php $c=0;foreach($post_images['comment_list'] as $li){ ?>
							<?php if (($c % 2) == 0) { ?>
                      <div class="text-sm-left">
							<?php }else{?>
							<div class="comment comment-reply text-sm-left">
							<?php } ?>
                        <div class="unit unit-sm-horizontal unit-md-horizontal unit-lg-horizontal unit-xl-horizontal unit-top">
                          <div class="unit-left"><img src="img/coment-user.png" width="80" alt="" class="max-width-none img-circle img-responsive"/></div>
                          <div class="unit-body">
                            <div class="range range-xs-justify range-xs-bottom text-xs-left">
                              <div class="col-sm-10">
                                <ul class="list-inline list-inline-md">
                                  <!--<li class="small">Posted by <a href="">Lorem Ipsum</a>
                                  </li>-->
                                  <li><span class="icon-date"></span><span class="text-primary small"><?php echo date('M d,  Y',strtotime(htmlentities($li['create_at'])));?></span></li>
                                </ul>
                              </div>
                              <div class="col-sm-2 text-right"></div>
                            </div>
                            <p>  <?php echo $li['comment']; ?></p>
                          </div>
                        </div>
                      </div>
					    <hr class="divider offset-top-30"/>
					   <?php $c++;} ?>
                      </div>
					   
                      
                    </div>
                 
                  </div>
                </div>
                <hr class="divider">
                <div id="reply" class="section-top-15 section-bottom-15 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                  <h5>Leave a Reply</h5>
                  <p class="small">Your email address will not be published.<br class="veil-sm"> Required fields are marked *
                  </p>
                  <!-- RD Mailform-->
                  <form data-result-class="rd-mailform-validate-2" data-form-type="contact" method="post" action="" class="rd-mailform">
                    <input type="text" id="name" name="name"  placeholder="Your name *" required>
                    <input type="text" id="email" name="email"  placeholder="Your e-mail *" required>
                    <textarea name="message" id="message" placeholder="Comments *" required></textarea>
                    <div class="text-md-left offset-top-30">
                      <button class="btn btn-primary">Submit Comment</button>
                    </div>
                  </form>
                  <!-- Rd Mailform result field-->
                  <div class="rd-mailform-validate-2"></div>
                </div>
              </div>
            </div>
            <div class="cell-md-4">
              <!-- Sidebar-->
              <div class="range offset-top-30 offset-md-top-0">
                
                <div class="cell-sm-8 cell-sm-preffix-2 cell-md-12 cell-md-preffix-0 offset-top-30">
                  <div class="box text-center">
                    <div class="section-xs-size">
                      <h5>Follow us</h5>
                                    <ul class="list-inline-0">
                                      <li><a href="#" class="icon icon-circle fa-facebook icon-default text-info"></a></li>
                                      <li><a href="#" class="icon icon-circle fa-twitter icon-default text-info"></a></li>
                                      <li><a href="#" class="icon icon-circle fa-google-plus icon-default text-info"></a></li>
                                      <li><a href="#" class="icon icon-circle fa-linkedin icon-default text-info"></a></li>
                                      <li><a href="#" class="icon icon-circle fa-pinterest icon-default text-info"></a></li>
                                    </ul>
                    </div>
                    <hr class="divider offset-none">
                    <div class="section-xs-size">
                      <h5>Newsletter</h5>
                      <p>Sign up for the latest news on this startup further process and when the product will be released!</p>
                      <!-- RD Mailform-->
                      <form data-result-class="rd-mailform-validate" data-form-type="subscribe" method="post" action="<?php echo base_url('motivation/newsletter'); ?>" class="rd-mailform form-inline-flex form-inline reveal-xs-flex">
                        <input type="text" name="email" data-constraints="@NotEmpty @Email" placeholder="Your e-mail">
                        <button class="btn btn-primary offset-top-15 offset-xs-top-0"> Subscribe</button>
                      </form>
                      <!-- Rd Mailform result field-->
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
function likecount(id){
	if(id!=''){
		 jQuery.ajax({
					url: "<?php echo site_url('motivation/likecount');?>",
					data: {
						postid: id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
						jQuery('#count').empty();
						jQuery('#count').prepend(data.msg);
					
				 }
				});
			}
}
</script>