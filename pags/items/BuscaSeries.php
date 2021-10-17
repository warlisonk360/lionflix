<?php 

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $name = $_POST['busca'];
  if(empty($name)){
    $error = "Não Existe";
  }else{
  	$buscar_nome = urldecode($name);
  }
}

?>
<div class="global">
	<div class="link_p">
		<a href="<?php echo URL::getBase();?>Genero/Series/Geral/">Voltar</a>
	</div>

    <div class="panel_busca">
    <form class="form_busca" method="post" action="<?php echo URL::getBase();?>Genero/Busca/">  
    	<input type="text" placeholder="O que deseja assistir?" name="busca" id="pesquisa" autocomplete="off">
    	<button type="submit" value="Submit">BUSCAR</button>
    </form>  
    </div>

<div class="titulo_resultado"><label>Resultados</label></div>

<?php
$json_file = file_get_contents("listas/lista_series.json");

$obj = json_decode($json_file);

if(empty($json_file)){
  echo "arquivo não existe";
}else{

$i = 0;

foreach ($obj as $registro){ 

    $ID = $registro->ID;
    $Nome = $registro->Nome;
    $Idade = $registro->Idade;
    $Genero = $registro->Genero;
    $Ano = $registro->Ano;
    $foto = $registro->foto;
    $fotogrande = $registro->fotogrande;
    $Total_Temporadas = $registro->total_temporadas;

	   $search = $buscar_nome;

    if(preg_match("/{$search}/i", $Nome)){
?>
	
	<div class="panel_resultado"><a href="<?php echo URL::getBase();?>Grade_Series/<?php echo $Ano; ?>/<?php echo $Nome; ?>/1Temporada"><?php echo $Nome; ?></a><img style="width: 64px; margin-left: 10px;" src="<?php echo URL::getBase();?>img/series/img_p/<?php echo "$foto"; ?>"></div>

<?php
}

}
}
?>
</div>