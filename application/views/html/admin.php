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

										<ul>
											<li class="image-upload">
												<div class="image-upload">
													<label for="file-input">
														<i class="fa fa-music"></i>
													</label>

													<input id="file-input" type="file"/>
												</div>
											</li>
											<li class="image-upload">
												<div class="image-upload">
													<label for="file-input">
														<i class="fa fa-video-camera"></i>
													</label>

													<input id="file-input" type="file"/>
												</div>
											</li>
											<li class="image-upload">
												<div class="image-upload">
													<label for="file-input">
														<i class="fa fa-picture-o " ></i>
													</label>

													<input id="file-input" type="file"/>
												</div>
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
        </div>
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
