		</div>
		<div class="socialfeed">
			<div class="container">
				<div class="socialfeed-widget">
					<?php
					echo do_shortcode( '[instagram-feed]' );
					?>
				</div>
				
				<div class="socialfeed-widget">
					<div class="fb-page" data-href="https://www.facebook.com/marinaterrahotel/" data-tabs="timeline" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/marinaterrahotel/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/marinaterrahotel/">Marinaterra Hotel &amp; Spa</a></blockquote></div>
				</div>
				
				<div class="socialfeed-widget">
					<a class="twitter-timeline" data-height="300" href="https://twitter.com/marinaterra_sc?ref_src=twsrc%5Etfw">Tweets by marinaterra_sc</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
				</div>
			</div>
		</div>
		<footer>
			<div class="footer-top">
				<div class="container">
					<div class="social">
						<div class="social-links">
							<?php
							if ( have_rows( 'social_networks', 'option' ) ) {
								while ( have_rows( 'social_networks', 'option' ) ) {
									the_row( 'social_networks', 'option' );
							?>
									<a
										target="_blank"
										class="social-link"
										href="<?php the_sub_field( 'url' ); ?>">
										<i class="fa fa-<?php the_sub_field( 'fa_code' ); ?>"></i>
									</a>
							<?php
								}
							}
							?>

							<a
								target="_blank"
								class="social-link whatsapp"
								href="https://api.whatsapp.com/send?phone=<?php
									echo preg_replace('/[^0-9]/', '', get_field( 'whatsapp', 'option' ) );
								?>">
								<i class="fa fa-whatsapp"></i>
							</a>
						</div>
					</div>
					
					<div class="tripadvisor wrapper">
						<a
							target="_blank"
							class="tripadvisor-link"
							href="https://www.tripadvisor.com/Hotel_Review-g151933-d282214-Reviews-Marinaterra_Hotel_Spa-San_Carlos_Northern_Mexico.html">
							<img
								class="tripadvisor-img"
								src="<?php echo PO_CHILD_URL; ?>/img/tripadvisor.png">
						</a>
						<a
							class="tripadvisor-link"
							href="#">
							<img
								class="tripadvisor-img"
								src="<?php echo PO_CHILD_URL; ?>/img/badge-distintivo-h.png">
						</a>
						<a
							class="tripadvisor-link"
							href="#">
							<img
								class="tripadvisor-img"
								src="<?php echo PO_CHILD_URL; ?>/img/badge-3-diamantes.png">
						</a>
					</div>
					
					<div class="contact wrapper">
						<?php
						if ( have_rows( 'phones', 'option' ) ) {
							while ( have_rows( 'phones', 'option' ) ) {
								the_row( 'phones', 'option' );
						?>
								<div class="contact-info">
									<a
										target="_blank"
										class="contact-link"
										href="tel://<?php echo preg_replace('/[^0-9]/', '', get_sub_field( 'phone' ) ); ?>">
										<i class="fa fa-phone-square" aria-hidden="true"></i>
										<?php the_sub_field( 'country' ); ?>: <br>
										<strong><?php the_sub_field( 'phone' ); ?></strong>
									</a>
								</div>
						<?php
							}
						}
						?>

						<div class="contact-info contact-info-footer-email">
							<a
								class="contact-link"
								href="<?php echo get_permalink( get_field( 'contact_page', 'option' ) ); ?>">
								<strong>
									<i class="fa fa-envelope"></i>
									<?php _e( 'Contáctanos', 'marinaterra' ); ?>
								</strong>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="legal wrapper">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'footer',
							'container' => false,
						) );
						?>
					</div>
					<div class="copyright wrapper">
						&copy; <?php echo date( 'Y' ); ?> Operadora Turistica LM, S.A. de C.V.
						<?php _e( 'Todos los derechos reservados.', 'marinaterra' ); ?>
					</div>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>
		
		<div id="chat">
<!-- BEGIN ProvideSupport.com Custom Images Chat Button Code -->
<div id="cibduU" style="z-index:100;position:absolute"></div><div id="scbduU" style="display:inline"></div><div id="sdbduU" style="display:none"></div><script type="text/javascript">var sebduU=document.createElement("script");sebduU.type="text/javascript";var sebduUs=(location.protocol.indexOf("https")==0?"https":"http")+"://image.providesupport.com/js/1m0o77pmdd6jp0tl7hwr55ch1q/safe-standard.js?ps_h=bduU&ps_t="+new Date().getTime()+"&online-image=https%3A//www.marinaterra.com/wp-content/uploads/online.png&offline-image=https%3A//www.marinaterra.com/wp-content/uploads/offlineG.png";setTimeout("sebduU.src=sebduUs;document.getElementById('sdbduU').appendChild(sebduU)",1)</script><noscript><div style="display:inline"><a href="http://www.providesupport.com?messenger=1m0o77pmdd6jp0tl7hwr55ch1q">Customer Support</a></div></noscript>
<!-- END ProvideSupport.com Custom Images Chat Button Code -->
		</div>
	</body>
</html>