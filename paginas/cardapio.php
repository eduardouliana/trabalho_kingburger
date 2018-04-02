<main>
<section id="cardapio">
    <div class="cardapio">
	<h1 class="center">
        Cardápio</h1>

        <div class="container linha">
            <div class="item">
                <img src="images/1.png" alt="" title="">
                <p>Burger grandão</p>
                <p class=valor>R$ 30,00</p>
            </div>
            <div class="item">
                <img src="images/2.png" alt="" title="">
                <p>Burger de frango</p>
                <p class=valor>R$ 15,00</p>
            </div>
            <div class="item">
                <img src="images/3.png" alt="" title="">
                <p>Vegetariano</p>
                <p class=valor>R$ 10,00</p>
            </div>
            <div class="item">
                <img src="images/8.png" alt="" title="">
                <p>Burger normal</p>
                <p class=valor>R$ 12,50</p>
            </div>
            <div class="item">
                <img src="images/9.png" alt="" title="">
                <p>Burger duplo</p>
                <p class=valor>R$ 16,00</p>
            </div>
            <div class="item big">
                <img src="images/10.png" alt="" title="">
                <p>Burger família</p>
                <p class=valor>R$ 25,00</p>
            </div>


        </div>

         <p class="center msg-cardapio">
			<br>
			Melhor burger do mundo
		</p>
</section>
</main>
<div class="bacon"></div>
<footer>
		<div class="container row">
			<div class="coluna">
				<h3>Menu de Acesso</h3>
				<ul>
					<li><a href="home" title="Home">Home</a></li>
					<li><a href="sobre" title="Sobre a King Burger">Sobre</a></li>
					<li><a href="cardapio" title="Cardápio">Cardápio</a></li>
					<li><a href="contato" title="Contao">Contato</a></li>
				</ul>
			</div>
			<div class="coluna borda">
				<div class="fb-page" data-href="https://www.facebook.com/professorburnes/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/professorburnes/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/professorburnes/">ProfessorBurnes</a></blockquote></div>
			</div>
			<div class="coluna borda">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.6648497272745!2d-53.315848449780674!3d-23.759328074741354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f2d40292269565%3A0x34c0ef5f4ffa7009!2sCol%C3%A9gio+e+Faculdade+ALFA+de+Umuarama!5e0!3m2!1spt-BR!2sbr!4v1521038515751" width="100%" height="215" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<p class="center">
			Desenvolvido por Tidinho - Todos os Direitos Reservados
		</p>
</footer>

<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.12';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

	$("#menu").click(function() {
		$("nav ul").toggle();
	})

</script>