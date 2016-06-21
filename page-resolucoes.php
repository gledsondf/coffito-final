	<?php /*Template Name: Resoluções*/?>
	<?php get_header(); ?>

	<div id="conteudo" class="col-3quarto row">
	<section>
		<?php
		//a variavel $paged serve para funcionar a paginação quando adicionado por query post
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		 query_posts("category_name=resolucoes&posts_per_page=20&paged=".$paged);

		 ?>
		<div class="principalArtigo artigo row">
			<?php
				    // Get the ID of a given category
				   	$category_resolucoes = get_category_by_slug("resolucoes")->cat_ID;

				    // Get the URL of this category
 				   $category_link_resolucoes = get_category_link( $category_resolucoes );

 				   $category_link_resolucoesPage = get_page_link(19);
			?>

<!-- Print a link to this category -->
<div id="buscaResolucoes" class="row box barra">
	<form id="searchformResolucoes" action="<?php bloginfo('home'); ?>/" method="get">
		<div>
			<input id="s" type="text" name="s" value="<?php echo wp_specialchars($s, 1); ?>" />
			<input type="hidden" name="cat" value="14" />
			<input id="searchsubmit" type="submit" value="Buscar nas Resoluções" />
		</div>
	</form>
</div>
			<h2>resoluções</h2>
			<article>
				<div class="listaEventos">
					<ul>
					<?php if (have_posts()) :?>
						<?php while ( have_posts() ) : the_post() ?>
						<li>
							<div class="container cartao row">
								<div class="col-col">
									<h3>
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
		</div>
	<div id="paginacao">
<!-- 		links de paginação -->
	<?php
		global $wp_query;

		$big = 999999999; // need an unlikely integer

		echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages
		) );
	?>
</div>		
	</section>
	</div><!--conteudo-->


	<div id="menuLateral" class="col-quarto container">
		<aside>
			<?php get_sidebar(); ?>
		</aside>
	</div><!--menuLateral-->
<?php get_footer(); ?>