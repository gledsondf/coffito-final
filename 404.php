	
	<?php get_header(); ?>
	<div id="conteudo" class="col-3quarto row">
	<section>
	<div id="post-<?php the_ID(); ?>" class="artigo row">	
		<div class="artTopoPagina">
			<header>
				<?php /* um título h1 */ ?>						
				<h1>Ué! onde esta a página que estava aqui?</h1>
			</header>
		</div><!--artTopo-->
		<div class="artCont row erroPagina">
			<?php /* O conteúdo da postagem */ ?>
			<h2>Sinto muito, mas a página não foi encontrada.</h2>
		</div><!--artCont-->	
	</div>
		<?php /* O Ciclo — com comentários! */ ?>
		<?php while ( have_posts() ) : the_post() ?>
		<?php /* Criando uma div com um ID único graças ao the_ID() e classes semânticas com o post_class() */ ?>
		
		<?php endwhile; ?>
	</section>
	</div><!--conteudo-->


<div id="menuLateral" class="col-quarto container">
	<aside>
		<?php get_sidebar(); ?>
	</aside>
</div><!--menuLateral-->	
<?php get_footer(); ?>