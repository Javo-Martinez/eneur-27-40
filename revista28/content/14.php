<p>Una definición de  fotógrafo que firmaría probablemente el grueso de las personas es la de aquel  personaje que, con mayor o menor inclinación artística, hace de la captura del  instante su objetivo final. Como si de una máxima se tratara, &ldquo;fotografío,  luego soy fotógrafo&rdquo; pone a la acción de tomar la fotografía en el lugar del <em>cogito</em> cartesiano, de lo que es germinal  y a la vez fundamento de existencia posterior. Sin desmerecer estos usos y  costumbres, existen por fortuna fotógrafos como José Manuel Magano para  desmontar este modus operandi, porque es tras el sonido del obturador cuando  este madrileño autodidacta comienza a construir su cometido artístico.</p>
<p>­La combinación de  técnicas fotográficas y pictóricas requiere de una minuciosidad de la que  Magano no solo hace gala, sino que se convierte en una de las características  medulares de su proceso creativo. Para transitar este camino artesanal utiliza  un negativo a tamaño final y por contacto directo para luego trasladar la  imagen a un papel de calidad cien por cien algodón que ha sido previamente emulsionado a mano y expuesto a una fuente de luz rica en  rayos ultravioletas. La preparación de la emulsión, el tratamiento del soporte  y el trabajo de las sucesivas exposiciones a los rayos UV constituyen la base  de esta técnica singular que acaba produciendo copias únicas. </p>
<p>La elección por  estos procesos pigmentarios de más de cien años de antigüedad no es,  ciertamente, casual. Las fotografías de Magano son, en sentido estricto, la  recreación de una recreación, y como tal plantean una reflexión que no es  neutral acerca de la representación y la inmediatez. Así, pincelada tras  pincelada, toma cuerpo una rebeldía nostálgica que dota a sus fotografías de  una emocionada sensibilidad, que igual engalana las brumas de un bosque como  atraviesa una transparencia que a la vez propone espesuras.</p>

<span style="font-size:14px">
<p><strong>Bio</strong><br />José Manuel Magano  (Madrid, 1963). De formación autodidacta. Empedernido dibujante infantil, la  primera cámara que cae en sus manos acaba sustituyendo al lápiz. El  descubrimiento de las técnicas pictóricas aplicadas a la fotografía acabó de moldear  su faceta creativa. En la actualidad imparte cursos de dichos procesos en su  taller del madrileño barrio de Vallecas. <br />

<a href="http://slowphoto.es/">SlowPhoto</a>
</p>
</span>
<br />

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
