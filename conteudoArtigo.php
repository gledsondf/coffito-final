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
<!-- <div class="artFoot row">
	<footer>
		<div class="col-2terco">
			<p>CREFFITO 16</p>
			<ul>
				<li><span>categoria:</span><?php echo get_the_category_list(', '); ?></li>
				<li><?php edit_post_link( __( 'Edit')) ?></li>
			</ul>
		</div>
		<ul class="col-terco">
			<li><a href="#"><img title="facebook"  alt="facebook" src="<?php bloginfo('template_url'); ?>/img/logoFace_p.png" /></a></li>
			<li><a href="#"><img title="Youtube"  alt="Youtube" src="<?php bloginfo('template_url'); ?>/img/logoYoutube_p.png" /></a></li>
			<li><a href="#"><img title="Twitter"  alt="Twitter" src="<?php bloginfo('template_url'); ?>/img/logoTwitter_p.png" /></a></li>
			<li><a href="#"><img title="Instagram"  alt="Instagram" src="<?php bloginfo('template_url'); ?>/img/logoInstagram_p.png" /></a></li>
			<li><a href="#"><img title="Flickr"  alt="Flickr" src="<?php bloginfo('template_url'); ?>/img/logoFlickr_p.png" /></a></li>
			<li><a href="#"><img title="Whatsapp"  alt="Whatsapp" src="<?php bloginfo('template_url'); ?>/img/logoWhatsapp_p.png" /></a></li>
		</ul>
	</footer>
</div> -->