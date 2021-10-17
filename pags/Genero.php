<?php
if(empty($_SERVER['REQUEST_URI'])){
   header('Location:'.URL::getBase());
}

$nome = Url::getURL(1);

if(empty($nome)){
    include('items/recomend.php');
    include('items/Started.php');
}

if($nome == "Filmes"){
echo '<div class="geral">';   
	include('items/submenu.php');
	include('items/Filmes.php');
   include('items/footer.php');
echo '</div>';   
}

if($nome == "Series"){
echo '<div class="geral">';   
   include('items/submenu.php');
   include('items/Series.php');
   include('items/footer.php');
echo '</div>';   
}

if($nome == "BuscaFilmes"){
echo '<div class="geral">';
   include('items/BuscaFilmes.php');
   include('items/footer.php');
echo '</div>';   
}

if($nome == "BuscaSeries"){
echo '<div class="geral">';
   include('items/BuscaSeries.php');
   include('items/footer.php');
echo '</div>';   
}

if($nome == "Colecoes"){
echo '<div class="geral">';
   include('colecoes/Colecoes.php');
   include('items/footer.php');
echo '</div>';   
}

?>