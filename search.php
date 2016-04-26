<?php get_header(); ?>
<div id="conteudo" class="col-3quarto row">
	<section>
		<h1>Resultados da pesquisa</h1>
		<?php /* O Ciclo — com comentários! */ ?>
		<?php if (have_posts()) :?>	
		<?php while ( have_posts() ) : the_post() ?>
		<?php /* Criando uma div com um ID único graças ao the_ID() e classes semânticas com o post_class() */ ?>
		<div id="post-<?php the_ID(); ?>" class="artigo row">
			<article>
				<?php include "conteudoArtigo.php"; ?>

			</article>
		</div>
	<?php endwhile; else: ?>
	<div id="post-<?php the_ID(); ?>" class="artigo row">	
		<div class="artTopoPagina">
			<header>
				<?php /* um título h1 */ ?>						
				<h1>Resultado da busca</h1>
			</header>
		</div><!--artTopo-->
		<div class="artCont row">
			<?php /* O conteúdo da postagem */ ?>
			<h2>Sinto muito, mas não foi possível encontrar termo procurado.</h2>
		</div><!--artCont-->	
	</div>
<?php endif; ?>
</section>
</div><!--conteudo-->

<div id="menuLateral" class="col-quarto container">
	<aside>
		<?php get_sidebar(); ?>
	</aside>
</div><!--menuLateral-->
<?php get_footer(); ?>