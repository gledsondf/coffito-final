</div><!--geral-->
<div id="geralRodape" class="row">
	<div id="contRodape" class="row">
	<div id="acessorios">
		<ul>
			<li><a href="#topo" ><img title="ir para o topo"  alt="seta ir para o topo" src="<?php bloginfo('template_url'); ?>/img/setaTop.png" /></a></li>
		</ul>
	</div>
		<footer>
			<div id="enderecoRodape" class="col-2terco">
				<address>
					<ul class="listaEndereco">
						<li>SEDE: SRTVS quadra 701, conjunto L, Edifício Assis Chateaubriand, bloco II, salas 602/614.</li>
						<li>CEP 70.340-906 - Brasília - DF.</li>
						<li>Telefone:(61)3035-3800 Fax:(61) 3321-0828.</li>
						<li>SUBSEDE: Rua Padre Anchieta,2285. Edifício Delta Center, Salas 801/802. Bairro Bigorrilho, Curitiba/Paraná.</li>
						<li>CEP: 80730.000</li>
					</ul>
				</address>

			</div>
			<div id="midiaRodape" class="col-terco">
				<ul>
					<li><a href="https://www.facebook.com/Conselho-Regional-de-Fisioterapia-e-Terapia-Ocupacional-do-Maranh%C3%A3o-792759374172502/" target="_blank"><img title="facebook"  alt="facebook" src="<?php bloginfo('template_url'); ?>/img/logoFace.png" /></a></li>
<!-- 					<li><a href="#"><img title="Youtube"  alt="Youtube" src="<?php bloginfo('template_url'); ?>/img/logoYoutube.png" /></a></li>
 -->					<li><a href="https://twitter.com/crefito16" target="_blank"><img title="Twitter"  alt="Twitter" src="<?php bloginfo('template_url'); ?>/img/logoTwitter.png" /></a></li>
					    <li><a href="https://instagram.com/crefito16/" target="_blank"><img title="Instagram"  alt="Instagram" src="<?php bloginfo('template_url'); ?>/img/logoInstagram.png" /></a></li>
					<li><a href="https://www.flickr.com/photos/crefito16/" target="_blank"><img title="Flickr"  alt="Flickr" src="<?php bloginfo('template_url'); ?>/img/logoFlickr.png" /></a></li>
					<!--<li><a href="#"><img title="Whatsapp"  alt="Whatsapp" src="<?php bloginfo('template_url'); ?>/img/logoWhatsapp.png" /></a></li> -->
				</ul>
				
				
			</div>
		</footer>
	</div>
</div><!--geralRodape-->

<script type="text/javascript">
	$(window).load(function() {
			


			$("li.menuP").on("click","a[href='#']",function(){
			$("div#menuLateral").addClass("openMenu");
			$("li.menuP").addClass("esconde");
			$("li.fecharMenu").addClass("mostrar");
			});

			$("li.fecharMenu").on("click","a[href='#']",function(){
			$("div#menuLateral").removeClass("openMenu");
			$("li.fecharMenu").removeClass("mostrar");
			$("li.menuP").removeClass("esconde");

			$(this).parent().hide();
			});

	});
/*	function abreMenu() {
		document.getElementById("menuN").style.display="block";
	}
	function fecharMenu() {
		//alert("teste");
		document.getElementById("menuN").style.display="none";
	}*/
</script>
 <?php wp_footer(); ?> 
</body>
</html>