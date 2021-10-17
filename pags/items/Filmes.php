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

$result  = $pdo->query("SELECT * FROM links ORDER BY `links`.`NameFilme` ASC");

while ($row = $result->fetch()) {

    $ID = $row['ID'];
    $Nome = $row['NameFilme'];
    $Link = $row['LinkFilme'];
    $Genero = $row['Genero'];
    $Idade = $row['Idade'];
    $Ano = $row['Ano'];
    $Legenda = $row['Legenda'];
    $foto = $row['foto'];
    $fotogrande = $row['fotogrande'];
    $Banner = $row['Banner'];

    if($genero == "Geral"){
    	$search = '';
    }else{
      $search = $genero;
    }
    

    if(preg_match("/{$search}/i", $Genero)){
?>
    <?php if($mobile){ ?> 
		<a class="count" href="<?php echo $Link; ?>" target="_blank"><button id="cont" class="botao"><img src="<?php echo URL::getBase();?>img/filmes/img_p/<?php echo $foto; ?>">
      <?php if($Legenda == 1){ ?>
      <div class="legenda"> 
      <img src="<?php echo URL::getBase();?>img/letraL.png">
      </div>
      <?php }?>
    <div class="panel_idade_filme">
      <p><?php echo $Idade; ?></p> 
    </div>        
    </button>
    </a>
    <?php }else{ ?>
		<a class="count" href="<?php echo URL::getBase();?>Player/<?php echo $Ano; ?>/<?php echo $Nome; ?>"><button id="cont" class="botao" title="<?php echo $Nome; ?>"><img src="<?php echo URL::getBase();?>img/filmes/<?php echo $fotogrande; ?>">
      <?php if($Legenda == 1){ ?>
      <div class="legenda"> 
      <img src="<?php echo URL::getBase();?>img/letraL.png">
      </div>
      <?php }?>      
    </button>    
    </a>    
<?php
	 } 
  } 
}
?>
    </div>
</div>

<script type="text/javascript">
 $(total).paginate({ 'perPage': 20 });	
 $(total).paginate({ 'scope': $('a')});
</script>