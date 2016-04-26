<div class="artTopo">
	<div class="artInfo">
		<ul>
			<li><h1><span><?php the_time('d/m/y'); ?></span> <a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h1></li>
		</ul>
	</div>
</div><!--artTopo-->
<!-- <div class="artCont row">
	<?php /* O conteúdo da postagem */ ?>
	<?php the_content( __( 'Continue reading <span class="meta-nav">»</span>', 'your-theme' )  ); ?>
</div> --><!--artCont-->
