<p><strong>Juliano Borobio</strong> se fue de la vida dejando tras de sí una obra pictórica que, fundamentalmente, ocupó espacios íntimos y cotidianos. En un mundo en el que la pertenencia al canon intelectual tiene un valor que pretende opacar cualquier otra ocupación, el sanjuanino repartió sus horas productivas entre la abogacía y la plástica. No porque quisiera ser un marginal (es decir, aquel que está por fuera del statu quo) sino porque sencillamente <strong>Borobio</strong> transitó el mundo tal y cuál fue: un hombre generoso, comprometido y solidario. Durante años perteneció a un grupo de plásticos que conformó junto a sus amigos de la vida Pedro Roth, Pierre Cantamessa y Federico Peralta Ramos. Durante años plasmó en objetos, papeles y libros de autor sus más profundas reflexiones; no ahorrándole nada al sujeto que se acercara a ver sus obras; interpelando desde la crudeza a hombres y mujeres. </p>
<p>Ahora el mundo es sin <strong>Juliano Bororbio</strong>. Ahora el mundo tiene una mueca menos, unas cejas frondosas que se han perdido, una mirada de ojos claros que ya no escrutará sus bordes y sus límites. Para quienes no tuvieron el placer de conocerlo y conversar con él, quedan sus obras. Para quienes sí tuvimos esa suerte, queda un vacío tan imposible como innecesario de llenar, puesto que ante la apelación de la memoria, los recuerdos se ocuparán de mantenerlo entre los vivos.</p>
<br />

<? 
	//RECUPERO LA ESTRUCTURA DE LA PAGINA
	$imagen = 	"SELECT 
				cantidadImagenes
				FROM notas, pagina
				WHERE notas.ordenEnIndice > 0
				  AND notas.idPagina = pagina.id_pagina
				  AND notas.edicionNumero = pagina.edicionNumero
				  AND pagina.ordenSecuencial = ". $pag . "
				  AND pagina.edicionNumero =". $numeroActual; 
	

	
			echo "<div id=\"slider2\" style=\"height: 440px; margin-top: 15px;\">";
			
				$paginaimagen = mysql_query($imagen) or die("Couldn't execute query: ".$imagen);
				
				while ($row= mysql_fetch_array($paginaimagen)) 
				{
					$cantidadImagenes 	= $row["cantidadImagenes"];
				}
	
				for ($i=1; $i<=$cantidadImagenes; $i++)
				{
					$size = GetImageSize("borobio/".$i.".jpg");	
					$anchura=$size[0];
					$nuevoAncho = (770 - $anchura) / 2;
					echo "	<img id=".$i." src=\"borobio/".$i.".jpg\" style=\"margin-left:".$nuevoAncho."px\" />";	
				}
				
			
			echo "</div>";
			
			

			echo "<div id=\"contenedorGaleria\">";
			
				echo "<div id=\"galeriaTexto\" onclick=\"slider2('A')\"> <tt>'<'Anterior</tt>  </div>";

	
				echo "<div id=\"galeriaAnt\">";
				
					for ($i=1; $i<=$cantidadImagenes; $i++)
					{
						if (($i-1)==0)
						{	
							$iA = $cantidadImagenes;
						}
						else
						{
							$iA = $i-1;
						}
						echo"<img style=\"float:left\" src=\"borobio/mini".($iA).".jpg\" />";
					}
	
				echo "</div>";


				echo "<div id=\"galeria\">";
				
					for ($i=1; $i<=$cantidadImagenes; $i++)
					{
						echo"<img style=\"float:left\" src=\"borobio/mini".($i).".jpg\" />";
					}
	
				echo "</div>";
				
			
				echo "<div id=\"galeriaSig\">";
				
					for ($i=1; $i<=$cantidadImagenes; $i++)
					{
						
						if (($i+1) > $cantidadImagenes)
						{	
							$iS = 1;
						}
						else
						{
							$iS = $i+1;
						}
						
						echo"<img style=\"float:left\" src=\"borobio/mini".($iS).".jpg\" />";
					}
	
				echo "</div>";
			
				  
				echo "<div id=\"galeriaTexto\" onclick=\"slider2('P')\"> <tt>Siguiente'>'</tt> </div>";	
			
			echo "</div>";
			

?>
