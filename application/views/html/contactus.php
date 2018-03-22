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
        <!--Contact us-->
       <!-- <section>
         
          <div class="rd-google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.2437281470093!2d78.3863380142533!3d17.49587505427365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91f48aa2d613%3A0xe33ae6c3ea74c04e!2sPrachaTech+Software+Solutions!5e0!3m2!1sen!2sin!4v1519811817902" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </section>-->
        <section class="section-30 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
          <h5>Contacts</h5>
          <ul class="list-unstyled list">
            <li><span class="icon icon-xs material-icons-location_on text-primary"></span><span>Address: </span><a href="#" target="_blank" class="text-underline">www.whatslyf.com</a></li>
            <li><span class="icon icon-xs material-icons-email text-primary"></span><span>E-mail: <a href="mailto:whatslyfhelp@gmail.com" target="_blank" class="text-underline">whatslyfhelp@gmail.com</a></span></li>
            <li><span class="icon icon-xs fa-linkedin text-primary"></span><span> </span><a href="https://www.linkedin.com/in/whats-lyf-50a830156/" target="_blank" class="text-underline">Linkedin</a></li>
            <li><span class="icon icon-xs fa-pinterest text-primary"></span><span> </span><a href="https://www.pinterest.com.au/whatslyf/" target="_blank" class="text-underline">Pinterest</a></li>
            <li><span class="icon icon-xs fa-facebook text-primary"></span><span></span><a href="https://www.facebook.com/Whats-lyf-1952309441763306/" target="_blank" class="text-underline"> Facebook</a></li>
            <li><span class="icon icon-xs fa-instagram text-primary"></span><span><a href="https://www.instagram.com/whats_lyf/" target="_blank" class="text-underline">Instagram </a></span></li>
            <li><span class="icon icon-xs fa-twitter text-primary"></span><span><a href="https://twitter.com/whats_lyf" target="_blank" class="text-underline">Twitter </a></span></li>
          </ul>
        </section>
        <hr class="divider offset-none">
        <section class="section-30 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
          <h5>Send us a message</h5>
          <p>Your email address will not be published.<br class="veil-sm"> Required fields are marked *
          </p>
          <!-- RD Mailform-->
          <form data-result-class="rd-mailform-validate-2" data-form-type="contact" method="post" action="<?php echo base_url('motivation/contactpost'); ?>" >
            <input type="text" class="form-control" name="name"  placeholder="Your name *" required><br>
            <input type="email" class="form-control" name="email"  placeholder="Your e-mail *"required><br>
            <input type="text" class="form-control" name="subjects" placeholder="Subjects"required><br>
            <textarea name="message" class="form-control" placeholder="Message *"required></textarea><br>
            <div class="text-md-left offset-top-30">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
          </form>
          <!-- Rd Mailform result field-->
          <div class="rd-mailform-validate-2"></div>
        </section>
      </main>
