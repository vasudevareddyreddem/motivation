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
<main class="page-content">
        <div id="fb-root"></div>
        <div class="shell">
          <div class="range">
            <div class="cell-sm-8 cell-sm-preffix-2 cell-md-8 cell-md-preffix-0">
              <div class="box">
                <div class="section-20 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                  <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h4>
                </div>
                <hr class="divider offset-none">
                <div class="section-30 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                  <div class="range">
                    <div class="cell-md-6"><img src="<?php echo base_url(); ?>assets/vendor/img/admin.jpg" width="355" height="355" alt="" class="img-responsive"></div>
                    <div class="cell-md-6 range">
                      <div class="cell-md-12">
                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                      </div>
                      <div class="cell-md-12 cell-md-bottom offset-md-top-20 offset-lg-top-0">
						<ul class="list-inline-0">
						<li><a href="https://www.facebook.com/Whats-lyf-1952309441763306/" target="_blank" class="icon icon-circle fa-facebook icon-default text-info"></a></li>
						<li><a href="https://twitter.com/whats_lyf" target="_blank" class="icon icon-circle fa-twitter icon-default text-info"></a></li>
						<li><a href="https://www.linkedin.com/in/whats-lyf-50a830156/" target="_blank" class="icon icon-circle fa-linkedin icon-default text-info"></a></li>
						<li><a href="https://www.pinterest.com.au/whatslyf/" target="_blank" class="icon icon-circle fa-pinterest icon-default text-info"></a></li>
						<li><a data-toggle="modal" data-target="#myModal" class="icon icon-circle  fa-plus icon-default text-info"></a></li>
						</ul>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="divider offset-none">
                <div class="section-30 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book....
                  
                  <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    
                  </p>
                
                 
                </div>
                <hr class="divider offset-none">
                <div class="section-30 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                  <h5>Send us a message</h5>
                  <p>Your email address will not be published.<br class="veil-sm"> Required fields are marked *
                  </p>
                  <!-- RD Mailform-->
                  <form data-result-class="rd-mailform-validate-2" data-form-type="contact" method="post" action="<?php echo base_url('motivation/contactpost'); ?>" >
            <input type="text" class="form-control" name="name"  placeholder="Your name *" required><br>
            <input type="text" class="form-control" name="email"  placeholder="Your e-mail *"required><br>
            <input type="text" class="form-control" name="subjects" placeholder="Subjects"required><br>
            <textarea name="message" class="form-control" placeholder="Message *"required></textarea><br>
            <div class="text-md-left offset-top-30">
              <button type="submit" class="btn btn-primary">Send</button>
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
                                     
									  <li><a data-toggle="modal" data-target="#myModal" class="icon icon-circle  fa-plus icon-default text-info"></a></li>
                                    </ul>
                    </div>
                    <hr class="divider offset-none">
                    <div class="section-xs-size">
                      <h5>Newsletter</h5>
                      <p>Sign up for the latest news on this startup further process and when the product will be released!</p>
                      <!-- RD Mailform-->
                      <form  method="post" action="<?php echo base_url('motivation/newsletter'); ?>" class="form-inline-flex form-inline reveal-xs-flex">
                        <input type="email" name="email"  placeholder="Your e-mail" required>
                        <button type="submit" class="btn btn-primary offset-top-15 offset-xs-top-0"> Subscribe</button>
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
	  
