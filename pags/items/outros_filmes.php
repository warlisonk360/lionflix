<?php 

$arquivo = file_get_contents('listas/lista.json');

$json = json_decode($arquivo);

if (empty($json)){
	echo "Erro informações nao encontradas";
	echo "<br>";
}

?>

	<?php 

	echo '<div class="panel_outros">';
	echo '<h2 class="titulo_outros">Outros Filmes</h2>';
	echo '<div class="panel_filmes_outros">';

	$foo = get_object_vars($json);

	shuffle($foo);

	$i = 0;
	foreach($foo as $registro): 
	
    $ID = $registro->ID;
    $Nome = $registro->Nome;
    $Link = $registro->Link;
    $Genero = $registro->Genero;
    $Ano = $registro->Ano;
    $Legenda = $registro->Legenda;
    $foto = $registro->foto;
    $fotogrande = $registro->fotogrande;	

	echo '<a href="'.URL::getBase().'Player/'.$Ano.'/'.$Nome.'">';
	echo '<button class="botao" title="'.$Nome.'">';
	echo '<img src="'.URL::getBase().'img/filmes/img_p/'.$foto.'"/>';
    
    if($Legenda == 1){
    echo '<div class="p_img_others"><img src="'.URL::getBase().'img/letraL.png" alt="icone" class="legend_Others"></div>';
    }
 	
	echo '</button>';
	echo '</a>';
	

	if (++$i > 7) break;
 	endforeach; 
 	?>	
 	<br>
 	<br>

	</div>	
 	</div>