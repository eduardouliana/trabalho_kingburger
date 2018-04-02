<main>
<section class="contato">
    <form class="form-contato">
    <div  class="itemForm">
        <label>Telefone</label><br>
        <input type="text" value="" size="60" maxlength="128" class="" />
    </div>
    <div  class="itemForm">
        <label>E-mail </label><br>
        <input type="email" size="60" />
    </div>
    <div  class="itemForm">
        <label>Comentários </label>
        <div><textarea cols="60" rows="5"></textarea></div>
    <div class=""><input class="buttonSubmit" type="submit" value="COMENTÁRIOS" /></div></div>
	
	</form>
	<div class="linha container">
    
    <div class="formas-contato">
        <i class="fas fa-map"> Av. Araucária, 1000 - Maravilha - SC</i><br>
		<i class="fas fa-mobile"> (49) 3665-1406</i><br>
		<i class="fas fa-envelope"> kingburger@gmail.com</i><br>
    </div>
    </div>
	
</section>
</main>
<footer>
		<div class="container row">
			<div class="coluna">
				<h3>Contato</h3>
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