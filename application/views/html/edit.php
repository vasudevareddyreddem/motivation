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
		<div class="">
			<div class="">
				<!--Title-->
				<h4 class="card-title">Share your  photo, video or idea</h4>
				   <div class="row">
						<div class="col-md-12">
    						<div class="widget-area  blank">
								<div class="">
								<div class="row prev">
								<?php //echo '<pre>';print_r($image_list); ?>
								<?php if(isset($image_list['p_list']) && count($image_list['p_list'])>0){ ?>
										
										<?php foreach($image_list['p_list'] as $list){ ?> 
										
											<?php $path = $list['imgname'];
												$ext = pathinfo($path, PATHINFO_EXTENSION); 
												if($ext=="mp4" || $ext=="mp3" ||$ext=="3gpp"){  ?>
													<div class="col-md-4" style="width:315px;" id="attach_<?php echo $list['img_id']; ?>">
													<video  src="<?php echo base_url('assets/files/'.$list['imgname']);?>" width="300px"  type="video/<?php echo $ext; ?>" controls></video>
													<div onclick="remove_image(<?php echo $list['id']; ?>);" class="pos-ab-close"><i class="fa fa-close"></i></div>
													</div>
												 <?php }else{ ?>
													<div class="col-md-2" id="attach_<?php echo $list['img_id']; ?>">
													<img class="img-responsive" src="<?php echo base_url('assets/files/'.$list['imgname']);?>">
													<div onclick="remove_image(<?php echo $list['img_id']; ?>);" class="pos-ab-close"><i class="fa fa-close"></i></div>
												</div>
												<?php } ?>
												
										<?php } ?>
											<?php } ?>
										<?php if(isset($temp_image_list) && count($temp_image_list)>0){ ?>
										<div class="row prev">
										<?php foreach($temp_image_list as $list){ ?>
										
											<?php $path = $list['name'];
											$ext = pathinfo($path, PATHINFO_EXTENSION); 
											if($ext=="mp4" || $ext=="mp3" ||$ext=="3gpp"){  ?>
												<div class="col-md-4" style="width:315px;" id="tempattach_<?php echo $list['id']; ?>">
												<video  src="<?php echo base_url('assets/temp/'.$list['name']);?>" width="300px"  type="video/<?php echo $ext; ?>" controls></video>
												<div onclick="remove_imagetemp(<?php echo $list['id']; ?>);" class="pos-ab-close"><i class="fa fa-close"></i></div>
												</div>
											 <?php }else{ ?>
												<div class="col-md-2" id="tempattach_<?php echo $list['id']; ?>">
												<img class="img-responsive" src="<?php echo base_url('assets/temp/'.$list['name']);?>">
												<div onclick="remove_imagetemp(<?php echo $list['id']; ?>);" class="pos-ab-close"><i class="fa fa-close"></i></div>
											</div>
											<?php } ?>
											
										<?php } ?>
										</div>
										<?php } ?>
										</div>
									
										<div class="row">
									<form id="addimages" name="addimages" action="<?php echo base_url('motivation/editimage'); ?>" method="post" enctype="multipart/form-data">
											<input type="hidden" name="post_id" id="post_id" value="<?php echo isset($post_id)?$post_id:''; ?>">
											<ul  class="col-md-1 col-xs-1 col-sm-1" >
					
											<li class="image-upload">

													<label for="imagesupload">
														<i class="fa fa-camera"></i>
													</label>
													 <input type="file"  id="imagesupload" name="images2" onchange="onchangeimage(<?php echo isset($post_id)?$post_id:''; ?>);" />
												</li>
											
											
										</ul>
										
									</form>
									<form  id="addimages1" name="addimages1" action="<?php echo base_url('motivation/editimage'); ?>" method="post" enctype="multipart/form-data">
									
										<input type="hidden" name="post_id" id="post_id" value="<?php echo isset($post_id)?$post_id:''; ?>">

										<ul class="col-md-1 col-xs-1 col-sm-1">
					
											<li class="image-upload">
													<label for="videoimages">
														<i class="fa fa-video-camera"></i>
													</label>
													 <input type="file"  id="videoimages" name="images3" onchange="onchangevideo(<?php echo isset($post_id)?$post_id:''; ?>);" />
											</li>
											
										</ul>
										
									
								
									</form>
									</div>
									<form  id="imagespost" name="imagespost" action="<?php echo base_url('motivation/editimagepost'); ?>" method="post" enctype="multipart/form-data">
											<input type="hidden" name="post_id" id="post_id" value="<?php echo isset($post_id)?$post_id:''; ?>">

									<input class="form-control" type="text" placeholder="Title" id="title" name="title" value="<?php echo isset($image_list['title'])?$image_list['title']:'';?>" required>
									<textarea  class="form-control" placeholder="What are you doing right now?" id="content" name="content"  required><?php echo isset($image_list['text'])?$image_list['text']:'';?></textarea>
									
									<button style="margin-top:10px;"type="submit" class="btn btn-sm btn-primary pull-right"><i class="fa fa-share"></i> Post</button>
								

									
									</form>
									
								</div><!-- Status Upload  -->
								
							</div><!-- Widget Area -->
							
						</div>
		`			</div>
				
				
			</div>
		</div>
		<br>
        <div id="fb-root"></div>
        
        
        
      </main>
	  
  <script>
 
function remove_imagetemp(id){
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
						jQuery('#tempattach_'+id).hide();
					}
				 }
				});
			}
}
  function onchangeimage(id){
	
		var fup= document.getElementById('imagesupload');
		
		var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "png" || ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" )
		{
			
		}else{

		alert('Invalid upload  formate. Upload Gif,JPEG,jpeg,jpg,JPG images only or  mp4,mp3 ,3gpp videos only');return false;

		}jQuery.ajax({
					url: "<?php echo site_url('motivation/editgetfiledata');?>",
					data: {
						attachmentid: id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
						if(data.msg !=''){
							if(ext == "png" || ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" ){
								
								$("#addimages").submit();
							}else{
								
									alert('Your upload only one video at time');return false;
							
								}
							}else{
							$("#addimages").submit();
						}
					}
				});
					
		
	
} 
function onchangevideo(id){
	
		var fup= document.getElementById('videoimages');
		var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		var blockedTile = new Array("mp4", "mp3", "3gpp");
		jQuery.ajax({
					url: "<?php echo site_url('motivation/editgetfiledata');?>",
					data: {
						attachmentid: id,
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
					url: "<?php echo site_url('motivation/editattchements');?>",
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


</script>



