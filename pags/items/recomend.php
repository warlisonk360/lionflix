<?php 
function Atualizar(){
$arquivo = 'listas/ultima_verificacao';

if(file_exists($arquivo)){
	$handle = fopen($arquivo, 'r');
	$ler = fread($handle, filesize($arquivo));
	$hoje = date('d-m-Y', $ler);

	if($hoje != date('d-m-Y')){
		$tomorrow = strtotime('+1 day', strtotime($hoje));
		//echo date('d-m-Y', $tomorrow);
		file_put_contents('listas/ultima_verificacao', $tomorrow);
		Criar_Arquivo();
	}

	fclose($handle);
	
}else{
	/*$date = new DateTime();
	$timestamp = $date->getTimestamp();*/	
	$dataAtual = mktime(date('d-m-Y'));
	file_put_contents('listas/ultima_verificacao', $dataAtual);
}

}

function Criar_Arquivo(){
$arquivo = file_get_contents('listas/lista.json');

$array = json_decode($arquivo, true);

$one_item = $array[rand(0, count($array) - 1)];

$dados = json_encode($one_item);
file_put_contents('listas/unico.json', $dados);	
}

Atualizar();
?>