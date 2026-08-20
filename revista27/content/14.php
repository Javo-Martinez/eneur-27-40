<br /> 
Ante los ojos de Occidente, la cultura japonesa tiene una serie de marcas que contrastan fuertemente, cuando no se escapan de la lógica con que nos pensamos, con las este lado del mundo. La contemplación; los recursos mínimos con los que producir una imagen poética; estructuras sólidas en las que sólo caben algunos gestos que definen un todo, un espacio que se va de los límites de las palabras; una respiración de un ritmo estético de tiempos más laxos, donde lo febril se cuela, probablemente, en las polis movedizas de Japón. <strong>Hiroshi Sugimoto</strong> sabe muy bien de esas distancias y con su fotografía construye puentes entre su Tokio natal y su Nueva York elegida. Nacido en 1948, tres años después de que las bombas atómicas estadounidenses diezmaran las ciudades de Hiroshima y Nagasaki, cuando cumplió los 26 años cruzó varias fronteras y no volvió a pertenecer a un único sitio, ni a única lengua. Las fotos que componen esta galería pertenecen a <strong>Seascapes</strong>, primer libro de fotografías publicado por <strong>Sugimoto</strong>, en el cual retrató, a lo largo de varios años, grandes superficies de agua: lagos, mares y océanos. Una apuesta jugosa a una falsa monotomía, a una falsa monocromía, a una falsa repetición. Con el paso de las fotos, <strong>Seascapes</strong> se transforma en un libro hipnótico, que va haciendo su camino lentamente; creando, en quien lo mira, horizontes que se amplían y se amplifican.<br />

<? 
	//RECUPERO LA ESTRUCTURA DE LA PAGINA
	$imagen = 	"SELECT 
				cantidadImagenes
				FROM notas
				WHERE idPagina = ". $pag . "
				AND edicionNumero =". $numeroActual; 
	

	
			echo "<div id=\"slider2\">";
			
				$paginaimagen = mysql_query($imagen) or die("Couldn't execute query: ".$imagen);
				
				while ($row= mysql_fetch_array($paginaimagen)) 
				{
					$cantidadImagenes 	= $row["cantidadImagenes"];
				}
	
				for ($i=1; $i<=$cantidadImagenes; $i++)
				{
					$size = GetImageSize("fotos/".$i.".jpg");	
					$anchura=$size[0];
					$nuevoAncho = (770 - $anchura) / 2;
					echo "<img id=".$i." src=\"fotos/".$i.".jpg\" style=\"margin-left:".$nuevoAncho."px\" />";	
				}
				
			
				echo "<div id=\"titulo\">";
//								
//					for ($i=1; $i<=$cantidadImagenes; $i++)
//					{
//						echo"<p> Titulo ".($i). "</p>";
//					}
				?>	
                	<tt>
					<p> Océano Atlántico, New Foundland, 1982 </p>
					<p> Océano Atlántico </p>
					<p> Mar Negro, Inebolu, 1991 </p>
                    <p> Lago Superior, 1995 </p>
                    <p> Mar de Japón </p>
                    <p> Mar Jónico, Santa Cesarea, 1990 </p>
                    <p> Mar de Irlanda, Isla de Man, 1990 </p>
                    <p> Mar Mediterráneo, Cassis, 1989 </p>
                    <p> Mar Egeo, 1990 </p>
                    <p> Mar Egeo, 1990 </p>
                    <p> Mar Báltico, Ruegen, 1996 </p>
                    <p> Mar de Liguria, Saviore, 1993 </p>
                    <p> Atlántico Norte, Cabo Bretón, 1996 </p>
                    <p> Mar de Tasmania, Ngarupupu, 1990 </p>
                    </tt>
                <?
//				
				echo "</div>";			
			
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
						echo"<img style=\"float:left\" src=\"fotos/mini".($iA).".jpg\" />";
					}
	
				echo "</div>";


				echo "<div id=\"galeria\">";
				
					for ($i=1; $i<=$cantidadImagenes; $i++)
					{
						echo"<img style=\"float:left\" src=\"fotos/mini".($i).".jpg\"/>";
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
						
						echo"<img style=\"float:left\" src=\"fotos/mini".($iS).".jpg\" />";
					}
	
				echo "</div>";
			
				  
				echo "<div id=\"galeriaTexto\" onclick=\"slider2('P')\"> <tt>Siguiente'>'</tt> </div>";	
				


			
			echo "</div>";
			

?>
