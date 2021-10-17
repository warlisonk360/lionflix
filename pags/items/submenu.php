<?php 
if(empty($_SERVER['REQUEST_URI'])){
   header('Location:'.URL::getBase());
}
$tst = Url::getURL(0);
$pag = Url::getURL(1);
$gnr = Url::getURL(2);
$error= "";
$name = "";
$condicao = "";

if($pag == "Filmes"){
    $cd = "Filmes";
}

if($pag == "Series"){
    $cd = "Series";   
}

if(empty($cd)){
  if($tst == "Player"){
    $cd = "Filmes";
  }
  
  if($tst == "PlayerSeries"){
    $cd = "Series";
  }

  if($tst == "Grade_Series"){
    $cd = "Series";
  } 
}
?>

<div class="submenu">
	<div class="home">  
		<a href="<?php echo URL::getBase();?>Genero/<?php echo $cd;?>/Geral/"><img src="<?php echo URL::getBase();?>img/lf.png"></a>
	</div>
	<div class="busca">
		<button id="myBtn"><img src="<?php echo URL::getBase();?>img/lupa.png"></button>
	</div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">	
    <span class="close">&times;</span>
  <div class="janela"> 
    <div class="pn_bsc_btn">
    <a href="<?php echo URL::getBase();?>Genero/<?php echo $cd;?>/Geral/"><button class="<?php if($gnr == "Geral"){echo'active';}else{echo'';} ?>">GERAL</button></a> 
    <a href="<?php echo URL::getBase();?>Genero/<?php echo $cd;?>/Acao/"><button class="<?php if($gnr == "Acao"){echo'active';}else{echo'';} ?>">AÇÃO</button></a>
    <a href="<?php echo URL::getBase();?>Genero/<?php echo $cd;?>/Animacao/"><button class="<?php if($gnr == "Animacao"){echo'active';}else{echo'';} ?>">ANIMAÇÃO</button></a>
    <a href="<?php echo URL::getBase();?>Genero/<?php echo $cd;?>/Aventura/"><button class="<?php if($gnr == "Aventura"){echo'active';}else{echo'';} ?>">AVENTURA</button></a>
    <a href="<?php echo URL::getBase();?>Genero/<?php echo $cd;?>/Biografia/"><button class="<?php if($gnr == "Biografia"){echo'active';}else{echo'';} ?>">BIOGRAFIA</button></a>
    <a href="<?php echo URL::getBase();?>Genero/<?php echo $cd;?>/Comedia/"><button class="<?php if($gnr == "Comedia"){echo'active';}else{echo'';} ?>">COMÉDIA</button></a>
    <a href="<?php echo URL::getBase();?>Genero/<?php echo $cd;?>/Crime/"><button class="<?php if($gnr == "Crime"){echo'active';}else{echo'';} ?>">CRIME</button></a>
    <a href="<?php echo URL::getBase();?>Genero/<?php echo $cd;?>/Drama/"><button class="<?php if($gnr == "Drama"){echo'active';}else{echo'';} ?>">DRAMA</button></a>
    <a href="<?php echo URL::getBase();?>Genero/<?php echo $cd;?>/Familia/"><button class="<?php if($gnr == "Familia"){echo'active';}else{echo'';} ?>">FAMILIA</button></a>
    <a href="<?php echo URL::getBase();?>Genero/<?php echo $cd;?>/Fantasia/"><button class="<?php if($gnr == "Fantasia"){echo'active';}else{echo'';} ?>">FANTASIA</button></a>
    <a href="<?php echo URL::getBase();?>Genero/<?php echo $cd;?>/Faroeste/"><button class="<?php if($gnr == "Faroeste"){echo'active';}else{echo'';} ?>">FAROESTE</button></a>
    <a href="<?php echo URL::getBase();?>Genero/<?php echo $cd;?>/Ficcao/"><button class="<?php if($gnr == "Ficcao"){echo'active';}else{echo'';} ?>">FICÇÃO</button></a>
    <a href="<?php echo URL::getBase();?>Genero/<?php echo $cd;?>/Gospel/"><button class="<?php if($gnr == "Gospel"){echo'active';}else{echo'';} ?>">GOSPEL</button></a>
    <a href="<?php echo URL::getBase();?>Genero/<?php echo $cd;?>/Guerra/"><button class="<?php if($gnr == "Guerra"){echo'active';}else{echo'';} ?>">GUERRA</button></a>
    <a href="<?php echo URL::getBase();?>Genero/<?php echo $cd;?>/Misterio/"><button class="<?php if($gnr == "Misterio"){echo'active';}else{echo'';} ?>">MISTERIO</button></a>
    <a href="<?php echo URL::getBase();?>Genero/<?php echo $cd;?>/Romance/"><button class="<?php if($gnr == "Romance"){echo'active';}else{echo'';} ?>">ROMANCE</button></a>
    <a href="<?php echo URL::getBase();?>Genero/<?php echo $cd;?>/Terror/"><button class="<?php if($gnr == "Terror"){echo'active';}else{echo'';} ?>">TERROR</button></a>
    <a href="<?php echo URL::getBase();?>Genero/<?php echo $cd;?>/Thriller/"><button class="<?php if($gnr == "Thriller"){echo'active';}else{echo'';} ?>">THRILLER</button></a>
    </div>
    <div class="panel_busca">
    <?php if($pag == "Filmes"){ ?>      
    <form class="form_busca" method="post" action="<?php echo URL::getBase();?>Genero/BuscaFilmes/">  
    	<input type="text" placeholder="O que deseja assistir?" name="busca" id="pesquisa" autocomplete="off">
    	<button type="submit" value="Submit">BUSCAR</button>
    </form> 
    <?php } ?> 

    <?php if($pag == "Series"){ ?>
    <form class="form_busca" method="post" action="<?php echo URL::getBase();?>Genero/BuscaSeries/">  
      <input type="text" placeholder="O que deseja assistir?" name="busca" id="pesquisa" autocomplete="off">
      <button type="submit" value="Submit">BUSCAR</button>
    </form>       
    <?php } ?>
    </div>
  </div> 
  </div>
</div>

<script type="text/javascript">
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "flex";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}	
</script>