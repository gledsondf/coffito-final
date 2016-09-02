	<?php /*Template Name: PrimeiraPágina*/?>
	<?php get_header(); ?>

	<div id="conteudo" class="col-3quarto row">
	<section>

		<?php while ( have_posts() ) : the_post() ?>
		<?php
		//remove o filtro de link das midias sociais desta página 
			remove_filter ('the_content','midiaSocialbtn');
		?>
		<?php the_content( __( 'Leia mais <span class="meta-nav">»</span>', 'your-theme' )  ); ?>
		<?php endwhile; ?>
		<?php /* O Ciclo — com comentários! */ ?>
		<?php query_posts("category_name=destaque&posts_per_page=3");?>
		<div class="principalArtigo artigo row destaque">
			<?php
			   $category_destaque = get_category_by_slug("destaque")->cat_ID;			    // Get the ID of a given category
			   $category_noticia = get_category_by_slug("noticia")->cat_ID;
				    // Get the URL of this category
 				$category_link_noticia = get_category_link( $category_noticia );
 			   $category_link_destaque = get_category_link( $category_destaque );
			
			?>
			<h2><a href="<?php echo esc_url( $category_link_destaque ); ?>">Notícias Destaque</a></h2>
			<article>
				<div class="listaNoticia row">
					<ul>
					<?php if (have_posts()) :?>	
						<?php while ( have_posts() ) : the_post() ?>
						
						<?php
							//remove as imagens dos posts na página principal
							 add_filter( 'the_content', 'remove_images', 100 );
						 ?>
						<li class="row  col-terco">
							<div class="container cartao">
								<?php the_post_thumbnail(); ?>
								<h3>
									<span><?php the_time('d/m/y'); ?></span>
									<a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a>
								</h3>
								<div class="artCont row">

									<?php the_content( __( 'Leia mais <span class="meta-nav">»</span>', 'your-theme' )  ); ?>
								</div>
							</div>
						</li>
						<?php endwhile; else: ?>
							<p><?php _e( 'Não existe Notícias no momento.' ); ?></p>
					<?php endif; ?>
					</ul>
				</div>
			</article>
<!-- 			<p class="linkTodasNoticias row"><a href="<?php echo esc_url( $category_link_noticia ); ?>">todas as notícias</a></p>
 -->		</div>

		<?php query_posts("category_name=noticia&posts_per_page=3&cat=-26");?>
		<div class="principalArtigo artigo row">
			<?php
				    // Get the ID of a given category
				    $category_noticia = get_category_by_slug("noticia")->cat_ID;
				     
				    // Get the URL of this category
 				   $category_link_noticia = get_category_link( $category_noticia );
			?>

<!-- Print a link to this category -->


			<h2><a href="<?php echo esc_url( $category_link_noticia ); ?>">Notícias</a></h2>
			<article>
				<div class="listaNoticia row">
					<ul>
					<?php if (have_posts()) :?>	
						<?php while ( have_posts() ) : the_post() ?>
						
						<?php
							//remove as imagens dos posts na página principal
							 add_filter( 'the_content', 'remove_images', 100 );
						 ?>
						<li class="row  col-terco">
							<div class="container cartao">
								<?php the_post_thumbnail(); ?>
								<h3>
									<span><?php the_time('d/m/y'); ?></span>
									<a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a>
								</h3>
								<div class="artCont row">

									<?php the_content( __( 'Leia mais <span class="meta-nav">»</span>', 'your-theme' )  ); ?>
								</div>
							</div>
						</li>
						<?php endwhile; else: ?>
							<p><?php _e( 'Não existe Notícias no momento.' ); ?></p>
					<?php endif; ?>
					</ul>
				</div>
			</article>
			<p class="linkTodasNoticias row"><a href="<?php echo esc_url( $category_link_noticia ); ?>">todas as notícias</a></p>
		</div>

		<?php query_posts("category_name=evento&posts_per_page=3");?>
		<div class="principalArtigo artigo row">
		   <?php
				$category_evento = get_category_by_slug( 'evento' )->cat_ID;
		   		$category_link_evento = get_category_link( $category_evento );


		    ?>
			<h2 class="tituloPrimera"><a href="<?php echo esc_url( $category_link_evento ); ?>">Eventos / Em pauta</a></h2>
			<article>
				<div class="listaEventos">
					<ul>
					<?php if (have_posts()) :?>
						<?php while ( have_posts() ) : the_post() ?>
						<li>
							<div class="container cartao row">
								<div id="listaEventosFoto" class="col-quarto">
								 <?php the_post_thumbnail(); ?>
								</div>
								<div class="col-3quarto">
									<h3 class="tituloEvento">
										<!--<span><?php the_time('d/m/y'); ?></span>-->
										<a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a>
									</h3>

								</div>
							</div>
						</li>
						<?php endwhile; else: ?>
							<p><?php _e( 'Não existe Evento no momento.' ); ?></p>
					<?php endif; ?>
					</ul>
				</div>
			</article>
			<p class="linkTodasNoticias row"><a href="<?php echo esc_url( $category_link_evento ); ?>">todos os Eventos</a></p>
		</div>

	</section>
	</div><!--conteudo-->


	<div id="menuLateral" class="col-quarto container">
		<aside>
			<?php get_sidebar(); ?>
		</aside>
	</div><!--menuLateral-->
<?php get_footer(); ?>