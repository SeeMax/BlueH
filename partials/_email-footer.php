<?php $emailImage = get_field('email_section_background', 'options');?>
<section class="email-footer-section background-image-section"
  style='background-image:url("<?php echo $emailImage['url'];?>");'>
  <div class="content">
    <div class="email-footer-headlines c-width-45">
      <h2><?php the_field('email_section_title', 'options', false, false);?></h2>
      <h3><?php the_field('email_section_subtitle', 'options');?></h3>
    </div>
    <div class="email-footer-form c-width-55">
      <!-- Begin Mailchimp Signup Form -->
      <div id="mc_embed_signup">
      <form action="https://seemaxwork.us6.list-manage.com/subscribe/post?u=9a03b165093c486f193475db0&amp;id=da06a095f3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">

      <div class="mc-field-group">
      	<input type="email" value="" placeholder="Enter Your Email" name="EMAIL" class="required email" id="mce-EMAIL">
      </div>
      	<div id="mce-responses" class="clear">
      		<div class="response" id="mce-error-response" style="display:none"></div>
      		<div class="response" id="mce-success-response" style="display:none"></div>
      	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_9a03b165093c486f193475db0_da06a095f3" tabindex="-1" value=""></div>
          <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </div>
      </form>
      </div>
      <!--End mc_embed_signup-->
    </div>
  </div>
</section>
