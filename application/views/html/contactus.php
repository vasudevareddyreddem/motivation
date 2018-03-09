 <?php include('header.php'); ?>
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
            <li><span class="icon icon-xs material-icons-location_on text-primary"></span><span>Address: </span><a href="#" class="text-underline">www.whatslyf.com</a></li>
            <li><span class="icon icon-xs material-icons-email text-primary"></span><span>E-mail: <a href="mailto:#" class="text-underline">info@xxx.org</a></span></li>
            <li><span class="icon icon-xs fa-youtube text-primary"></span><span>Youtube: </span><a href="#" class="text-underline">xxxxRide</a></li>
            <li><span class="icon icon-xs fa-facebook text-primary"></span><span> Facebook: </span><a href="#" class="text-underline">WildxxxStartup</a></li>
            <li><span class="icon icon-xs fa-instagram text-primary"></span><span>Instagram: <a href="#" class="text-underline">#xxxdRide</a></span></li>
            <li><span class="icon icon-xs fa-twitter text-primary"></span><span>Twitter: <a href="#" class="text-underline">@Wxxxxx</a></span></li>
          </ul>
        </section>
        <hr class="divider offset-none">
        <section class="section-30 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
          <h5>Send us a message</h5>
          <p>Your email address will not be published.<br class="veil-sm"> Required fields are marked *
          </p>
          <!-- RD Mailform-->
          <form data-result-class="rd-mailform-validate-2" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform">
            <input type="text" name="name" data-constraints="@NotEmpty" placeholder="Your name *">
            <input type="text" name="email" data-constraints="@NotEmpty @Email" placeholder="Your e-mail *">
            <input type="text" name="subjects" placeholder="Subjects">
            <textarea name="message" data-constraints="@NotEmpty" placeholder="Message *"></textarea>
            <div class="text-md-left offset-top-30">
              <button class="btn btn-primary">Send</button>
            </div>
          </form>
          <!-- Rd Mailform result field-->
          <div class="rd-mailform-validate-2"></div>
        </section>
      </main>
	  <?php include('footer.php'); ?>