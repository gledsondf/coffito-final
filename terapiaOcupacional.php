	<?php /*Template Name: TerapiaOcupacional*/?>
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

		<?php query_posts("category_name=noticiaTo&posts_per_page=3");?>
		<div class="principalArtigo artigo row">
			<?php
				    // Get the ID of a given category
				    //$category_noticiaTo = get_cat_ID( 'notícia - Terapia Ocupacional' );
				    $category_noticiaTo = get_category_by_slug("noticiaTo")->cat_ID;
				   

				    // Get the URL of this category
 				   $category_link_noticiaTo = get_category_link( $category_noticiaTo );
 				   
			?>

<!-- Print a link to this category -->

			<h2><a href="<?php echo esc_url( $category_link_noticiaTo ); ?>">Notícias</a></h2>
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
		</div>
	</section>
	</div><!--conteudo-->


	<div id="menuLateral" class="col-quarto container">
		<aside>
			<?php get_sidebar(terapiaOcupacional); ?>
		</aside>
	</div><!--menuLateral-->
<?php get_footer(); ?>