<?php 

$arquivo = file_get_contents('listas/lista.json');

$array = json_decode($arquivo, true);

$one_item = $array[rand(0, count($array) - 1)];

$Nome = $one_item['Nome'];
$Ano = $one_item['Ano'];
$Link = $one_item['Link'];

?>

<div class="panel_btn">
<?php if($mobile){ ?>
<a href="<?php echo $Link; ?>" target="_blank"><button class="random">ASSISTIR FILME ALEATORIO</button></a>
<?php }else{ ?>	
<a href="<?php echo URL::getBase();?>Player/<?php echo $Ano; ?>/<?php echo $Nome; ?>"><button class="random">ASSISTIR FILME ALEATORIO</button></a>
<?php } ?>	
</div>