<div class="geral">
<?php 
include('items/submenu.php');
?>
<div class="panel_f_ep"> 
<div class="panel_ep">    
<?php
if(empty($_SERVER['REQUEST_URI'])){ 
   header("Location: ../index"); 
} 

$NameFilme = Url::getURL(2); 
$temp = Url::getURL(3); 
 
$tmp = urldecode($temp);
$novo = urldecode($NameFilme);
?>
<div class="titulo_player">
<h1><?php echo $novo; ?></h1>
</div>
<?php
include('conexao/connect.php');

$rst = $pdo->prepare("SELECT DISTINCT Nome,Temporadas FROM episodios WHERE Nome = :nm");
$rst->bindParam(':nm', $novo, PDO::PARAM_STR);
$rst->execute();

while ($row = $rst->fetch(PDO::FETCH_ASSOC)){

if($mobile){ echo "<div class='centro'>"; }
echo '<a href="'.$row["Temporadas"].'"><button id="temp1" class="btn_temp">'.$row["Temporadas"].'</button></a>';
if($mobile){ echo "</div>"; }
}

$result  = $pdo->query("SELECT * FROM episodios ORDER BY `episodios`.`Nome` ASC");

while ($row = $result->fetch()) {

    $ID = $row['ID'];
    $Nome = $row['Nome'];
    $Link = $row['Link'];
    $Temporadas = $row['Temporadas'];
    $Ep = $row['Ep'];
    $Nome_Ep = $row['Nome_Ep'];

    $search = $tmp;

    if($Nome == $novo){
    if(preg_match("/{$search}/i", $Temporadas)){
?>  
    <div class="centro_painel"> 
    <?php if($mobile){ ?>
    <a href="<?php echo $Link; ?>" target="_blank"><button class="btn_series" name="ep_serie" value="<?php echo $Ep; ?>"><?php echo $Ep; ?> - <?php echo $Nome_Ep; ?></button></a>
    <?php }else{ ?>    
    <a href="<?php echo URL::getBase();?>PlayerSeries/<?php echo $novo; ?>/<?php echo $temp; ?>/<?php echo $Ep; ?>/<?php echo $Nome_Ep; ?>/"><button class="btn_series" name="ep_serie" value="<?php echo $Ep; ?>"><?php echo $Ep; ?> - <?php echo $Nome_Ep; ?></button></a>
    <?php } ?>
     </div>
<?php 
  } 
 }  
}

?>
</div>
</div>

<?php
include('items/footer.php');
?>
