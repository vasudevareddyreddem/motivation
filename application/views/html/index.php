<?php //echo '<pre>';print_r($post_images); 
   if(isset($post_images) && count($post_images)>0){
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
   
   }
   
   }?>
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
<main class="page-content offset-top-30" >
   <div id="fb-root"></div>
   <?php if(isset($post_images) && count($post_images)>0){ ?>
   <div data-items="1" data-xs-items="2" data-md-items="3" data-lg-items="4" data-loop="true" data-autoplay="true" data-nav="true" data-mouse-drag="true" data-margin="30px"  class="owl-carousel owl-carousel-flex offset-top-0" >
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
            </div>
            </a>
         </div>
      </div>
      <?php } ?>
      <?php } ?>
   </div>
   <?php } ?>
   <div class="shell ">
      <div class="range">
         <div class="cell-md-3 sm-hide">
            <div class="card hovercardnav ">
               <div class="nav-pills nav-stacked" data-spy="affix" data-offset-top="500">
                  <?php if($this->session->userdata('userdetails'))
                     { ?>
                  <div class="card hovercard pad-20">
                     <div class="cardheader" style="background:#d30f61">
                     </div>
                     <div class="avatar">
                        <img alt="user" src="<?php echo base_url(); ?>assets/vendor/img/user-profile.png">
                     </div>
                     <div class="title">
                        <h6><?php echo isset($user_details['name'])?$user_details['name']:''; ?></h6>
                     </div>
                     <div class="profile-usermenu">
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
                           <li>
                              <a href="javascript:void(0)">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              Profile </a>
                           </li>
                           <li>
                              <a href="javascript:void(0)javascript:void(0)">
                              <i class="fa fa fa-globe" aria-hidden="true"></i>
                              Notifications </a>
                           </li>
                           <li>
                              <a href="javascript:void(0)">
                              <i class="fa fa-cogs" aria-hidden="true"></i>
                              Settings </a>
                           </li>
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
         <div class="cell-sm-6 cell-sm-preffix-2 cell-md-6 cell-md-preffix-0">
            <div id="divContainer">
            <div class="box" style="padding:10px;">
			<?php if(!$this->session->userdata('userdetails')){?>
				<div onclick="prelogin();"><div class="mask-for-disable" >
			<h4 class="card-title">Share your  photo, video or idea</h4>
            <form id="imagespost" name="imagespost" action="<?php echo base_url('motivation/imagepost'); ?>" method="post" enctype="multipart/form-data">
               <input class="form-control border-input-sty" type="text" placeholder="Title" id="title" name="title"  value="" required>
               <textarea style="border-radius:0" class="form-control bg-white border-radius-none" placeholder="What are you doing right now?" id="content" name="content" required></textarea>
               <button style="margin-top:10px;" type="submit" class="btn btn-sm btn-primary pull-right"><i class="fa fa-share"></i> Post</button>
            </form>
            <div class="row" style="margin-top:10px;">
               <form id="addimages" name="addimages" action="<?php echo base_url('motivation/addimage'); ?>" method="post" enctype="multipart/form-data">
                  <ul class="col-md-1 col-xs-1 col-sm-1" style="width:80px;">
                     <li class="image-upload">
                        <label for="imagesupload">
                        <i class="fa fa-camera"></i>
                        </label>
                        <input type="file" id="imagesupload" name="images2" onchange="onchangeimage();" />
                     </li>
                  </ul>
               </form>
               <form id="addimages1" name="addimages1" action="<?php echo base_url('motivation/addimage'); ?>" method="post" enctype="multipart/form-data">
                  <ul class="col-md-1 col-xs-1 col-sm-1" style="width:80px;">
                     <li class="image-upload">
                        <label for="videoimages">
                        <i class="fa fa-video-camera"></i>
                        </label>
                        <input type="file" id="videoimages" name="images3" onchange="onchangevideo();" />
                     </li>
                  </ul>
               </form>
               <form id="#" name="" action="" method="post" enctype="multipart/form-data">
                  <ul class="col-md-1 col-xs-1 col-sm-1" style="width:80px;">
                     <li class="image-upload">
                        <a style="color:#333;cursor:pointer" data-toggle="modal" data-target="#linkmodal">
                        <i class=" fa fa-link" ></i>
                        </a>
                     </li>
                  </ul>
               </form>
            </div>
            </div>
            </div>
			<?php }else{ ?>
			
			
			<h4 class="card-title">Share your  photo, video or idea</h4>
            <form id="imagespost" name="imagespost" action="<?php echo base_url('motivation/imagepost'); ?>" method="post" enctype="multipart/form-data">
               <input class="form-control border-input-sty" type="text" placeholder="Title" id="title" name="title" onchange="savetext(this.value);" value="<?php echo isset($image_list[0]['title'])?$image_list[0]['title']:''; ?>" required>
               <textarea style="border-radius:0" class="form-control bg-white border-radius-none" placeholder="What are you doing right now?" onchange="savetitle(this.value);" id="content" name="content" required><?php echo isset($image_list[0]['text'])?$image_list[0]['text']:''; ?></textarea>
               <button style="margin-top:10px;" type="submit" class="btn btn-sm btn-primary pull-right"><i class="fa fa-share"></i> Post</button>
            </form>
            <div class="row" style="margin-top:10px;">
               <form id="addimages" name="addimages" action="<?php echo base_url('motivation/addimage'); ?>" method="post" enctype="multipart/form-data">
                  <ul class="col-md-1 col-xs-1 col-sm-1" style="width:80px;">
                     <li class="image-upload">
                        <label for="imagesupload">
                        <i class="fa fa-camera"></i>
                        </label>
						<input type="hidden" name="formsavetext" id="formsavetext" value="">
						<input type="hidden" name="formsavetitle" id="formsavetitle" value="">
                        <input type="file" id="imagesupload" name="images2" onchange="onchangeimage();" />
                     </li>
                  </ul>
               </form>
               <form id="addimages1" name="addimages1" action="<?php echo base_url('motivation/addimage'); ?>" method="post" enctype="multipart/form-data">
                  <ul class="col-md-1 col-xs-1 col-sm-1" style="width:80px;">
                     <li class="image-upload">
                        <label for="videoimages">
                        <i class="fa fa-video-camera"></i>
                        </label>
						<input type="hidden" id="formsavetext1" name="formsavetext1" value="">
						<input type="hidden" id="formsavetitle1" name="formsavetitle1" value="">
                        <input type="file" id="videoimages" name="images3" onchange="onchangevideo();" />
                     </li>
                  </ul>
               </form>
               <form id="#" name="" action="" method="post" enctype="multipart/form-data">
                  <ul class="col-md-1 col-xs-1 col-sm-1" style="width:80px;">
                     <li class="image-upload">
                        <a style="color:#333;cursor:pointer" data-toggle="modal" data-target="#linkmodal">
                        <i class=" fa fa-link" ></i>
                        </a>
                     </li>
                  </ul>
               </form>
            </div>
			<?php } ?>
            </div>
            </div>
            <?php if(count($post_images)>0){ ?>
            <div class="box">
               <?php if(isset($image_list) && count($image_list)>0){ ?>
               <div class="row prev">
                  <?php foreach($image_list as $list){ ?>
                  <?php $path = $list['name'];
                     $ext = pathinfo($path, PATHINFO_EXTENSION); 
                     if($ext=="mp4" || $ext=="mp3" ||$ext=="3gpp"){  ?>
                  <div class="col-md-4" style="width:315px;" id="attach_<?php echo $list['id']; ?>">
                     <video src="<?php echo base_url('assets/temp/'.$list['name']);?>" width="300px" type="video/<?php echo $ext; ?>" controls></video>
                     <div onclick="remove_image(<?php echo $list['id']; ?>);" class="pos-ab-close"><i class="fa fa-close"></i></div>
                  </div>
                  <?php }else{ ?>
                  <div class="col-md-2" id="attach_<?php echo $list['id']; ?>">
                     <img class="img-responsive" src="<?php echo base_url('assets/temp/'.$list['name']);?>">
                     <div onclick="remove_image(<?php echo $list['id']; ?>);" class="pos-ab-close"><i class="fa fa-close"></i></div>
                  </div>
                  <?php } ?>
                  <?php } ?>
               </div>
               <?php } ?>
               
            </div>
            <?php foreach($post_images as $List){?>
            <?php if(count($List['p_list'])==0){ ?>
            <div class="post post-variant-1 box mar-t30">
               <div>
                  <div class="post-content-wrap">
                        <h4>
                           <?php if(strstr($List['text'], 'www.youtube.com/')==true){ 
								$video_id = explode("?v=", $List['text']);
						   ?>
                           <iframe height="300px" width="100%" src="https://www.youtube.com/embed/<?php echo isset($video_id[1])?$video_id[1]:''; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                           <?php }else if(strstr($List['text'], 'http://')==true || strstr($List['text'], 'https://')==true){ ?>

                     <a href="<?php echo isset($List['text'])?$List['text']:''; ?>" target="_blank"><?php echo isset($List['text'])?$List['text']:''; ?></a>
                     <?php  }else{ ?>
					
					 <?php 
					  if(strlen($List['text'])>50){
						 echo   substr($List['text'], 0, 150); ?><span id="readless<?php echo $List['p_id']; ?>" onclick="readmoreoption(<?php echo $List['p_id']; ?>);">... read more</span> 
					 <?php  }else{
					  echo $List['text']; 
					  }
					  ?>
					  <span id="readmore<?php echo $List['p_id']; ?>" style="display:none;"><?php if(strlen($List['text']) >= 160){ echo  substr($List['text'],150); } ?><span id="moreless<?php echo $List['p_id']; ?>" onclick="readlessoption(<?php echo $List['p_id']; ?>);">... read Less</span></span>
                     <?php } ?>
                     
                     </h4>
                     <div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by 
                        <a href="javascript:void(0)"><?php echo isset($List['name'])?$List['name']:''; ?></a></span>
                     </div>
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
                                 <input class="form-control" type="text" placeholder="Search for Share " id="myInput1" onkeyup="myFunction1()"><br>
                                 <ul class="" id="myUL1">
                                    <div class="row icon-si ">
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('https://plus.google.com/share?url=<?php echo $url; ?>&amp;p[images][0]=<?php echo $image;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)"><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/gplus.png">
                                             <span>Google+</span></a>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('http://twitter.com/share?text=<?php echo $title; ?>&url=<?php echo $url;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/twitter.png">
                                             <span>Twitter</span></a>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('http://pinterest.com/pin/create/bookmarklet/?url=<?php echo $url; ?>&is_video=false&description=<?php echo $summary;?>&media=<?php echo $url;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/pinterest.png">
                                             <span>Pinterest</span></a>
                                          </div>
                                       </li>
                                    </div>
                                    <div class="row icon-si ">
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('http://www.yummly.com/urb/verify?url=<?php echo $url; ?>&amp;title=<?php echo $title;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/yummly.png">
                                             <span>yummly</span></a>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('http://vkontakte.ru/share.php?url=<?php echo $url; ?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/vk.png">
                                             <span>vk</span></a>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('http://www.tumblr.com/share/link?url=<?php echo $url; ?>&amp;title=<?php echo $title; ?> Share Buttons','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/tumblr.png">
                                             <span>tumblr</span></a>
                                          </div>
                                       </li>
                                    </div>
                                    <div class="row icon-si ">
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('http://www.stumbleupon.com/submit?url=<?php echo $url; ?>&amp;&title=<?php echo $title;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/stumbleupon.png">
                                             <span>stumbleupon</span></a>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('http://reddit.com/submit?url=<?php echo $url; ?>&amp;title=<?php echo $title;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/reddit.png">
                                             <span>reddit</span></a>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('http://www.digg.com/submit?url=<?php echo $url; ?>&amp;&title=<?php echo $title;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/diggit.png">
                                             <span>diggit</span></a>
                                          </div>
                                       </li>
                                    </div>
                                    <div class="row icon-si ">
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('https://bufferapp.com/add?url=<?php echo $url; ?>&amp;&title=<?php echo $title;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/buffer.png">
                                             <span>buffer</span></a>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('https://share.flipboard.com/bookmarklet/popout?v=2&title=<?php echo $title;?>&url=<?php echo $url; ?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/Flipboard.png">
                                             <span>FlipBoard</span></a>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('https://myspace.com/post?u=<?php echo $url; ?>&amp;&t=<?php echo $title;?>&amp;&c=<?php echo $summary;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/myspace.png">
                                             <span>Myspace</span></a>
                                          </div>
                                       </li>
                                    </div>
                                    <div class="row icon-si ">
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('http://www.livejournal.com/update.bml?subject=<?php echo $title; ?>&event=<?php echo $url;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/livejournal.png">
                                             <span>LiveJournal</span></a>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
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
                     <a href="<?php echo base_url('motivation/singlepost/'.base64_encode($List['p_id'])); ?>" class="btn btn-primary offset-top-10 offset-xs-top-0">Know more</a>
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
                              <div class="col-md-2 col-xs-2 mobi-res" >
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
                                 <img src="<?php echo base_url('assets/vendor/img/coment-user.png'); ?>" class="media-object" style="width:40px">
                              </div>
                              <div class="media-body">
                                 <h6 class="h6-comments"><?php echo $li['comment']; ?></h6>
                                 <div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by <a href="javascript:void(0);"><?php echo isset($li['name'])?$li['name']:''; ?></a></span></div>
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
                  <video autoplay src="<?php echo base_url('assets/files/'.$List['p_list'][0]['imgname']); ?>" width="100%" type="video/<?php echo $ext; ?>" controls controlsList="nodownload"></video>
                  <?php }else{ ?>
                  <div class="post-media-wrap">
                     <div id="gallery<?php echo $List['p_id']; ?>"></div>
                  </div>
                  <?php  } ?>
                  <div class="post-content-wrap">
                     <div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by <a href="javascript:void(0)"><?php echo isset($List['name'])?$List['name']:''; ?></a></span></div>
                     <h4> 
					 <?php 
					  if(strlen($List['text'])>50){
						 echo   substr($List['text'], 0, 150); ?><span id="readless<?php echo $List['p_id']; ?>" onclick="readmoreoption(<?php echo $List['p_id']; ?>);">... read more</span> 
					 <?php  }else{
					  echo $List['text']; 
					  }
					  ?>
					  <span id="readmore<?php echo $List['p_id']; ?>" style="display:none;"><?php if(strlen($List['text']) >= 160){ echo  substr($List['text'],150); } ?><span id="moreless<?php echo $List['p_id']; ?>" onclick="readlessoption(<?php echo $List['p_id']; ?>);">... read Less</span></span>
                     
					 
					 
					 </h4>
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
                              <div class="modal-body" >
                                 <input class="form-control" type="text" placeholder="Search for share " id="myInput1" onkeyup="myFunction1()"><br>
                                 <ul class="" id="myUL1">
                                    <div class="row icon-si ">
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('https://plus.google.com/share?url=<?php echo $url; ?>&amp;p[images][0]=<?php echo $image;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)"><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/gplus.png">
                                             <span>Google+</span></a>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('http://twitter.com/share?text=<?php echo $title; ?>&url=<?php echo $url;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/twitter.png">
                                             <span>Twitter</span></a>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('http://pinterest.com/pin/create/bookmarklet/?url=<?php echo $url; ?>&is_video=false&description=<?php echo $summary;?>&media=<?php echo $url;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/pinterest.png">
                                             <span>Pinterest</span></a>
                                          </div>
                                       </li>
                                    </div>
                                    <div class="row icon-si ">
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('http://www.yummly.com/urb/verify?url=<?php echo $url; ?>&amp;title=<?php echo $title;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/yummly.png">
                                             <span>yummly</span></a>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('http://vkontakte.ru/share.php?url=<?php echo $url; ?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/vk.png">
                                             <span>vk</span></a>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('http://www.tumblr.com/share/link?url=<?php echo $url; ?>&amp;title=<?php echo $title; ?> Share Buttons','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/tumblr.png">
                                             <span>tumblr</span></a>
                                          </div>
                                       </li>
                                    </div>
                                    <div class="row icon-si ">
                                       <li>
                                          <div class="col-md-4 col-xs-4" >	
                                             <a onClick="window.open('http://www.stumbleupon.com/submit?url=<?php echo $url; ?>&amp;&title=<?php echo $title;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/stumbleupon.png">
                                             <span>stumbleupon</span></a>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('http://reddit.com/submit?url=<?php echo $url; ?>&amp;title=<?php echo $title;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/reddit.png">
                                             <span>reddit</span></a>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('http://www.digg.com/submit?url=<?php echo $url; ?>&amp;&title=<?php echo $title;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/diggit.png">
                                             <span>diggit</span></a>
                                          </div>
                                       </li>
                                    </div>
                                    <div class="row icon-si ">
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('https://bufferapp.com/add?url=<?php echo $url; ?>&amp;&title=<?php echo $title;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/buffer.png">
                                             <span>buffer</span></a>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('https://share.flipboard.com/bookmarklet/popout?v=2&title=<?php echo $title;?>&url=<?php echo $url; ?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/Flipboard.png">
                                             <span>FlipBoard</span></a>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('https://myspace.com/post?u=<?php echo $url; ?>&amp;&t=<?php echo $title;?>&amp;&c=<?php echo $summary;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/myspace.png">
                                             <span>Myspace</span></a>
                                          </div>
                                       </li>
                                    </div>
                                    <div class="row icon-si ">
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
                                             <a onClick="window.open('http://www.livejournal.com/update.bml?subject=<?php echo $title; ?>&event=<?php echo $url;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)" ><img class="img-fluid" src="<?php echo base_url(); ?>assets/vendor/img/follow/livejournal.png">
                                             <span>LiveJournal</span></a>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="col-md-4 col-xs-4">	
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
                     <a href="<?php echo base_url('motivation/singlepost/'.base64_encode($List['p_id'])); ?>" class="btn btn-primary offset-top-10 offset-xs-top-0">Know more</a>
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
                                 <img src="<?php echo base_url('assets/vendor/img/coment-user.png'); ?>" class="media-object" style="width:40px">
                              </div>
                              <div class="media-body">
                                 <h6 class="h6-comments"><?php echo $li['comment']; ?></h6>
								<div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by <a href="javascript:void(0);"><?php echo isset($li['name'])?$li['name']:''; ?></a></span></div>

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
            <?php } ?>
         </div>
         <div class="cell-md-3">
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
                           <input class="form-control" style="width:90%" type="email" name="email"  placeholder="Your e-mail" required>
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
                  <a href="http://offerspot.in/" target="_blank">
                     <div class="box text-center ">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/vendor/img/sideadd.png">
                     </div>
                  </a>
               </div>
            </div>
            <br>
         </div>
      </div>
   </div>
</main>
<!-- link modal -->
<div class="modal fade" id="linkmodal" role="dialog">
   <div class="modal-dialog modal-sm" id="linkid">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-body">
            <form action="/action_page.php">
               <div class="form-group">
                  <label for="email">Add Link</label>
                  <input type="text" name="addlink" id="addlink" value="" class="form-control"  >
               </div>
			   <div id="errormsgs"></div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" onclick="getvideoid();" class="btn btn-default btn-sm" >Ok</button>
            <button type="button" onclick="getvideoidclose();" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
   <div class="modal-dialog" id="linkplayid" style="display:none;">
      <!-- Modal content-->
	  	<button type="button" style="position: absolute;right:5px;top:5px;color: #444;z-index: 1024;" onclick="closepopup();" class="close" aria-label="Close"><span aria-hidden="true">X</span></button>

      <div class="modal-content">

         <div class="modal-body" id="freameslink">
            <iframe width="560" id="iframefilelink" height="315" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
         </div> 
		 <div class="modal-body" id="normallink" style="display:none;">
		 <div id="links_id"></div>
         </div>
		 <input type="hidden" name="playlink" id="playlink" value="">
         <div class="modal-footer">
            <button type="button" onclick="savevideoidclose();" class="btn btn-default btn-sm" >Ok</button>
            <button type="button" onclick="getvideoidclose();" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<div id="sucessmsg" style="display:none;"></div>

<script>
function savetext(val){
	 document.getElementById("formsavetext").value=val;	
	 document.getElementById("formsavetext1").value=val;	
}
function savetitle(val){
	 document.getElementById("formsavetitle1").value=val;	
	 document.getElementById("formsavetitle").value=val;	
}
function readmoreoption(id){
	$('#readless'+id).hide();
	$('#readmore'+id).show();
}
function readlessoption(id){
	$('#readless'+id).show();
	$('#readmore'+id).hide();
}
function prelogin(){
	$('#sucessmsg').show();
$('#sucessmsg').html('<div class="alert_msg1 animated slideInUp bg-warn">Please login to continue<i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');  

}
function closepopup(){
	var link=$('#addlink').val('');
		$('#linkid').show();
		$('#linkplayid').hide();
}
function savevideoidclose(){
	var link=document.getElementById("playlink").value;
	if(link!=''){
   		 jQuery.ajax({
   					url: "<?php echo site_url('motivation/save_link');?>",
   					data: {
   						linkid: link,
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
						$('#sucessmsg').show();
						if(data.msg==1){
							$('#sucessmsg').html('<div class="alert_msg1 animated slideInUp bg-warn">Please login to continue<i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');  
						}if(data.msg==2){
							$('#sucessmsg').html('<div class="alert_msg1 animated slideInUp bg-succ"> Post Successfully updated<i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');  
							location.reload();
						}if(data.msg==3){
							$('#sucessmsg').html('<div class="alert_msg1 animated slideInUp bg-warn">technical problem will occurred. Please try again. <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');  
					
   					}
   				 }
   				});
   			}
}
function getvideoid(){
	var link=$('#addlink').val();
		if(link ==''){
			$('#sucessmsg').show();
			$('#sucessmsg').html('<div class="alert_msg1 animated slideInUp bg-warn">Please enter value<i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');  
			return false;
		}else{
			$('#linkid').hide();
			 var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|\?v=)([^#\&\?]*).*/;
				var match = link.match(regExp);
				if (match && match[2].length == 11) {
						var res = link.split("?v=");
						var url='https://www.youtube.com/embed/'+res[1];
						document.getElementById("iframefilelink").src=url;
						document.getElementById("playlink").value=link;
						$('#normallink').hide();
						$('#freameslink').show();
						$('#linkid').hide();
						$('#linkplayid').show();
			
				}else{
				 document.getElementById("iframefilelink").src=link;
				 document.getElementById("playlink").value=link;
				 document.getElementById("links_id").innerHTML=link;
				$('#linkid').hide();
				$('#linkplayid').show();
				$('#normallink').show();
				$('#freameslink').hide();
				}
		}
}
function getvideoidclose(){
	var link=$('#addlink').val('');
		$('#linkid').show();
		$('#linkplayid').hide();
		
}
   /*validation starting*/
    
     function onchangeimage(){
   	
   		var fup= document.getElementById('imagesupload');
   		
   		var fileName = fup.value;
   		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
   		if(ext == "docx" || ext == "doc" || ext == "png" || ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" )
   		{
   			
   		}
   		var names_arr = ['docx','doc','png','gif','GIF','JPEG','jpeg','jpg'];
   		jQuery.ajax({
   					url: "<?php echo site_url('motivation/getfiledata');?>",
   					data: {
   						attachmentid: '',
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
   						if(data.msg !=''){
   							if( data.msg == "png" ||  data.msg == "gif" || data.msg == "GIF" || data.msg == "JPEG" || data.msg == "jpeg" || data.msg == "jpg" || data.msg == "JPG" ){
   								
   								$("#addimages").submit();
   							}else{
   								
   									alert('Invalid upload  formate. Upload Gif,JPEG,jpeg,jpg,JPG images only or  mp4,mp3 ,3gpp videos only');return false;
   							
   								}
   							}else{
   							$("#addimages").submit();
   						}
   					}
   				});
   		
   	
   } 
   function onchangevideo(){
   	
   		var fup= document.getElementById('videoimages');
   		var fileName = fup.value;
   		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
   		var blockedTile = new Array("mp4", "mp3", "3gpp");
   		jQuery.ajax({
   					url: "<?php echo site_url('motivation/getfiledata');?>",
   					data: {
   						attachmentid: '',
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
   						if(data.msg !=''){
   							alert('Your upload only one video at time');return false;
   						}else{
   							if(ext == "mp4" || ext == "3gpp" || ext == "mp3")
   								{
   									$("#addimages1").submit();
   								} else
   									{
   										alert("Upload mp4,mp3 ,3gpp videos only");return false;
   								}
   						}
   					}
   				});
   				
   		
   	
   } 
   
   
   function remove_image(id){
   	if(id!=''){
   		 jQuery.ajax({
   					url: "<?php echo site_url('motivation/attchements');?>",
   					data: {
   						attachmentid: id,
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
   					if(data.msg==1){
   					$('#modalwindow').modal('hide');
   						jQuery('#attach_'+id).hide();
   					}
   				 }
   				});
   			}
   }
   
   /*validationending*/
 
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
						$('#sucessmsg').show();
						if(data.msgs==1){
							$('#sucessmsg').html('<div class="alert_msg1 animated slideInUp bg-warn">Please login to continue<i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');  
						}if(data.msgs==2){
							$('#sucessmsg').html('<div class="alert_msg1 animated slideInUp bg-succ">Successfully liked<i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');  
						}if(data.msgs==3){
							$('#sucessmsg').html('<div class="alert_msg1 animated slideInUp bg-succ">Successfully unliked <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');  
						}if(data.msgs==4){
							$('#sucessmsg').html('<div class="alert_msg1 animated slideInUp bg-warn">technical problem will occurred. Please try again. <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');  
						}
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
