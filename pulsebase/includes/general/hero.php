<div class="container">
	<div class="col-xs-12">
		<div class="hero-image" style="background-image:url(<?php echo get_the_post_thumbnail_url()?>">
			<?php
			if(get_field('hero_title')){
				echo '<h1>'.get_field('hero_title').'</h1>';
			}
			if(get_field('hero_subtitle')){
				echo '<h2>'.get_field('hero_subtitle').'</h2>';
			}
			?>
		</div>
	</div>
</div>