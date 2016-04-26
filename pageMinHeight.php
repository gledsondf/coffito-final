	
	<?php /*Template Name: Pagina Com altura mínima*/?>
	<?php get_header(); ?>

	<div id="menuLateral" class="col-quarto">
		<aside>
			<?php get_sidebar(); ?>
		</aside>
	</div><!--menuLateral-->

	<div id="conteudo" class="col-3quarto row">
	<section>
		<div id="conteudoId">
			<header>
				<h1><?php wp_custom_breadcrumbs(); ?></h1>
			</header>
		</div>

		<?php /* O Ciclo — com comentários! */ ?>
		<?php while ( have_posts() ) : the_post() ?>
		<?php 
			//remove o filtro de link das midias sociais desta página
			remove_filter ('the_content','midiaSocialbtn');
		?>
		<?php /* Criando uma div com um ID único graças ao the_ID() e classes semânticas com o post_class() */ ?>
				<div id="post-<?php the_ID(); ?>" class="artigo row alturaMinima">
					<article>
						<?php include "conteudoPagina.php"; ?>

					</article>
				</div>
		<?php endwhile; ?>
	</section>
	</div><!--conteudo-->
<?php get_footer(); ?>