<?php include('items/submenu.php'); ?>
<div class="panel_player">   
<div class="player_img">
    <div class="player">
<?php 
$arquivo = file_get_contents('listas/lista_ordem.json');

$json = json_decode($arquivo);

if (empty($json)){
  echo "Erro informações nao encontradas";
  echo "<br>";
}else{

$NameFilme = Url::getURL(2);
$AnoFilme = Url::getURL(1);

$novo = urldecode($NameFilme);

$foo = get_object_vars($json);

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

    if($Nome == $novo){
    if($Ano = $AnoFilme){
?>
    <iframe src="<?php echo $Link; ?>" width="640" height="360" frameborder="0" allowfullscreen></iframe>

<?php
    }    
    }
}

}
?>


    </div>
</div>

</div>
<?php
include('items/footer.php');
?>