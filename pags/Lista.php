<?php 

function Lista(){
include('conexao/connect.php');

$result  = $pdo->query("SELECT * FROM links");

// Lista que armazenará todos os registros:
$meus_dados = array();
$i = 0;

while ($row = $result->fetch()) {
	$i++;

    $meus_dados[$i]['ID'] = $row['ID'];
    $meus_dados[$i]['Nome'] = $row['NameFilme'];
    $meus_dados[$i]['Link'] = $row['LinkFilme'];
    $meus_dados[$i]['Genero'] = $row['Genero'];
    $meus_dados[$i]['Idade'] = $row['Idade'];
    $meus_dados[$i]['Ano'] = $row['Ano'];
    $meus_dados[$i]['Legenda'] = $row['Legenda'];
    $meus_dados[$i]['foto'] = $row['foto'];
    $meus_dados[$i]['fotogrande'] = $row['fotogrande'];
    $meus_dados[$i]['banner'] = $row['Banner'];
    
}

$dados_json = json_encode($meus_dados);

file_put_contents('listas/lista.json', $dados_json);
}

function Lista_Series(){
include('conexao/connect.php');

$result  = $pdo->query("SELECT * FROM info ORDER BY `info`.`Nome` ASC");

// Lista que armazenará todos os registros:
$meus_dados = array();
$i = 0;

while ($row = $result->fetch()) {
	$i++;

    $meus_dados[$i]['ID'] = $row['ID'];
    $meus_dados[$i]['Nome'] = $row['Nome'];
    $meus_dados[$i]['Idade'] = $row['Idade'];
    $meus_dados[$i]['Genero'] = $row['Genero'];
    $meus_dados[$i]['Ano'] = $row['Ano'];
    $meus_dados[$i]['foto'] = $row['foto'];
    $meus_dados[$i]['fotogrande'] = $row['fotogrande'];
    $meus_dados[$i]['total_temporadas'] = $row['Total_Temporadas'];
    
}

$dados_json = json_encode($meus_dados);

file_put_contents('listas/lista_series.json', $dados_json);	
}

function Lista_Epsodios(){
include('conexao/connect.php');

$result  = $pdo->query("SELECT * FROM episodios ORDER BY `episodios`.`Nome` ASC");

// Lista que armazenará todos os registros:
$meus_dados = array();
$i = 0;

while ($row = $result->fetch()) {
	$i++;

    $meus_dados[$i]['ID'] = $row['ID'];
    $meus_dados[$i]['Nome'] = $row['Nome'];
    $meus_dados[$i]['Link'] = $row['Link'];
    $meus_dados[$i]['Temporadas'] = $row['Temporadas'];
    $meus_dados[$i]['Ep'] = $row['Ep'];
    $meus_dados[$i]['Nome_Ep'] = $row['Nome_Ep'];
    
}

$dados_json = json_encode($meus_dados);

file_put_contents('listas/lista_episodios.json', $dados_json);	
}
?>