<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="js/jquery.min.js"></script>
<link href="css/layout.css" type="text/css" rel="stylesheet">
</head>

<body>
<div id='player'>
    <audio id="audio" controls="controls" style="background-color:black" controlsList="nodownload">
    <!--
    	En source va el primer tema de la lista
    -->
     <source src="./musica/1401.mp3" type="audio/mp3">
    </audio>
</div>
<ul id='playlist'>
  <li class='active'><a href='./musica/1101.mp3'>Los cosos de al lao - Edmundo Rivero</a></li>
  <li><a href='./musica/1102.mp3'>Desde el alma - Julio Sosa</a></li>
  <li><a href='./musica/1103.mp3'>La Yumba - Osvaldo Pugliese y su Orquesta</a></li>
  <li><a href='./musica/1104.mp3'>Ninguna - Aníbal Troilo & Roberto Rufino</a></li>
  <li><a href='./musica/1105.mp3'>Malena - Roberto Goyeneche & la Orquesta Tipica de Garello</a></li>
</ul>
<script src="js/player.js">
</script>
</body>
</html>