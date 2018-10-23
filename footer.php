<footer class="footer" role="contentinfo">
	<div class="content">
		<div class="footer-tile general-tile c-width-40">
			<div class="footer-tile-header">
				General Information
			</div>
			<?php footer_theme_nav(); ?>
		</div>
		<div class="footer-tile info-tile c-width-40">
			<div class="footer-tile-header">
				CONTACT
			</div>
			<ul>
				<li>
					<a href="tel:<?php the_field('phone_number', 'options');?>">
						<?php the_field('phone_number', 'options');?>
					</a>
				</li>
				<li>
					<?php the_field('address_1', 'options');?>
					<?php if (get_field('address_2', 'options')):?>
						<br />
						<?php the_field('address_2', 'options');?>
					<?php endif;?>
					<br />
					<?php the_field('city_state_zip', 'options');?>
				</li>
				<li>
					<a href="mailto:<?php the_field('email_address', 'options');?>">
						<?php the_field('email_address', 'options');?>
					</a>
				</li>
				<ul class="social-icon-list">
					<li>
						<a class="c-block-fill" href="<?php the_field('instagram_link', 'options');?>" target="_blank"></a>
						<i class="fab fa-instagram"></i>
					</li>
					<li>
						<a class="c-block-fill" href="<?php the_field('facebook_link', 'options');?>" target="_blank"></a>
						<i class="fab fa-facebook-f"></i>
					</li>
					<li>
						<a class="c-block-fill" href="<?php the_field('linkedin_link', 'options');?>" target="_blank"></a>
						<i class="fab fa-linkedin-in"></i>
					</li>

				</ul>
			</ul>
		</div>
		<div class="footer-tile other-tile c-width-20">
			<div class="footer-tile-header">
				Other
			</div>
			<?php other_theme_nav(); ?>
		</div>
		<div class="sub-footer">
			<div class="sub-footer-tile c-width-40 copyright">
				&copy; 2018 Blue Harvest
			</div>
			<div class="sub-footer-tile c-width-40 logo-mark">
				<img src="<?php echo get_template_directory_uri(); ?>/img/temp-logomark.svg" >
			</div>
			<div class="sub-footer-tile c-width-20 payment-types">
				<i class="fab fa-cc-amex"></i>
				<i class="fab fa-cc-diners-club"></i>
				<i class="fab fa-cc-discover"></i>
				<i class="fab fa-cc-mastercard"></i>
				<i class="fab fa-cc-paypal"></i>
				<i class="fab fa-cc-visa"></i>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</div><!-- WRAPPER -->
</body>
</html>
