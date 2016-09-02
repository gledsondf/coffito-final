<div class="artTopo">
	<div class="artInfo">
		<ul>
			<li><span>Data: </span><?php the_time( get_option( 'date_format' ) ); ?></li>
		</ul>
	</div>
	<header>
		<?php /* um título h1 */ ?>						
		<h1><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	</header>
</div><!--artTopo-->
<div class="artCont row">
	<?php /* O conteúdo da postagem */ ?>
	<?php the_content( __( 'Leia Mais <span class="meta-nav">»</span>', 'your-theme' )  ); ?>
</div><!--artCont-->
