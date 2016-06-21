<!DOCTYPE >
<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php
	if ( is_single() ) { single_post_title(); }
	elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
	elseif ( is_page() ) { single_post_title(''); }
	elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
	elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
	else { bloginfo('name'); wp_title('|'); get_page_number(); }
	?></title>
<!-- 	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 -->	<meta charset="UTF-8" >
	<meta name="viewport" content="width=device-width, initial-scaled=1.0">



	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/bootstrap-carousel.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css"  />
	<link rel="stylesheet" type="text/css" href="" title="contraste" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font-awesome-4.5.0/css/font-awesome.min.css">

	<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap-carousel.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script>
	$(window).load(function() {
		$('#myCarousel').carousel()

		$("ul.auxiliarMenu").on("click","li a[href='#']",function(){
			$("ul.auxiliarMenu").find("a[href='#']").removeClass("openMenu");
			$(this).addClass("openMenu");

		});

	});
	</script>
	
</head>

<body>
	<?php
//inclui o código do google analytics
	include_once("analyticstracking.php");
	?>	
	<div id="topo" class="row">
		<div id="topoContainer" class="row">
			<div id="logo" class="col-quarto">
				<div id="contLogo">
					<a href="<?php bloginfo( 'url' ) ?>/" title="Conselho Federal de Fisioterapia e Terapia Ocupacional" rel="home"><img src="<?php bloginfo('template_url'); ?>/img/logoCoffito.png" title="Conselho Federal de Fisioterapia e Terapia Ocupacional" alt="Conselho Federal de Fisioterapia e Terapia Ocupacional" /></a>
				</div>
			</div>
			<div id="menu" class="col-3quarto">
				<nav>
					<ul id="menuN">
						<?php wp_nav_menu( array( 'theme_location' => 'menu-principal','items_wrap' => '%3$s','container' => '', ) ); ?>
						<li class="menuP">
							<a href="#"  title="Sub-Menu"><img src="<?php bloginfo('template_url'); ?>/img/tresmenu.png" /></a>
						</li>
						<li class="fecharMenu" >
							<a href="#" title="Sub-Menu"><img src="<?php bloginfo('template_url'); ?>/img/fecharMenu.png" /></a>
						</li>
					</ul>
				</nav>
			</div>
		</div><!--topoContainer-->
	</div><!--top-->
	<div id="geral" class="row">
		<div id="acessibilidade" class="row">
			<div id="contAcessibilidade" class="col-col row">

				<?php 
				if (is_home()|| is_page_template("index.php")) {
					$homeLink = get_bloginfo('url');
					$imgLink = get_bloginfo('template_url');

					echo '<div id="crumbs" class="col-3quarto">';	 
					echo '<span class="primeiro"><a href="'.$homeLink.'">'.'<img title="COFFITO - Página principal"  src="'.$imgLink.'/img/home.png" /></a></span>';
					echo '</div>';

				}else{
					wp_custom_breadcrumbs();

				};
				?>	
				<div id="btnAcessibilidade" class="col-quarto">
					<ul class="listaFormulario">
						<li>
							<!-- DIMINUIR FONTE -->
							 <span id="diminuir-fonte">
							     <a title="Diminuir Fonte" alt="Diminuir">A-</a>
							 </span> 
							 <!-- normal fonte -->
							 <span id="normal-fonte">
							 	<a title="Normal Fonte" alt="Normal">A</a>
							 </span>
							 <!-- AUMENTAR FONTE -->
							 <span id="aumentar-fonte">
							     <a title="Aumentar Fonte" alt="Aumentar">A+</a>
							 </span>
							 <!--contraste fonte-->
							 <span id="contraste-fonte">
							     <a title="Contraste" alt="Contraste">A</a>
							 </span>
							 <!--normalcontraste fonte-->
							 <span id="normalContraste-fonte">
							     <a title="Normal Contraste" alt="Normal Contraste">A</a>
							 </span>							 

						</li>
					</ul>
				</div>
			</div>
		</div>