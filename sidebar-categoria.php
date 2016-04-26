<div id="busca" class="row box barra">
	<?php get_search_form(); ?>

</div>	
<?php
$idCategoria = get_category_by_slug("evento")->cat_ID;
$idCategoria2 = get_category_by_slug("empauta")->cat_ID;
$idCategoria3 = get_category_by_slug("sem-categoria")->cat_ID;
if(is_category('evento') || is_category('empauta')  ){

echo '<div id="contMenuServico" class="contMenuLateral box barra">
	<nav>
		<!-- <h1>Serviços</h1> -->
		<div class="menu"><ul>';


 wp_list_categories('include=' . $idCategoria . ','. $idCategoria2.'&title_li=');

echo '</ul></div>
	</nav>
</div>';
}else {
echo '<h1>Categorias</h1><div id="contMenuServico" class="contMenuLateral box barra">
	<nav>
		<!-- <h1>Serviços</h1> -->
		<div class="menu"><ul>';


 wp_list_categories('exclude=' . $idCategoria . ','. $idCategoria2.','.$idCategoria3.'&title_li=');

echo '</ul></div>
	</nav>
</div>';
};


 ?>
<div class="destaqueIconografico">
</div>
