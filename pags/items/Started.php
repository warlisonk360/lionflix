<?php 

?>

<div class="started">

<div class="direita">
	<p class="titulo">LionFlix</p>

	<div class="meio">
		<a href="<?php echo URL::getBase();?>Genero/Filmes/Geral/" class="links"><p>+FILMES</p></a>
		<a href="<?php echo URL::getBase();?>Genero/Series/Geral/" class="links"><p>+SERIES</p></a>
		<a href="<?php echo URL::getBase();?>Genero/Colecoes/" class="links"><p>+COLEÇÕES</p></a>
		<a href="https://chat.whatsapp.com/F7Q9gU2yL7x4bWZ50osVyw/" target="_blank" class="links"><p>PEDIR FILMES</p></a>
		<a href="https://www.facebook.com/lionflixfilmes/" target="_blank" class="links"><p>FACEBOOK</p></a>
	</div>

	<p class="final">Created by Warlison Santos</p>
</div>

<div class="esquerda">
	<p class="canto">lfstudio</p>

	<?php include ('contador.php'); ?>

	<?php include ('random.php'); ?>

	<div class="recomend">
		<p class="texto1">RECOMENDAÇÃO DO DIA:</p>
		<?php include ('mostrar.php'); ?>
	</div>
</div>
</div>