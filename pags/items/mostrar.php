<?php 

$arquivo = file_get_contents('listas/unico.json');

$array = json_decode($arquivo, true);

$Nome = $array['Nome'];
$Link = $array['Link'];
?>

<div class="filme">
<p class="texto2"><?php echo $Nome;?></p>
    <?php if($mobile){ ?>
     <iframe src="<?php echo $Link; ?>" width="320" height="240" frameborder="0" allowfullscreen></iframe>
    <?php }else{ ?>
     <iframe src="<?php echo $Link; ?>" width="640" height="360" frameborder="0" allowfullscreen></iframe>
    <?php } ?>
</div>