
<main class="page-content offset-top-30" >
		<div class="">
			<div class="">
				<!--Title-->
				<h4 class="card-title">Share your  photo, video or idea</h4>
				   <div class="row">
						<div class="col-md-12">
    						<div class="widget-area no-padding blank">
								<div class="status-upload">
									<form  id="addimages" name="addimages" action="<?php echo base_url('motivation/addimage'); ?>" method="post" enctype="multipart/form-data">
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
								
										<ul>
											<li class="image-upload">
													<label for="images">
														<i class="fa fa-music"></i>
													</label>

													 <input type="file"  id="images" name="images1" onchange="onchangeimage();" />
											</li>
											<li class="image-upload">
													<label for="images">
														<i class="fa fa-camera"></i>
													</label>
													 <input type="file"  id="images" name="images2" onchange="onchangeimage();" />
											</li>
											<li class="image-upload">
													<label for="images">
														<i class="fa fa-picture-o"></i>
													</label>
													 <input type="file"  id="images" name="images3" onchange="onchangeimage();" />
											</li>
											
										</ul>
										
									
								
									</form>
									<form  id="imagespost" name="imagespost" action="<?php echo base_url('motivation/imagepost'); ?>" method="post" enctype="multipart/form-data">

									<textarea placeholder="What are you doing right now?" id="content" name="content" required></textarea>

									<button type="submit" class="btn  btn-primary"><i class="fa fa-share"></i> Post</button>
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
function onchangeimage(){
	$("#addimages").submit();
}


</script>



