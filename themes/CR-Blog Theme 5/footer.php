<?php global $crally;

$fb_url = $crally['facebook_url'];
$tw_url = $crally['twitter_url'];
$linked_url = $crally['linkedin_url'];
$insta_url = $crally['instaram_url'];
?>

<!-- *****************footer-sec***************** -->
<footer class="footer-sec" id="ctr-footer">
  <section class="subscription-sec">
    <div class="container">

      <ul class="socil-medi-cont">
        <?php if (!empty($fb_url)) { ?>
          <li class="socil-me-li">
            <a class="socil-icon" rel="nofollow" href="<?php echo $fb_url; ?>">
              <i class="fab fa-facebook-f"></i>
              <span class="sr-only">Facebook</span>
            </a>
          </li>
        <?php }
        if (!empty($tw_url)) { ?>
          <li class="socil-me-li">
            <a class="socil-icon" rel="nofollow" href="<?php echo $tw_url; ?>">
              <i class="fab fa-twitter"></i>
              <span class="sr-only">Twitter</span>
            </a>
          </li>
        <?php }
        if (!empty($linked_url)) { ?>
          <li class="socil-me-li">
            <a class="socil-icon" rel="nofollow" href="<?php echo $linked_url; ?>">
              <i class="fab fa-linkedin"></i>
              <span class="sr-only">Linkedin</span>
            </a>
          </li>
        <?php }
        if (!empty($insta_url)) { ?>
          <li class="socil-me-li">
            <a class="socil-icon" rel="nofollow" href="<?php echo $insta_url; ?>">
              <i class="fab fa-instagram"></i>
              <span class="sr-only">Instagram</span>
            </a>
          </li>
        <?php } ?>
      </ul>

      <div class="sub-from-sec">
        <!-- <input type="email" class="sub-from-input" name="" value="" placeholder="Email Newsletter">
                    <input type="submit" class="sub-from-submit" value="SUBSCRIBE">                 -->
        <?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
        <div class="sub-from-checkbox">
          <label class="sub-from-chk-lebel" for="">
            By Submitting this form you are agreeing to the <a href="<?php home_url(); ?>/privacy-policy" target="_blank">privacy policy</a>
          </label>
        </div>
      </div>

    </div>
  </section>
  <section class="footer-main-sec">
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-2">
            <a class="foot-logo" href="<?php //echo home_url(); 
                                        ?>">
                <img src="<?php //echo $crally['footer_logo']['url']; 
                          ?>" alt="">
            </a>
        </div> -->
        <div class="col-md-3">
          <div class="foot-col-card">
            <h5 class="foot-col-taitel">Useful Links</h5>
            <?php wp_nav_menu(array(
              'theme_location' => 'footer_links',
              'container' => 'ul',
              'menu_class' => 'foot-col-ul',
            )); ?>
          </div>
        </div>
        <div class="col-md-3">
          <div class="foot-col-card">
            <h5 class="foot-col-taitel">Categories</h5>
            <?php wp_nav_menu(array(
              'theme_location' => 'second_footer',
              'container' => 'ul',
              'menu_class' => 'foot-col-ul',
            )); ?>
          </div>
        </div>
        <div class="col-md-3">
          <div class="foot-col-card">
            <h5 class="foot-col-taitel">Categories</h5>
            <?php wp_nav_menu(array(
              'theme_location' => 'third_footer',
              'container' => 'ul',
              'menu_class' => 'foot-col-ul',
            )); ?>
          </div>
        </div>
        <div class="col-md-3">
          <div class="foot-col-card">
            <h5 class="foot-col-taitel">Social Media</h5>

            <ul class="foot-col-ul socialMedia">
              <?php if (!empty($fb_url)) { ?>
                <li><a href="<?php echo $fb_url; ?>"><i class="fab fa-facebook-f"></i> Facebook</a></li>
              <?php }
              if (!empty($tw_url)) { ?>
                <li><a href="<?php echo $tw_url; ?>"><i class="fab fa-twitter"></i> Twitter</a></li>
              <?php }
              if (!empty($insta_url)) { ?>
                <li><a href="<?php echo $insta_url; ?>"><i class="fab fa-instagram"></i> Instagram</a></li>
              <?php }
              if (!empty($linked_url)) { ?>
                <li><a href="<?php echo $linked_url; ?>"><i class="fab fa-linkedin"></i> Linkedin</a></li>
              <?php } ?>
            </ul>
            <?php /* wp_nav_menu(array(
              'theme_location' => 'fourth_footer',
              'container' => 'ul',
              'menu_class' => 'foot-col-ul',
            )); */ ?>
          </div>
        </div>
        <!-- <div class="col-md-2">
                        <div class="foot-col-card">
                            <h5 class="foot-col-taitel"><a href="">Links</a></h5>
                            <?php /* wp_nav_menu(array(
                              'theme_location' => 'fifth_footer',
                              'container' => 'ul',
                              'menu_class' => 'foot-col-ul',
                            )); ?>
                            <?php wp_nav_menu(array(
                              'theme_location' => 'sixth_footer',
                              'container' => 'ul',
                              'menu_class' => 'foot-col-ul',
                            )); */ ?>
                        </div>
                    </div> -->
      </div>

      <section class="copy-right">
        <p>© <?php echo date('Y'); ?> - TheContentRally. All Rights Reserved.</p>
        <p>Designed and Developed By <a href="https://www.viacon.in/">viacon</a></p>
      </section>

    </div>

  </section>
</footer>

<?php wp_footer(); ?>

</body>

</html>