<div class="panel_random">
  <div class="panel_info">
  <h2>+EM CARTAZ</h2>
  </div>
  <div class="glide glide-random">
    <div data-glide-el="track" class="glide__track">
      <ul class="glide__slides">

<?php

$arquivo = file_get_contents('listas/lista.json');

$json = json_decode($arquivo);

if (empty($json)){
  echo "Erro informações nao encontradas";
  echo "<br>";
}


$foo = get_object_vars($json);

$higher = max(array_keys($foo));

krsort($foo);

$i = 0;

foreach($foo as $registro){

    $ID = $registro->ID;
    $Nome = $registro->Nome;
    $Link = $registro->Link;
    $Genero = $registro->Genero;
    $Ano = $registro->Ano;
    $Legenda = $registro->Legenda;
    $foto = $registro->foto;
    $fotogrande = $registro->fotogrande;
    $Banner = $registro->banner;
    
    $search = '';

    if(preg_match("/{$search}/i", $Nome)) {
?>  
    <div class="panel_banner">
    <li class="glide__slide"><img src="<?php echo URL::getBase(); ?>img/filmes/banner/<?php echo $Banner; ?>">
    </li>
    </div>
         
<?php 
if (++$i > 6) break;
}

}

?>     

      </ul>
    </div>

    <div class="glide_arrows" data-glide-el="controls">
      <button class="glide__arrow glide__arrow--left" data-glide-dir="<" ><i class="fas fa-arrow-left" ><<</i></button>
      <button class="glide__arrow glide__arrow--right" data-glide-dir=">" ><i class="fas fa-arrow-right" >>></i></button>
    </div>

  </div>
</div>

<script>

new Glide('.glide-random',{
  type: 'carousel',
  perView: 1,
  autoplay: 3000
}).mount();

</script>