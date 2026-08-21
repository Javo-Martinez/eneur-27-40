<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="js/jquery.min.js"></script>
<link href="css/layout.css" type="text/css" rel="stylesheet">
</head>

<body>
<div id='player'>
    <audio id="audio" controls="controls" style="background-color:black">
    <!--
    	En source va el primer tema de la lista
    -->
     <source src="./musica/1401.mp3" type="audio/mp3">
    </audio>
</div>
<ul id='playlist'>
  <li class='active'><a href='./musica/1401.mp3'>Estoy hecho un demonio - Los Náufragos</a></li>
  <li><a href='./musica/1402.mp3'>Soley Soley - Middle Of The Road</a></li>
  <li><a href='./musica/1403.mp3'>Tu sei tu - Enrico Chiari</a></li>
  <li><a href='./musica/1404.mp3'>Butterfly - Pintura Fresca</a></li>
  <li><a href='./musica/1405.mp3'>Agnese - Nicola di Bari</a></li>
  <li><a href='./musica/906.mp3'>Mammy Blue - James Darren</a></li>
</ul>
<script src="js/player.js">
</script>
</body>
</html>