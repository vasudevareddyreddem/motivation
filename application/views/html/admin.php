
<main class="page-content offset-top-30" >
		<div class="">
			<div class="">
				<!--Title-->
				<h4 class="card-title">Share your  photo, video or idea</h4>
				   <div class="row">
						<div class="col-md-12">
    						<div class="widget-area no-padding blank">
								<div class="status-upload">
									<form>
										<textarea placeholder="What are you doing right now?" ></textarea>
										
										<div class="row prev">
											<div class="col-md-2">
												<img class="img-responsive" src="https://rukminim1.flixcart.com/image/400/400/iron/f/g/c/philips-gc1905-gc1905-original-imadztntwyhmcmge.jpeg?q=70">
												<div class="pos-ab-close"><i class="fa fa-close"></i></div>
											</div><div class="col-md-2">
												<img class="img-responsive" src="https://i.ytimg.com/vi/iU2yPKrWKYQ/hqdefault.jpg?sqp=-oaymwEYCNIBEHZIVfKriqkDCwgBFQAAiEIYAXAB&rs=AOn4CLAU8RvPZS1_i_Q_r4m4H5v5QiKkuA">
												<div class="pos-ab-close"><i class="fa fa-close"></i></div>
											</div>
											
										</div>
								
										<ul>
											<li class="image-upload">
													<label for="images">
														<i class="fa fa-music"></i>
													</label>

													 <input type="file"  id="images" name="images[]" onchange="preview_images();" multiple/>
											</li>
											<li class="image-upload">
													<label for="images">
														<i class="fa fa-camera"></i>
													</label>
													 <input type="file"  id="images" name="images[]" onchange="preview_images();" multiple/>
											</li>
											<li class="image-upload">
													<label for="images">
														<i class="fa fa-picture-o"></i>
													</label>
													 <input type="file"  id="images" name="images[]" onchange="preview_images();" multiple/>
											</li>
											
										</ul>
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
<!--<script>
function preview_images() 
{
 var total_file=document.getElementById("images").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<div class='col-md-2'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
 }
}
</script>-->


