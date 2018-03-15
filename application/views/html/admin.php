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
								<div class="status-upload">
								<?php if(isset($image_list) && count($image_list)>0){ ?>
										<div class="row prev">
										<?php foreach($image_list as $list){ ?>
											<div class="col-md-2" id="attach_<?php echo $list['id']; ?>">
												<img class="img-responsive" src="<?php echo base_url('assets/temp/'.$list['name']);?>">
												<div onclick="remove_image(<?php echo $list['id']; ?>);" class="pos-ab-close"><i class="fa fa-close"></i></div>
											</div>
										<?php } ?>
										</div>
										<?php } ?>
										<div class="row">
									<form id="addimages" name="addimages" action="<?php echo base_url('motivation/addimage'); ?>" method="post" enctype="multipart/form-data">
											<ul  class="col-md-3" >
					
											<li class="image-upload">
													<label for="images">
														<i class="fa fa-camera"></i>
													</label>
													 <input type="file"  id="images" name="images2" onchange="onchangeimage();" />
											</li>
											
											
										</ul>
										
									</form>
									<form  id="addimages1" name="addimages1" action="<?php echo base_url('motivation/addimage'); ?>" method="post" enctype="multipart/form-data">
									
								
										<ul class="col-md-3">
					
											<li class="image-upload">
													<label for="images">
														<i class="fa fa-video-camera"></i>
													</label>
													 <input type="file"  id="images" name="images3" onchange="onchangeimage1();" />
											</li>
											
										</ul>
										
									
								
									</form>
									</div>
									<form  id="imagespost" name="imagespost" action="<?php echo base_url('motivation/imagepost'); ?>" method="post" enctype="multipart/form-data">

									<input class="form-control" type="text" placeholder="Title" id="title" name="title" value="" required>
									<textarea placeholder="What are you doing right now?" id="content" name="content" required></textarea>
									
									<button style="margin-bottom:10px;"type="submit" class="btn  btn-primary"><i class="fa fa-share"></i> Post</button>
								

									
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
 
  function onchangeimage(){
	
		var fup= document.getElementById('images');
		
		var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		var blockedTile = new Array("gif", "GIF", "JPEG", "jpeg", "jpg");
		jQuery.ajax({
					url: "<?php echo site_url('motivation/getfiledata');?>",
					data: {
						attachmentid: '',
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
					alert(data.msg);
						if(data.msg !=''){
							if(blockedTile.includes(ext)){
								
							}else{
								alert('Invalid upload  formate.  please upload rt');
							}
						}
					}
				});
				return false;
		if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "mp4" || ext == "3gpp" || ext == "mp3")
		{
		$("#addimages").submit();
		} 
		else
		{
			alert("Upload Gif,JPEG,jpeg,jpg,JPG images only or  mp4,mp3 ,3gpp videos only");
			
		fup.focus();
		return false;
		}
	
} 
function onchangeimage(){
	
		var fup= document.getElementById('images');
		
		var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		var blockedTile = new Array("gif", "GIF", "JPEG", "jpeg", "jpg");
		jQuery.ajax({
					url: "<?php echo site_url('motivation/getfiledata');?>",
					data: {
						attachmentid: '',
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
					alert(data.msg);
						if(data.msg !=''){
							if(blockedTile.includes(ext)){
								
							}else{
								alert('Invalid upload  formate.  please upload rt');
							}
						}
					}
				});
				return false;
		if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "mp4" || ext == "3gpp" || ext == "mp3")
		{
		$("#addimages").submit();
		} 
		else
		{
			alert("Upload Gif,JPEG,jpeg,jpg,JPG images only or  mp4,mp3 ,3gpp videos only");
			
		fup.focus();
		return false;
		}
	
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


</script>



