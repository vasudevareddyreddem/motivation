 <?php //echo '<pre>';print_r($post_images); 
		$cnt=1;foreach($post_images as $list){
			$path =isset($list['p_list'][0]['imgname'])?$list['p_list'][0]['imgname']:'';
				$ext = pathinfo($path, PATHINFO_EXTENSION);
				 if(count($list['p_list'])>0 && $ext =='png' || $ext =='jpg' || $ext =='jpeg'){
				 if($cnt<=4){ ?>
						<style>
						.owl-controls{
						display:none;
						}
						</style>
				 <?php }else if($cnt>4){ ?>
				 <style>
						.owl-controls{
						display:block;
						}
						</style>
				 <?php }
				$cnt++; }

		}?>
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
<main class="page-content offset-top-30" >
   <div id="fb-root"></div>
   <!-- Owl Carousel-->
  
   <div data-items="1" data-xs-items="2" data-md-items="3" data-lg-items="4" data-loop="true" data-nav="true" data-mouse-drag="true" data-margin="30px" data-autoplay="true" class="owl-carousel owl-carousel-flex offset-top-0" >
      <?php foreach($post_images as $List){
				$path =isset($List['p_list'][0]['imgname'])?$List['p_list'][0]['imgname']:'';
				$ext = pathinfo($path, PATHINFO_EXTENSION);  ?>
				
      <?php if(count($List['p_list'])>0 && $ext =='png' || $ext =='jpg' || $ext =='jpeg'){ ?>
      <div class="owl-item">
         <div class="post post-variant-1 post-variant-1-short box post-variant-1-equal-height">
            <div>
               <div class="post-media-wrap">
			   <a href="<?php echo base_url('motivation/singlepost/'.base64_encode($List['p_id'])); ?>">
			   
				 <img src="<?php echo base_url('assets/files/'.$List['p_list'][0]['imgname']); ?>"  alt="" class="img-responsive post-image"/>
			
               </div>
               <div class="post-content-wrap">
                  <div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by <a href="#"><?php echo isset($List['name'])?$List['name']:''; ?></a></span></div>
                  <h5><a href="#">
				  <?php 
				  
				  if(strlen($List['text'])>50){
					    echo   substr($List['text'], 0, 50).'...'; 
				  }else{
					echo $List['text']; 
				  }
				 ?>
				  </a></h5>
               </div>
               <div class="post-content-bottom">
                  <ul class="post-meta list-inline list-inline-md">
                     <li><a href="javascript:void(0)" class="post-meta-date small"><?php echo date('M d,  Y',strtotime(htmlentities($List['create_at'])));?></a></li>
                     <li><a href="javascript:void(0)" class="post-meta-comment small"><?php if(count($List['comment_list'])>0){ echo count($List['comment_list']) ; } ?></a></li>
                  </ul>
               </div>
            </div></a>
         </div>
      </div>
      <?php } ?>
      <?php } ?>
   </div>
   <!--Posts-->
   <div class="shell">
      <div class="range">
	    <?php if(count($post_images)>0){ ?>
         <div class="cell-sm-8 cell-sm-preffix-2 cell-md-8 cell-md-preffix-0">
            <?php foreach($post_images as $List){?>
            <?php if(count($List['p_list'])==0){ ?>
            <div class="post post-variant-1 box mar-t30">
               <div>
                  <div class="post-content-wrap">
                     <a href="#"><h4>
                     
                      
						 <?php if(strstr($List['text'], 'www.youtube.com/')==true){ ?>
						 
						 
							<iframe height="300px" width="100%" src="<?php echo isset($List['text'])?$List['text']:''; ?>?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						 <?php }else if(strstr($List['text'], 'http://')==true){ ?>
							  <a href="<?php echo isset($List['text'])?$List['text']:''; ?>" target="_blank"><?php echo isset($List['text'])?$List['text']:''; ?>
						<?php  }else{ ?>
							   <a href="<?php echo base_url('motivation/singlepost/'.base64_encode($List['p_id'])); ?>"><?php echo isset($List['text'])?$List['text']:''; ?>
						  <?php } ?>
				
						 
						 </a>
                        </h4></a>
                        <div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by 
                     <a href="javascript:void(0)"><?php echo isset($List['name'])?$List['name']:''; ?></a></span></div>
                     <ul class="post-meta list-inline list-inline-md">
                        <li><a href="#" class="post-meta-date small"><?php echo date('M d,  Y',strtotime(htmlentities($List['create_at'])));?></a></li>
                         <li  onclick="showhide('<?php echo $List['p_id']; ?>');"><a  class="post-meta-comment small"><?php if(count($List['comment_list'])>0){ echo count($List['comment_list']) ; } ?></a></li>
                        <li><a href="javascript:void(0)" onclick="likecount('<?php echo $List['p_id']; ?>');" class="post-meta-like small"><span id="count<?php echo $List['p_id']; ?>"><?php if($List['like_count']>0){ echo $List['like_count']; } ?> </span></a></li>

                     </ul>
                  </div>
                  <hr class="divider offset-none"/>
                 <div class="post-bottom reveal-xs-flex range-xs-justify range-xs-middle">
					<?php
					$title=urlencode($List['text']);
					if(count($List['p_list'])>0){
					$url=urlencode(base_url('assets/files/'.$List['p_list'][0]['imgname']));
					//$url=urlencode('http://test.shofus.com/uploads/products/0.83075400%201518082694wallet1.jpg');
					}else{
					$url=urlencode('http://whatslyf.com/');	
					}
					$summary=urlencode($List['text']);
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
						</div></li>
						<li><div class="col-md-4">	
								<a onClick="window.open('http://pinterest.com/pin/create/bookmarklet/?url=<?php echo $url; ?>&is_video=false&description=<?php echo $summary;?>&media=<?php echo $url;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/pinterest.png">
								<span>Pinterest</span></a>
						</div></li>
					</div>
				</ul>
        </div>
        
      </div>
      
    </div>
  </div>
                     <a href="<?php echo base_url('motivation/singlepost/'.base64_encode($List['p_id'])); ?>" class="btn btn-primary offset-top-10 offset-xs-top-0">Read more</a>
                  </div>
                  <div class="card-footer"  id="myDIV<?php echo $List['p_id']; ?>"  style="display:none">
                     <div class="pad-30">
                        <div class="row">
                           <hr>
                           <span class=" sm-hide col-md-2 col-xs-2 comm-img"><img class="img-responsive" src="<?php echo base_url(); ?>assets/vendor/img/coment-user.png"></span>
                           <form action="<?php echo base_url('motivation/addcomment'); ?>" method="post">
                              <div class="col-md-8 col-xs-12">
                                 <input type="hidden" id="post_id" name="post_id"  value="<?php echo $List['p_id']; ?>">
                                 <textarea type="text" id="comment" name="comment" class="form-control pad-lef" placeholder="Enter your Comment" rows="1"></textarea>
                              </div>
                              <div class="col-md-2 col-xs-2 mobi-res">
                                 <div class="file  ">
                                    <button class="btn btn-sm btn-primary" type="submit">Send</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <hr>
                        
						  <?php foreach($List['comment_list'] as $li){ ?>
                        <div class="row">
						<br>
                           <div class="media">
                              <div class="media-left">
                                 <img src="http://fakeimg.pl/50x50" class="media-object" style="width:40px">
                              </div>
                              <div class="media-body">
                              
								 <h6 class="h6-comments"><?php echo $li['comment']; ?></h6>
                                 <div class="komen">
                                    <?php echo date('M d,  Y',strtotime(htmlentities($li['create_at'])));?>
                                 </div>
                              </div>
                           </div>
                        </div>
					<?php } ?>
					
                     </div>
					 <br>
                  </div>
               </div>
            </div>
            <?php }else{ ?>
            <?php //echo '<pre>';print_r($List);exit; ?>
            <div class="post post-variant-1 box mar-t30">
               <div>
			    <?php 
					$path = $List['p_list'][0]['imgname'];
					$ext = pathinfo($path, PATHINFO_EXTENSION);
				if(count($List['p_list'])>=1 && $ext !='png' && $ext !='jpg' && $ext !='jpeg'){ ?>
				 	<video autoplay src="<?php echo base_url('assets/files/'.$List['p_list'][0]['imgname']); ?>" width="100%" type="video/<?php echo $ext; ?>" controls></video>

				<?php }else{ ?>
					<div class="post-media-wrap">
						<div id="gallery<?php echo $List['p_id']; ?>"></div>
                  </div>
				<?php  } ?>
                  <div class="post-content-wrap">
                     <div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by <a href="javascript:void(0)"><?php echo isset($List['name'])?$List['name']:''; ?></a></span></div>
                     <h4> <a href="<?php echo base_url('motivation/singlepost/'.base64_encode($List['p_id'])); ?>"><?php echo isset($List['text'])?$List['text']:''; ?></a></h4>
                     <ul class="post-meta list-inline list-inline-md">
                        <li><a href="#" class="post-meta-date small"><?php echo date('M d,  Y',strtotime(htmlentities($List['create_at'])));?></a></li>
                        <li  onclick="showhide('<?php echo $List['p_id']; ?>');"><a  class="post-meta-comment small"><?php if(count($List['comment_list'])>0){ echo count($List['comment_list']) ; } ?></a></li>
                        <li><a href="javascript:void(0)" onclick="likecount('<?php echo $List['p_id']; ?>');" class="post-meta-like small"><span id="count<?php echo $List['p_id']; ?>"><?php if($List['like_count']>0){ echo $List['like_count']; } ?> </span></a></li>
                     
                     </ul>
                  </div>
                  <hr class="divider offset-none"/>
                  <div class="post-bottom reveal-xs-flex range-xs-justify range-xs-middle">
					
					<?php
					$title=urlencode($List['text']);
					if(count($List['p_list'])>0){
					$url=urlencode(base_url('assets/files/'.$List['p_list'][0]['imgname']));
					//$url=urlencode('http://test.shofus.com/uploads/products/0.83075400%201518082694wallet1.jpg');
					}else{
					$url=urlencode('http://whatslyf.com/');	
					}
					$summary=urlencode($List['text']);
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
						</div></li>
						<li><div class="col-md-4">	
								<a onClick="window.open('http://pinterest.com/pin/create/bookmarklet/?url=<?php echo $url; ?>&is_video=false&description=<?php echo $summary;?>&media=<?php echo $url;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/pinterest.png">
								<span>Pinterest</span></a>
						</div></li>
					</div>
				</ul>
        </div>
        
      </div>
      
    </div>
  </div>
                     <a href="<?php echo base_url('motivation/singlepost/'.base64_encode($List['p_id'])); ?>" class="btn btn-primary offset-top-10 offset-xs-top-0">Read more</a>
                  </div>
                  <div class="card-footer"  id="myDIV<?php echo $List['p_id']; ?>"  style="display:none">
                     <div class="pad-30">
                        <div class="row">
                           <hr>
                           <span class="col-md-2 col-xs-2 comm-img sm-hide"><img class="img-responsive" src="<?php echo base_url(); ?>assets/vendor/img/coment-user.png"></span>
                           <form action="<?php echo base_url('motivation/addcomment'); ?>" method="post">
                              <div class="col-md-8 col-xs-12">
                                 <input type="hidden" id="post_id" name="post_id"  value="<?php echo $List['p_id']; ?>">
                                 <textarea type="text" id="comment" name="comment" class="form-control pad-lef" placeholder="Enter your Comment" rows="1"></textarea>
                              </div>
                              <div class="col-md-2 col-xs-2 mobi-res">
                                 <div class="file  ">
                                    <button class="btn btn-primary btn-sm" type="submit">Send</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <?php foreach($List['comment_list'] as $li){ ?>
						<br>
                        <div class="row">
                           <div class="media">
                              <div class="media-left">
                                 <img src="http://fakeimg.pl/50x50" class="media-object" style="width:40px">
                              </div>
                              <div class="media-body">
                                  <h6 class="h6-comments"><?php echo $li['comment']; ?></h6>
                                 <div class="komen">
                                    <?php echo date('M d,  Y',strtotime(htmlentities($li['create_at'])));?>
                                 </div>
                              </div>
                           </div>
                        </div>
					<?php } ?>
					<br>
                     </div>
                  </div>
               </div>
            </div>
            <?php } ?>
            <?php } ?>
            <!--second post-->
         </div>
		 <?php } ?>
         <div class="cell-md-4">
            <!-- Sidebar-->
            <div class="range offset-top-30 offset-md-top-0">
               <div class="cell-sm-8 cell-sm-preffix-2 cell-md-12 cell-md-preffix-0 ">
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
                        <form  method="post" action="<?php echo base_url('motivation/newsletter'); ?>" class="form-inline-flex form-inline reveal-xs-flex ">
                        <input style="width:90%" type="email" name="email"  placeholder="Your e-mail" required>
                        <button style="font-size:12px;" type="submit" class="btn btn-primary btn-sm offset-top-15 offset-xs-top-0" style=""> Subscribe</button>
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
			<br>
			<div class="range offset-top-30 offset-md-top-0 ">
               <div class="cell-sm-8 cell-sm-preffix-2 cell-md-12 cell-md-preffix-0 ">
                   <a href="http://offerspot.in/" target="_blank"><div class="box text-center ">
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
$('video').each(function(){
    if ($(this).is(":in-viewport")) {
        $(this)[0].play();
    } else {
        $(this)[0].pause();
    }
})
function showhide(id) {
    var x = document.getElementById("myDIV"+id);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
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
						jQuery('#count'+id).empty();
						jQuery('#count'+id).prepend(data.msg);
					
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
