<p>Existen, nos  consta, los fotógrafos de interior. Aquellos que, rodeados de focos y  accesorios, intentan romper los corsés del hecho artístico o, al menos,  asegurarse una jugosa facturación en condiciones de cero absoluto, las que  brinda el hábitat dirigido e invariable del estudio fotográfico. Sin embargo, la  palabra <em>fotógrafo</em> remite casi por  necesidad a intemperie, a movimiento incesante, a astrónomo especializado en la  altura de los ojos. Aunque más no sea para enfatizar el vaivén dialéctico que  se produce entre el sujeto en movimiento y el estatismo que la fotografía  otorga al objeto retratado, el fotógrafo ha de transcurrir por inclemencias y vagabundeos  largos, e incorporar al retrato el calor y los olores que no se imprimen en el  papel. </p>
<p>De todo ello, y de  un talento casi asilvestrado, se compone el arte de Sergio Larraín (Santiago de  Chile, 1931-2012), cuyo camino vital le llevó de una familia adinerada y de los  iniciales liceos privados a &ldquo;tener una profesión de vagabundo para buscar la  verdad&rdquo;. De allí a la fotografía solo medió una cámara Leica, con la que tomó  sus primeras instantáneas. Un trabajo de encargo de dos asociaciones benéficas  le colocó delante de niños vagabundos de su ciudad natal. A partir de entonces  se dedicaría en exclusiva a la fotografía. Y lo hizo con tanto ahínco que el  MOMA de Nueva York adquirió dos de sus obras cuando apenas había cumplido los  25 años. Se instaló en Londres y más tarde en París, donde entre muchos otros  conoció a Julio Cortázar. Uno de los retratos urbanos de Larraín, y un  comentario suyo al autor de <em>Rayuela </em>acerca  de la aparición casi mágica de &ldquo;un acto de malas costumbres&rdquo; descubierto tras  revelar una fotografía, dio pie al cuento &ldquo;Las babas del diablo&rdquo;, el cual, a su  vez, inspiró la película de Antonioni, <em>Blow-Up</em>. </p>
<p>Para entonces Henri  Cartier-Bresson ya se había turbado ante aquellas fotografías de niños  vagabundos chilenos y le había propuesto ingresar en la mítica agencia Magnum. Allí  permanecería algo más de diez años. A la par de su trabajo fotográfico crecen  su interés y el estudio de la cultura oriental. Sin embargo, a finales de la  década de los años sesenta abandona prácticamente la fotografía para recluirse  en la ciudad de Ovalle, al norte de Santiago de Chile, con la meditación y el  yoga como exclusivos compañeros de existencia. A partir de entonces, y hasta su  muerte en 2012, desaparece el Larraín público y comienza a forjarse la leyenda  de uno de los fotógrafos más personales del siglo xx. Aquel que dio visibilidad  a seres hasta entonces vedados a los objetivos, el que hizo de la espontaneidad  y el reflejo elementos de la profundidad y la perspectiva. Aquel que de tanto  vagar acabó necesitando aferrarse a una tierra, pequeña, estática, donde dejar al  vuelo su alma errante. </p>

<br />

<? 
	//RECUPERO LA ESTRUCTURA DE LA PAGINA
	$imagen = 	"SELECT 
				cantidadImagenes
				FROM notas
				WHERE idPagina = ". $pag . "
				AND edicionNumero =". $_SESSION["edicionNumero"];//$numeroActual; 
	

	
			echo "<div id=\"slider2\">";
			
				$paginaimagen = mysql_query($imagen) or die("Couldn't execute query: ".$imagen);
				
				while ($row= mysql_fetch_array($paginaimagen)) 
				{
					$cantidadImagenes 	= $row["cantidadImagenes"];
				}
	
				for ($i=1; $i<=$cantidadImagenes; $i++)
				{
					$size = GetImageSize("fotos/".$i.".jpg");
					if ($size[0] < 770)
					{	
						$anchura=$size[0];
						$nuevoAncho = (770 - $anchura) / 2;
						echo "<img id=".$i." src=\"fotos/".$i.".jpg\" style=\"margin-left:".$nuevoAncho."px\" />";	
					}
					else
					{
						
						echo "<img id=".$i." src=\"fotos/".$i.".jpg\" style=\"width:770px\" />";	
					}
				}
				
			
				echo "<div id=\"titulo\">";
//								
//					for ($i=1; $i<=$cantidadImagenes; $i++)
//					{
//						echo"<p> Titulo ".($i). "</p>";
//					}
				?>	
<!--                	<tt>
					<p>A las puertas del paraíso II</p>
                    <p>A una artista</p>
                    <p>Ambiguo coro</p>
                    <p>Bellísima Leda</p>
                    <p>Bruma</p>
                    <p>Como en un cuento de hadas</p>
                    <p>Con vistas a Roma</p>
                    <p>Cuando recuerdo</p>
                    <p>La bella durmiente</p>
                    <p>La partida de ajedrez</p>
                    <p>La puerta mágica</p>
                    <p>La voz del mar murmura</p>
                    <p>Le pre bain</p>
                    <p>Niebla</p>
                    <p>Nos vemos en el parque</p>
                    <p>Susurro al anochecer</p>
                    <p>Testigo de otro tiempo</p>
                    <p>Una hoja marchita</p>
                    <p>Venus y Madona</p>
                    <p>Y oye allí, gemidos al viento</p> 	

                    </tt>-->
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
