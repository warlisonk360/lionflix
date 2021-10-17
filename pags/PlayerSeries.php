<?php include('items/submenu.php'); ?>
<div class="panel_player">   
<div class="player_img">

  <div class="divisor">   
    <div class="player">
<?php 
$arquivo = file_get_contents('listas/lista_episodios.json');

$json = json_decode($arquivo);

if (empty($json)){
  echo "Erro informações nao encontradas";
  echo "<br>";
}else{

$NameFilme = Url::getURL(1);  
$ep = Url::getURL(3); 
$nomeep = Url::getURL(4);
$temp = Url::getURL(2);  

$novo = urldecode($NameFilme);
$novooutro = urldecode($nomeep);

$foo = get_object_vars($json);

foreach($foo as $objeto){

    $ID = $objeto->ID;
    $Nome = $objeto->Nome;
    $Link = $objeto->Link;
    $Temporadas = $objeto->Temporadas;
    $Ep = $objeto->Ep;
    $Nome_Ep = $objeto->Nome_Ep;

    $search = $novooutro;

if(preg_match("/{$search}/i", $Nome_Ep)) { 
?>
    <iframe src="<?php echo $Link; ?>" width="640" height="360" frameborder="0" allowfullscreen></iframe>

<?php
  }
}

$jsn = file_get_contents("listas/lista_series.json");

$dados = json_decode($jsn);
$dd = get_object_vars($dados);

foreach($dd as $objeto){

    $Nome = $objeto->Nome;
    $ano = $objeto->Ano;
    $idade = $objeto->Idade;
    $fotogrande = $objeto->fotogrande;

    $search = $novo;

if(preg_match("/{$search}/i", $Nome)) {     
?>
     <div class="controle_btn">
    <a href="<?php echo URL::getBase();?>Grade_Series/<?php echo $ano; ?>/<?php echo $NameFilme; ?>/<?php echo $temp; ?>"><button class="btn_voltar">Voltar</button></a>
    </div> 
    </div>

    <div class="outrolado">        
        <p>Nome: <?php echo $novo; ?></p>
        <p>Ep: <?php echo $novooutro; ?></p>
        <p>Classificação: <?php echo $idade; ?></p>
        <img src="<?php echo URL::getBase();?>img/series/<?php echo $fotogrande; ?>">    
    </div>
</div>  
</div>

</div>
<?php
    }
   } 
}
include('items/footer.php');
?>