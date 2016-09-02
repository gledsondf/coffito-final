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
						<li>CNPJ: 00.487.140/0001-36</li>
					</ul>
				</address>

			</div>
			<div id="midiaRodape" class="col-terco">
					<ul>
						<li><a href="https://www.facebook.com/Coffitooficial/" target="_blank"><img title="facebook"  alt="facebook" src="http://coffito.gov.br/nsite/wp-content/themes/coffito/img/logoFace.png" /></a></li>
						<li><a href="https://www.youtube.com/channel/UCz9pTR7-65dqctZ5i0WfaRw"><img title="Youtube"  alt="Youtube" src="http://coffito.gov.br/nsite/wp-content/themes/coffito/img/logoYoutube.png" /></a></li>
						<li><a href="https://twitter.com/@coffito_oficial" target="_blank"><img title="Twitter"  alt="Twitter" src="http://coffito.gov.br/nsite/wp-content/themes/coffito/img/logoTwitter.png" /></a></li>
						<li><a href="https://www.instagram.com/comunicacao_coffito/" target="_blank"><img title="Instagram"  alt="Instagram" src="http://coffito.gov.br/nsite/wp-content/themes/coffito/img/logoInstagram.png" /></a></li>
						<li><a href=" https://www.flickr.com/photos/coffito/" target="_blank"><img title="Flickr"  alt="Flickr" src="http://coffito.gov.br/nsite/wp-content/themes/coffito/img/logoFlickr.png" /></a></li>
						<!--<li><a href="#"><img title="Whatsapp"  alt="Whatsapp" src="http://coffito.gov.br/nsite/wp-content/themes/coffito/img/logoWhatsapp.png" /></a></li> -->
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

			$(this).parent().addClass("esconde");
			});

/*xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx aumentar e diminuir fonte */
$("#normal-fonte").click(function () {
    var size = "14"; 

    $("#conteudo article div.artCont").animate({'font-size' : size + 'px'});
 return false;
 }); 

$("#aumentar-fonte").click(function () {
    var size = $("#conteudo article div.artCont").css('font-size'); 
 
    size = size.replace('px', '');
    size = parseInt(size) + 2; 
 
    $("#conteudo article div.artCont").animate({'font-size' : size + 'px'});
 return false;
 }); 
 
 $("#diminuir-fonte").click(function () {
    var size = $("#conteudo article div.artCont").css('font-size'); 
 
    size = size.replace('px', '');
    size = parseInt(size) - 2;
 
    $("#conteudo article div.artCont").animate({'font-size' : size + 'px'});
 return false;
});
/*xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx trocar estilo css*/
 $("#contraste-fonte").click(function () {

 	$("link[title='contraste'").attr("href","<?php bloginfo('template_url'); ?>/styleContraste.css");
   
 });
  $("#normalContraste-fonte").click(function () {

 	$("link[title='contraste'").attr("href","");
   
 });

 });			

</script>
 <?php wp_footer(); ?> 
</body>
</html>