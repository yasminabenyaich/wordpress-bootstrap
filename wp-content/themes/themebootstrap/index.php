
<!DOCTYPE html>
<html lang="en">
<?php 
  get_header();
?>
<?php
get_template_part('templates/banner');
?>
  <!-- Header -->

<?php
get_template_part('templates/portfolio');
?>
  <!-- About Section -->
  <section class="bg-primary text-white mb-0" id="about">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">About</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
        </div>
      </div>
      <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light" href="#">
          <i class="fas fa-download mr-2"></i>
          Download Now!
        </a>
      </div>
    </div>
  </section>
  <!-- Contact Section -->
  <section id="contact">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Contact Me</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
          <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name</label>
                <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email Address</label>
                <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Phone Number</label>
                <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <?php 
  get_footer();
  ?>
  <div class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Your Website 2019</small>
    </div>
  </div>
  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>
  <!-- Portfolio Modals -->
  <!-- Portfolio Modal 1 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="<?php echo get_template_directory_uri()?>/img/portfolio/cabin.png" alt="">
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Close Project</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="<?php echo get_template_directory_uri()?>/img/portfolio/cake.png" alt="">
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Close Project</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio Modal 3 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="<?php echo get_template_directory_uri()?>/img/portfolio/circus.png" alt="">
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Close Project</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio Modal 4 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="<?php echo get_template_directory_uri()?>/img/portfolio/game.png" alt="">
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Close Project</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio Modal 5 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="<?php echo get_template_directory_uri()?>/img/portfolio/safe.png" alt="">
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Close Project</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio Modal 6 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
            <hr class="star-dark mb-5">
            <img class="img-fluid mb-5" src="<?php echo get_template_directory_uri()?>/img/portfolio/submarine.png" alt="">
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Close Project</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo get_template_directory_uri()?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="<?php echo get_template_directory_uri()?>/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Contact Form JavaScript -->
  <script src="<?php echo get_template_directory_uri()?>/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/contact_me.js"></script>
  <!-- Custom scripts for this template -->
  <script src="<?php echo get_template_directory_uri()?>/js/freelancer.min.js"></script>
</body>
</html>