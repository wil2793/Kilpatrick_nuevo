
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
</head>
<body>
  <header>
      
      <button id="boton1"><a href="index.php">cerrar sesion</a></button>
      <button id="boton2"><a href="consultarNoticia.php">Regresar</a></button>
      <div id='logo'>
       <center><img src="escuela/logo.jpeg" width="300px" height="198px"></center>
      </div>
    </header>
  
<div id='titulo'>
       <h1 class="sombra10">Bienvenidos al sistema de publicacion de noticias</h1> 
</div>
     
      <div id='llenadon'>
               
    
	
     <form action="procesarnoticias.php" method="post" enctype="multipart/form-data">
        <center><b>Titulo de la noticia</b><br />
        <input type="text" name="titulo" id="form1" /><br />
        <b>Descripcion de la noticia</b><br />
        <textarea cols="50" rows="3" name="descripcion" id="texto1"></textarea><br />
        <b>Desarrollo de la noticia</b><br />
        <textarea cols="72" rows="10" name="texto" id="texto"></textarea><br /><br />
        
        <input type="submit" value="PUBLICAR" id="submit" />
        <input type="reset" value="BORRAR TODO" id="submit"/></center>
      </form>
        
    
  


  </div>
  

</body>
</html>
