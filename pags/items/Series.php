<div class="panel_f">

	<div class="link_p">
		<a href="<?php echo URL::getBase();?>">Paginal Inicial</a>
	</div>
    <div class="panel_filmes" id="total">	
<?php 

$genero = Url::getURL(2);

if(empty($genero)){
	echo "Nada Encontrado";
}else{
	if($genero == "Acao"){$novo = "Ação"; $genero="Action";}
	if($genero == "Animacao"){$novo = "Animação";}
	if($genero == "Ficcao"){$novo = "Ficção";}
}

include('conexao/connect.php');

$result  = $pdo->query("SELECT * FROM info ORDER BY `info`.`Nome` ASC");

// Lista que armazenará todos os registros:
$meus_dados = array();
$i = 0;

while ($row = $result->fetch()) {

    $ID = $row['ID'];
    $Nome = $row['Nome'];
    $Idade = $row['Idade'];
    $Genero = $row['Genero'];
    $Ano = $row['Ano'];
    $foto = $row['foto'];
    $fotogrande = $row['fotogrande'];
    $Total_Temporadas = $row['Total_Temporadas'];

    if($genero == "Geral"){
    	$search = '';
    }else{
      $search = $genero;
    }
    

    if(preg_match("/{$search}/i", $Genero)) {
?>
	
    <?php if($mobile){ ?>
		<a class="count" href="<?php echo URL::getBase();?>Grade_Series/<?php echo $Ano; ?>/<?php echo $Nome; ?>/1 Temporada"><button id="cont" class="botao"><img src="<?php echo URL::getBase();?>img/series/img_p/<?php echo $foto; ?>"></button></a>
    <?php }else{ ?>
		<a class="count" href="<?php echo URL::getBase();?>Grade_Series/<?php echo $Ano; ?>/<?php echo $Nome; ?>/1 Temporada"><button id="cont" class="botao" title="<?php echo $Nome; ?>"><img src="<?php echo URL::getBase();?>img/series/<?php echo $fotogrande; ?>"></button></a>
<?php
	 } 
  } 
}
?>
</div>

<script type="text/javascript">
 $(total).paginate({ 'perPage': 20 });	
 $(total).paginate({ 'scope': $('a')});
</script>