<p>La capital de  España recibe millones de visitantes cada año. Sus virtudes aparecen a la vista  de cualquiera, y el turista puede personalizar a su gusto el menú de opciones que  ofrece la ciudad. Quien llega a Madrid y pasea por sus calles abigarradas, por  lo general las de la almendra central de la ciudad, se encuentra con aceras  limpias o sucias, con productos baratos o caros, con un paisaje urbano bullanguero  o con rincones delicadamente apacibles, según sea su lugar de procedencia, el  umbral de sus expectativas o su capacidad de fabulación. Y hasta el más parco suele  ser permeable a la difundida hospitalidad de sus gentes. Transcurrida la  visita, la comodidad cambia de coordenadas a velocidad crucero, hasta el  próximo hotel, hasta el siguiente punto en el itinerario. </p>
<p>Sin embargo, quien  sospeche que debajo de la playa están los adoquines (al contrario de lo ocurrido  en aquel París) se estará acercando al magma cuanto más se aleja del neón.  &ldquo;Madrid ya no es lo que era&rdquo; constituye un eslogan que, una vez despojado del  hálito nostálgico, percute contra la piedra de una realidad surcada de estrías.  Y es en esta operación de revelado donde las fotos de Natalia Torrego se  superponen a la postal turística y la ensombrecen. Compuestas en un blanco y  negro que es opción estética y, por tanto, herramienta de acusación, sus  instantáneas funcionan como algo más que el retrato mudo de una realidad sesgada,  más que como una transferencia de protagonismo. Lo que el objetivo de Torrego  pone en marcha es una estrategia de visibilización que arroja un manto de  grises sobre los contornos de los invisibles, de los opacos; de los que más se  transparentan cuanto más expuestos al zarpazo del prójimo. </p>
<p>El anonimato se  transforma en ausencia cuando de tanto caminar al filo de las sombras se acaba  engullido por ellas. Y lo que supo ser un privilegio pasa a ser sentencia. Las  calles transparentadas por las fotografías que hoy les ofrecemos supieron ser,  años atrás, sede de una especie de cambio, de una suerte de esperanza. Hoy, los  adoquines son más duros y el horizonte pica hacia arriba. Los paquetes de  pañuelos barajados entre dedos curtidos, el lamento por la suerte que no alumbra,  un rincón vacío, la maleta que no viajará… actúan como destellos que dejan al  descubierto, aun de modo fugaz, el abismo entre lo visto y lo oculto. Entremedias  se extiende un no-lugar de indefinición: la zona gris de los <s>salvados</s> condenados  por la omisión.</p>
<span style="font-size:14px">
<p><strong>Bio</strong><br />
<strong>Natalia Torrego</strong> (Madrid, 1979). Comenzó a  hacer fotografías a los quince años con una cámara prestada. Cursó estudios en  la Escuela de Fotografía y Centro de Imagen (EFTI) de Madrid. Ha realizado  reportajes publicitarios y de moda creativa. En la actualidad imparte cursos de  fotografía y trabaja como fotógrafa <em>freelance</em>.  Las instantáneas de &ldquo;Mirando otro Madrid&rdquo; han sido seleccionadas de una serie  mayor que abarca una mirada comprometida sobre su ciudad natal.<br />
<a href="http://nataliatorrego.blogspot.com/">Blog</a> </p>
</span>
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
