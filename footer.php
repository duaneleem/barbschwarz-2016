<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Barb_Schwarz,_Creator_of_Home_Staging
 */

?>

<?php wp_footer(); ?>

<!-- ==========================================================================================
	Footer
========================================================================================== -->
<footer class="footer-v3">
	<!-- Facebook SDK -->
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1162934623727002";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<div class="container">
		<div class="row">
			<div class="col-md-2 margin-b-30">
				<h3>Quick Links</h3>
				<ul class="list-unstyled">
					<li><a href="/blog">Barb's Blog</a></li>
					<li><a href="https://www.pinterest.com/barbstagedhomes/" target="_blank">Barb Schwarz Pinterest</a></li>
					<li><a href="http://www.stagedhomes.com" target="_blank">Stagedhomes.com</a></li>
					<li><a href="http://www.iahsp.com" target="_blank">IAHSP.com</a></li>
					<li><a href="#contact" du-smooth-scroll>Contact Me</a></li>
				</ul>
			</div>

			<div class="col-md-3 margin-b-30">
				<h3>Facebook</h3>
				<ul class="list-unstyled">
					<li><a href="https://www.facebook.com/barbstagedhomes" target="_blank">Barb Schwarz</a></li>
					<li><a href="https://www.facebook.com/BarbSchwarzGarden/" target="_blank">Barb Schwarz Garden</a></li>
				</ul>
			</div>
			<div class="col-md-3 margin-b-30">
				<h3>FOLLOW ME</h3>
				<div class="clearfix">
					<a class="social-icon social-dark social-sm si-facebook" href="https://www.facebook.com/barbstagedhomes" target="_blank" data-toggle="tooltip" data-original-title="Barb Schwarz | Facebook"><i class="fa fa-facebook"></i></a>
					<a class="social-icon social-dark social-sm si-facebook" href="https://www.facebook.com/BarbSchwarzGarden/" data-toggle="tooltip" title="" data-original-title="Barb Schwarz Garden | Facebook"><i class="fa fa-facebook"></i></a>
					<a class="social-icon social-dark social-sm si-pinterest" href="https://www.pinterest.com/barbstagedhomes/" data-toggle="tooltip" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a>
					<a class="social-icon social-dark social-sm si-twitter" href="https://twitter.com/BarbStagedHomes" data-toggle="tooltip" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
					<a class="social-icon social-dark social-sm si-linkedin" href="https://www.linkedin.com/in/barbschwarzstaging" data-toggle="tooltip" title="" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a>
				</div>
			</div>
			<div class="col-md-4 margin-b-30">
				<h3>Gallery</h3>
				<div class="xs-gallery clearfix">
					<!-- /row -->
					<a href="<?php bloginfo("template_directory"); ?>/assets/images/footer-barb.jpg" data-lightbox="gallery">
						<img src="<?php bloginfo("template_directory"); ?>/assets/images/footer-barb.jpg" alt="" class="img-responsive" width="100">
					</a>
					<a href="<?php bloginfo("template_directory"); ?>/assets/images/footer-barb-2.jpg" data-lightbox="gallery">
						<img src="<?php bloginfo("template_directory"); ?>/assets/images/footer-barb-2.jpg" alt="" class="img-responsive" width="100">
					</a>
					<a href="<?php bloginfo("template_directory"); ?>/assets/images/footer-barb-3.jpg" data-lightbox="gallery">
						<img src="<?php bloginfo("template_directory"); ?>/assets/images/footer-barb-3.jpg" alt="" class="img-responsive" width="100">
					</a>

					<!-- /row -->
					</a><a href="<?php bloginfo("template_directory"); ?>/assets/images/footer-logo-asp.jpg" data-lightbox="gallery">
						<img src="<?php bloginfo("template_directory"); ?>/assets/images/footer-logo-asp.jpg" alt="ASP Logo" class="img-responsive" width="100">
					</a>
					<a href="<?php bloginfo("template_directory"); ?>/assets/images/footer-letmetellyouhowiwork.jpg" data-lightbox="gallery">
						<img src="<?php bloginfo("template_directory"); ?>/assets/images/footer-letmetellyouhowiwork.jpg" alt="Let Me Tell You How I work" class="img-responsive" width="100">
					</a>
					<a href="<?php bloginfo("template_directory"); ?>/assets/images/footer-logo-aspm.jpg" data-lightbox="gallery">
						<img src="<?php bloginfo("template_directory"); ?>/assets/images/footer-logo-aspm.jpg" alt="ASPM logo" class="img-responsive" width="100">
					</a>

					<!-- /row -->
					<a href="<?php bloginfo("template_directory"); ?>/assets/images/footer-fur-family.jpg" data-lightbox="gallery">
						<img src="<?php bloginfo("template_directory"); ?>/assets/images/footer-fur-family.jpg" alt="" class="img-responsive" width="100">
					</a>
					<a href="<?php bloginfo("template_directory"); ?>/assets/images/footer-believe.jpg" data-lightbox="gallery">
						<img src="<?php bloginfo("template_directory"); ?>/assets/images/footer-believe.jpg" alt="" class="img-responsive" width="100">
					</a>
					<a href="<?php bloginfo("template_directory"); ?>/assets/images/footer-yellow-flowers.jpg" data-lightbox="gallery">
						<img src="<?php bloginfo("template_directory"); ?>/assets/images/footer-yellow-flowers.jpg" alt="" class="img-responsive" width="100">
					</a>

					<!-- /row -->
					<a href="<?php bloginfo("template_directory"); ?>/assets/images/footer-garden-1.jpg" data-lightbox="gallery">
						<img src="<?php bloginfo("template_directory"); ?>/assets/images/footer-garden-1.jpg" alt="Garden 1" class="img-responsive" width="100">
					</a>
					<a href="<?php bloginfo("template_directory"); ?>/assets/images/footer-garden-2.jpg" data-lightbox="gallery">
						<img src="<?php bloginfo("template_directory"); ?>/assets/images/footer-garden-2.jpg" alt="Garden 2" class="img-responsive" width="100">
					</a>
					<a href="<?php bloginfo("template_directory"); ?>/assets/images/footer-garden-3.jpg" data-lightbox="gallery">
						<img src="<?php bloginfo("template_directory"); ?>/assets/images/footer-garden-3.jpg" alt="Garden 3" class="img-responsive" width="100">
					</a>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="footer-bottom">
			<div class="row">
				<div class="col-sm-4 margin-b-20">
					<a class="footer-logo" href="#welcome" du-smooth-scroll>BARB SCHWARZ</a>
				</div>
				<div class="col-sm-4 margin-b-20">
					<span class="main-footer-font">&copy; Copyright <?php echo date("Y"); ?>. <i class="fa fa-code" aria-hidden="true"></i> with <i class="fa fa-gratipay" aria-hidden="true"></i> by <a href="https://www.linkedin.com/in/duaneleem" target="_blank">Duane Leem</a></span>
				</div>
				<div class="col-sm-4 margin-b-20">
					<ul class="list-inline text-right">
						<?php if( is_home() ) : ?>
							<li><a href="/">Home</a></li>
						<?php else : ?>
							<li><a href="#welcome" du-smooth-scroll>Welcome</a></li>
							<li><a href="#about" du-smooth-scroll>About</a></li>
							<li><a href="#sayings" du-smooth-scroll>Barb's Staging Sayings</a></li>
							<li><a href="#contact" du-smooth-scroll>Contact</a></li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<!--back to top-->
<a href="#" class="scrollToTop"><span class="livicon " data-size="32" data-name="angle-double-up" data-duration="1000"></span></a>
<!--back to top end-->

<!-- ==========================================================================================
	Scripts
========================================================================================== -->
<!-- jQuery plugins-->
<script src="<?php bloginfo("template_directory"); ?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/template/js/jquery-migrate.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/template/js/jquery.easing.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/template/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/template/js/bootstrap-hover-dropdown.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/template/live-icon/livicons-1.4.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/template/live-icon/raphael-min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/template/js/contact-form.js" type="text/javascript"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/template/js/jquery.counterup.min.js" type="text/javascript" ></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/template/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/template/js/jquery.appear.js" type="text/javascript" ></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/template/js/jquery.stellar.min.js" type="text/javascript"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/bower_components/flexslider/jquery.flexslider-min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/bower_components/lightbox2/dist/js/lightbox.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/template/js/jquery.hoverdir.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/bower_components/wow/dist/wow.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/template/js/one-page-custom.js" type="text/javascript"></script>

<!--cube portfolio-->
<script src="<?php bloginfo("template_directory"); ?>/assets/template/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script>
	(function($, window, document, undefined) {
		'use strict';

		var gridContainer = jQuery('#grid-container'),
			filtersContainer = jQuery('#filters-container'),
			wrap, filtersCallback;


		/*********************************
			init cubeportfolio
		*********************************/
		gridContainer.cubeportfolio({
			layoutMode: 'grid',
			rewindNav: true,
			scrollByPage: false,
			defaultFilter: '*',
			animationType: 'slideLeft',
			gapHorizontal: 10,
			gapVertical: 10,
			gridAdjustment: 'responsive',
			mediaQueries: [{
				width: 800,
				cols: 5
			}, {
				width: 500,
				cols: 2
			}, {
				width: 320,
				cols: 1
			}],
			caption: 'zoom',
			displayType: 'lazyLoading',
			displayTypeSpeed: 100
		});


		/*********************************
			add listener for filters
		*********************************/
		if (filtersContainer.hasClass('cbp-l-filters-dropdown')) {
			wrap = filtersContainer.find('.cbp-l-filters-dropdownWrap');

			wrap.on({
				'mouseover.cbp': function() {
					wrap.addClass('cbp-l-filters-dropdownWrap-open');
				},
				'mouseleave.cbp': function() {
					wrap.removeClass('cbp-l-filters-dropdownWrap-open');
				}
			});

			filtersCallback = function(me) {
				wrap.find('.cbp-filter-item').removeClass('cbp-filter-item-active');
				wrap.find('.cbp-l-filters-dropdownHeader').text(me.text());
				me.addClass('cbp-filter-item-active');
				wrap.trigger('mouseleave.cbp');
			};
		} else {
			filtersCallback = function(me) {
				me.addClass('cbp-filter-item-active').siblings().removeClass('cbp-filter-item-active');
			};
		}

		filtersContainer.on('click.cbp', '.cbp-filter-item', function() {
			var me = $(this);

			if (me.hasClass('cbp-filter-item-active')) {
				return;
			}

			// get cubeportfolio data and check if is still animating (reposition) the items.
			if (!$.data(gridContainer[0], 'cubeportfolio').isAnimating) {
				filtersCallback.call(null, me);
			}

			// filter the items
			gridContainer.cubeportfolio('filter', me.data('filter'), function() {});
		});


		/*********************************
			activate counter for filters
		*********************************/
		gridContainer.cubeportfolio('showCounter', filtersContainer.find('.cbp-filter-item'), function() {
			// read from url and change filter active
			var match = /#cbpf=(.*?)([#|?&]|$)/gi.exec(location.href),
				item;
			if (match !== null) {
				item = filtersContainer.find('.cbp-filter-item').filter('[data-filter="' + match[1] + '"]');
				if (item.length) {
					filtersCallback.call(null, item);
				}
			}
		});

	})(jQuery, window, document);
</script>

<!-- Masonry -->
<script src="<?php bloginfo("template_directory"); ?>/assets/bower_components/masonry/dist/masonry.pkgd.min.js"></script>
<script type="text/javascript">
	jQuery('.masonry-blog').masonry({
		masonry: {
			columnWidth: 0
		},
		itemSelector: '.masonry-post'
	});
</script>

<!-- Cross Browser Compatibility -->
<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>

<!-- Angular -->
<script src="<?php bloginfo("template_directory"); ?>/assets/bower_components/angular/angular.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/bower_components/angular-scroll/angular-scroll.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/bower_components/angular-recaptcha/release/angular-recaptcha.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/js/angular/app.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/js/angular/services.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/js/angular/controllers.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/assets/js/angular/directives.js"></script>

<!-- Custom Scripts -->
<script src="<?php bloginfo("template_directory"); ?>/assets/js/leemtek.js"></script>

</body>
</html>
