

<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="sm-ctn">
                    <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="logo-ctn">
                    <a href="<?php echo site_url()?>"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo-white.png" /></a>
				</div>
			</div>
			<div class="col-md-9">
				<div class="menu-ctn">
					<?php wp_nav_menu( 'footer-menu' ); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/site-title-white.png" />
			</div>
			<div class="col-sm-9">
				<div class="copyright">
					<label>© Copyright <?php the_time('Y'); ?></label>
				</div>
			</div>
		</div>
	</div>

	<script>
		$( document ).ready(function() {
			$("#open-btn").click(function(){
				$(".primary-menu-ctn").addClass("active");
			});
			$("#close-btn").click(function(){
				$(".primary-menu-ctn").removeClass("active");
			});
		});
	</script>

</footer>

<?php wp_footer(); ?>

</body>

</html> <!-- close that html tag -->
