<div class="artTopoPagina">
	<header>
		<?php /* um título h1 */ ?>						
		<h1><?php the_title(); ?></h1>
	</header>
</div><!--artTopo-->
<div class="artCont row">
	<?php /* O conteúdo da postagem */ ?>
	<?php the_content( __( 'Continue reading <span class="meta-nav">»</span>', 'your-theme' )  ); ?>
</div><!--artCont-->
