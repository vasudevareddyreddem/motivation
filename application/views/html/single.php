<?php //echo '<pre>';print_r($post_images); exit ; ?>
<main class="page-content">
        <div id="fb-root"></div>
        <div class="shell">
          <div class="range">
            <div class="cell-sm-8 cell-sm-preffix-2 cell-md-8 cell-md-preffix-0">
              <div class="box section-bottom-15">
                <div class="post post-default section-top-30 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                  
                  <h4><?php echo isset($post_images['title'])?$post_images['title']:''; ?></h4>
                  <div class="post-meta element-groups-15">
					<div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by <a href="">
					<?php echo isset($post_images['name'])?$post_images['name']:''; ?></a></span></div>	
					<a href="#" class="post-meta-date small">
					<?php echo date('M d,  Y',strtotime(htmlentities($post_images['create_at'])));?></a>
					<a href="#comments" class="post-meta-comment small"><?php if(count($post_images['comment_list'])>0){ echo count($post_images['comment_list']) ; } ?></a>
					<a href="javascript:void(0)" onclick="likecount('<?php echo $post_images['p_id']; ?>');" class="post-meta-like small"><span id="count"><?php if($post_images['like_count']>0){ echo $post_images['like_count']; } ?> </span></a>
                  </div>
				  <img  class="img-responsive post-image"/>
				    <?php 
					$path = isset($post_images['p_list'][0]['imgname'])?$post_images['p_list'][0]['imgname']:'';
					$ext = pathinfo($path, PATHINFO_EXTENSION);
				if(count($post_images['p_list'])>=1 && $ext !='png' && $ext !='jpg'&& $ext !='jpeg'){ ?>
				 	<video autoplay src="<?php echo base_url('assets/files/'.$post_images['p_list'][0]['imgname']); ?>" width="100%" type="video/<?php echo $ext; ?>" controls controlsList="nodownload"></video>

				<?php }else{ ?>
						 <div id="gallery<?php echo $post_images['p_id']; ?>" ></div>
				<?php  } ?>
				  
                  <?php if(strstr($post_images['text'], 'www.youtube.com/')==true){ 
				  
				  $video_id = explode("?v=", $post_images['text']);
				  ?>
							<iframe  height="300px" width="100%" src="https://www.youtube.com/embed/<?php echo $video_id[1]; ?>?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

					<?php  }else{ ?>
							<p><?php echo isset($post_images['text'])?$post_images['text']:''; ?></p>
					<?php } ?>
                  
                  <div class="offset-top-20 reveal-sm-flex range-sm-justify range-xs-middle">
                   
                    <div class="offset-top-15 offset-sm-top-0">
					<?php
					$title=urlencode($post_images['text']);
					if(count($post_images['p_list'])>0){
					//$url=urlencode(base_url('assets/files/'.$post_images['p_list'][0]['imgname']));
					$url=urlencode('http://test.shofus.com/uploads/products/0.83075400%201518082694wallet1.jpg');
					}else{
					$url=urlencode('http://whatslyf.com/');	
					}
					$summary=urlencode($post_images['text']);
					$image=$url;
					?>
                              <ul class="list-inline-0">
						<li><a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;p[images][0]=<?php echo $image;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" class="icon icon-circle fa-facebook icon-default text-info"></a></li>
						<li><a onClick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>&submitted-image-url=<?php echo $url; ?>&title=<?php echo $title;?>&summary=<?php echo $summary;?>&source=<?php echo $summary;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" class="icon icon-circle fa-linkedin icon-default text-info"></a></li>
						<li><a data-toggle="modal" data-target="#sharemyModal" class="icon icon-circle  fa-plus icon-default text-info"></a></li>
					</ul>
					<div class="modal fade" id="sharemyModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-body">
           <input class="form-control" type="text" placeholder="Search for Follow " id="myInput1" onkeyup="myFunction1()"><br>
			  <ul class="" id="myUL1">
					<div class="row icon-si ">
						<li>
						<div class="col-md-4">	
								<a onClick="window.open('https://plus.google.com/share?url=<?php echo $url; ?>&amp;p[images][0]=<?php echo $image;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)"><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/gplus.png">
								<span>Google+</span></a>

						</div>
						</li>
						<li><div class="col-md-4">	
								<a onClick="window.open('http://twitter.com/share?text=<?php echo $title; ?>&url=<?php echo $url;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/twitter.png">
								<span>Twitter</span></a>
						</div>
						</li>
						
						<li>
						<div class="col-md-4">	
								<a onClick="window.open('http://pinterest.com/pin/create/bookmarklet/?url=<?php echo $url; ?>&is_video=false&description=<?php echo $summary;?>&media=<?php echo $url;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/pinterest.png">
								<span>Pinterest</span></a>
						</div>
						</li>
						</div>
						<div class="row icon-si ">
						<li>
						<div class="col-md-4">	
								<a onClick="window.open('http://www.yummly.com/urb/verify?url=<?php echo $url; ?>&amp;title=<?php echo $title;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/yummly.png">
								<span>yummly</span></a>
						</div>
						</li>
						
						<li>
						<div class="col-md-4">	
								<a onClick="window.open('http://vkontakte.ru/share.php?url=<?php echo $url; ?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/vk.png">
								<span>vk</span></a>
						</div>
						</li>
						<li>
						<div class="col-md-4">	
								<a onClick="window.open('http://www.tumblr.com/share/link?url=<?php echo $url; ?>&amp;title=<?php echo $title; ?> Share Buttons','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/tumblr.png">
								<span>tumblr</span></a>
						</div>
						</li>
						
					</div>
					<div class="row icon-si ">
						<li>
						<div class="col-md-4">	
								<a onClick="window.open('http://www.stumbleupon.com/submit?url=<?php echo $url; ?>&amp;&title=<?php echo $title;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/stumbleupon.png">
								<span>stumbleupon</span></a>
						</div>
						</li>
						
						<li>
						<div class="col-md-4">	
								<a onClick="window.open('http://reddit.com/submit?url=<?php echo $url; ?>&amp;title=<?php echo $title;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/reddit.png">
								<span>reddit</span></a>
						</div>
						</li>
						<li>
						<div class="col-md-4">	
								<a onClick="window.open('http://www.digg.com/submit?url=<?php echo $url; ?>&amp;&title=<?php echo $title;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/diggit.png">
								<span>diggit</span></a>
						</div>
						</li>
						
					</div>
					<div class="row icon-si ">
						<li>
						<div class="col-md-4">	
								<a onClick="window.open('https://bufferapp.com/add?url=<?php echo $url; ?>&amp;&title=<?php echo $title;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/buffer.png">
								<span>buffer</span></a>
						</div>
						</li>
						
						<li>
						<div class="col-md-4">	
								<a onClick="window.open('https://share.flipboard.com/bookmarklet/popout?v=2&title=<?php echo $title;?>&url=<?php echo $url; ?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/Flipboard.png">
								<span>FlipBoard</span></a>
						</div>
						</li>
						<li>
						<div class="col-md-4">	
								<a onClick="window.open('https://myspace.com/post?u=<?php echo $url; ?>&amp;&t=<?php echo $title;?>&amp;&c=<?php echo $summary;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/myspace.png">
								<span>Myspace</span></a>
						</div>
						</li>
						
					</div>
					<div class="row icon-si ">
						<li>
						<div class="col-md-4">	
								<a onClick="window.open('http://www.livejournal.com/update.bml?subject=<?php echo $title; ?>&event=<?php echo $url;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/livejournal.png">
								<span>LiveJournal</span></a>
						</div>
						</li>
						
						<li>
						<div class="col-md-4">	
								<a onClick="window.open('https://www.blogger.com/blog-this.g?u=<?php echo $url; ?>&amp;&n=<?php echo $title;?>&amp;&t=<?php echo $summary;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/blogger.png">
								<span>Blogger</span></a>
						</div>
						</li>
						
					</div>
				</ul>
        </div>
        
      </div>
      
    </div>
  </div>
                    </div>
                  </div>
                </div>
                  <div class="row inset-md-left-30 inset-md-right-30 mobile-pad">
                           <hr>
                           <span class="col-md-2 col-xs-2 comm-img sm-hide"><img class="img-responsive" src="<?php echo base_url(); ?>assets/vendor/img/coment-user.png"></span>
                           <form action="<?php echo base_url('motivation/addcomment'); ?>" method="post">
                              <div class="col-md-8 col-xs-12">
                                 <input type="hidden" id="post_id" name="post_id"  value="<?php echo $post_images['p_id']; ?>">
                                 <textarea type="text" id="comment" name="comment" class="form-control pad-lef" placeholder="Enter your Comment" rows="1" required></textarea>
                              </div>
                              <div class="col-md-2 col-xs-2 mobi-res">
                                 <div class="file  ">
                                    <button class="btn btn-sm btn-primary" type="submit">Send</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                <hr class="divider">
                <?php if(count($post_images['comment_list'])>0){ ?>
                <div class="section-top-15 section-bottom-15 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                  <!--Comments-->
                  <h5><?php echo count($post_images['comment_list']);?> Responses</h5>
                  <div id="comments">
					    <div class="comment bg-ghost-white section-xs-size">
						<!--LOOP-->
						
						 <?php foreach($post_images['comment_list'] as $lis){ ?>
								  <div class="text-sm-left">
									<div class="unit unit-sm-horizontal unit-md-horizontal unit-lg-horizontal unit-xl-horizontal unit-top">
									  <div class="unit-left"><img src="<?php echo base_url(); ?>assets/vendor/img/coment-user.png" width="80" alt="" class="max-width-none img-circle img-responsive"></div>
									  <div class="unit-body">
										<div class="range range-xs-justify range-xs-bottom text-xs-left">
										  <div class="col-sm-10">
											<ul class="list-inline list-inline-md">
											  <!--<li class="small">Posted by <a href="">Lorem Ipsum</a>
											  </li>-->
											  <li><span class="icon-date"></span><span class="text-primary small"><?php echo date('M d,  Y',strtotime(htmlentities($lis['create_at'])));?></span></li>
											</ul>
										  </div>
										  
										</div>
										<p> <?php echo $lis['comment']; ?></p>
									  </div>
									</div>
								  </div>
						  <hr class="divider offset-top-30">
						 
					 <?php } ?>
                      </div>
					  <hr class="divider offset-top-30">
                     
                      
                    </div>
                 
                  
                </div>
				<?php } ?>
                <hr class="divider">
                <div id="reply" class="section-top-15 section-bottom-15 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                  <h5>Leave a Reply</h5>
                  <p class="small">Your email address will not be published.<br class="veil-sm"> Required fields are marked *
                  </p>
                  <!-- RD Mailform-->
                  <form data-result-class="rd-mailform-validate-2" data-form-type="contact" method="post" action="<?php echo base_url('motivation/postrquestcommit'); ?>" class="">
                    <input type="hidden" id="post_id" name="post_id" value="<?php echo $post_images['p_id']; ?>" >
                    <input type="text" id="name" name="name" class="form-control"   placeholder="Your name *" required><br>
                    <input type="text" id="email" name="email" class="form-control"   placeholder="Your e-mail *" required><br>
                    <textarea name="message" id="message" class="form-control"  placeholder="Comments *" required></textarea><br>
                    <div class="text-md-left offset-top-30">
                      <button type="submit" class="btn btn-primary">Submit Comment</button>
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
                          <li><a href="https://www.facebook.com/Whats-lyf-1952309441763306/" target="_blank" class="icon icon-circle fa-facebook icon-default text-info"></a></li>
                                      <li><a href="https://twitter.com/whats_lyf" target="_blank" class="icon icon-circle fa-twitter icon-default text-info"></a></li>
                                      <li><a href="https://www.linkedin.com/in/whats-lyf-50a830156/" target="_blank" class="icon icon-circle fa-linkedin icon-default text-info"></a></li>
                                      <li><a href="https://www.pinterest.com.au/whatslyf/" target="_blank" class="icon icon-circle fa-pinterest icon-default text-info"></a></li>
                                     <li><a data-toggle="modal" data-target="#myModal" class="icon icon-circle  fa-plus icon-default text-info"></a></li>
                        </ul>
                                
                    </div>
                    <hr class="divider offset-none">
                    <div class="section-xs-size">
                      <h5>Newsletter</h5>
                      <p>Sign up for the latest news on this startup further process and when the product will be released!</p>
                      <!-- RD Mailform-->
                         <form  method="post" action="<?php echo base_url('motivation/newsletter'); ?>" class="form-inline-flex form-inline reveal-xs-flex ">
                        <input style="width:90%" type="email" name="email"  placeholder="Your e-mail" required>
                        <button style="font-size:12px;" type="submit" class="btn btn-primary btn-sm offset-top-15 offset-xs-top-0" style=""> Subscribe</button>
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
			  <br>
			<div class="range offset-top-30 offset-md-top-0 ">
               <div class="cell-sm-8 cell-sm-preffix-2 cell-md-12 cell-md-preffix-0 ">
                  <a href="http://offerspot.in/" target="_blank"> <div class="box text-center ">
					<img class="img-responsive" src="<?php echo base_url(); ?>assets/vendor/img/sideadd.png">
                  </div></a>
               </div>
            </div>
			<br>
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
   function myFunction1() {
       var input, filter, ul, li, a, i;
       input = document.getElementById("myInput1");
       filter = input.value.toUpperCase();
       ul = document.getElementById("myUL1");
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