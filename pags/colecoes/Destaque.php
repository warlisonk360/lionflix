<div class="janela1_carousel">
  <div class="info">
  <h2>+NOVOS FILMES</h2>
  </div>
  <div class="glide glide-novos">
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
    $Idade = $registro->Idade;

    $search = '';

    if(preg_match("/{$search}/i", $Genero)) {
?>

    <?php if($mobile){ ?>
    <li class="glide__slide"><img src="<?php echo URL::getBase(); ?>img/filmes/img_p/<?php echo $foto; ?>">
    <?php }else{ ?>  
    <li class="glide__slide"><img src="<?php echo URL::getBase(); ?>img/filmes/<?php echo $fotogrande; ?>">
    <?php } ?> 

    <?php  
    if($Legenda == 1){
    echo '<div class="p_img"><img src="'.URL::getBase().'img/letraL.png" alt="icone" class="legend_Colect"></div>';
    }
    ?> 
    <div class="panel_idade">
    <p><?php echo $Idade; ?></p> 
    </div>
    <div class="p_btn"> 
    <a href="<?php echo URL::getBase();?>Player/<?php echo $Ano; ?>/<?php echo $Nome; ?>"><button class="btn_colecao"><img src="<?php echo URL::getBase();?>img/play_circle.png"></button></a>
    </div>
    </li>
         
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
new Glide('.glide-novos',{
  type: 'carousel',
  perView: 5
}).mount();
</script>