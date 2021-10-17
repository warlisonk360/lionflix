<?php 
require "classes/Url.php";

$mobile = FALSE;

$user_agents = array("iPhone","iPad","Android","webOS","BlackBerry","iPod","Symbian","IsGeneric");

foreach ($user_agents as $user_agent) {
    if(strpos($_SERVER['HTTP_USER_AGENT'], $user_agent)!==FALSE){
        $mobile = TRUE;
        $modelo = $user_agent;
        break;
    }
}

/*if(!empty($_SERVER['HTTPS'])){ 
    //echo 'HTTPS está ativo';
}else{
   echo "<script>document.location='https://lionflix.xyz'</script>";
}*/

//print_r($_SERVER);
?>

<!DOCTYPE html>
<html>
<head>
	<title>LionFlix</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="imagem/png" href="<?php echo URL::getBase();?>img/lf.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="<?php echo URL::getBase();?>js/glide.min.js"></script>
    <script src="<?php echo URL::getBase();?>js/jquery.paginate.js"></script>
    <link rel="stylesheet" href="<?php echo URL::getBase();?>css/glide.core.min.css" />
    <link rel="stylesheet" href="<?php echo URL::getBase();?>css/glide.theme.min.css" />
    <link rel="stylesheet" href="<?php echo URL::getBase();?>css/jquery.paginate.css" />
    <?php if($mobile){ ?>
    <link rel="stylesheet" href="<?php echo URL::getBase();?>css/telefone.css">
    <?php }else{ ?>
    <link rel="stylesheet" href="<?php echo URL::getBase();?>css/lf_style.css">
    <?php } ?>
</head>
<body class="fundo_pag_principal">

    <div id="principal" class="text-center">
        <?php
        $modulo = Url::getURL( 0 ); 

        if( $modulo == null )
            $modulo = "Genero";

        if( file_exists( "pags/" . $modulo . ".php" ) )
            require "pags/" . $modulo . ".php";
        else
            require "pags/404.php";
        ?>
    </div>
 
</body>
</html>  