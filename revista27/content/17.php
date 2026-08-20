<p>Los finales del mes de julio se llevaron a <strong>León Ferrari </strong>a la edad de 92 años. En su casi siglo de existencia fue el artífice de una obra tan prolífica como subversiva. En los días posteriores a su muerte, varios fueron los adjetivos calificativos que se ciñeron a la figura de uno de los artistas plásticos contemporáneos más notorios: provocador, polémico, irreverente, iconoclasta. <strong>Ferrari</strong> puso su arte al servicio de las denuncias contra todos los males de este mundo; embistiendo a fuerza de rupturas de sentido, colores y grafismos, contra los poderes más salvajes. Golpeó a la iglesia católica  con una efectividad pocas veces vista, usando la figura de Jesucristo, vírgenes, curas y santos como móvil de sus denuncias; dejando al descubierto los hilos más siniestros de la fe ciega. La  crucifixión sobre el fuselaje y las alas de un avión; las figuras sacras en biberones, los collages en los que exhibe el contubernio del clero con los dictadores apenas prefiguran el amplio mundo simbólico de <strong>Ferrari</strong>. Un mundo que abarcó la pintura, el dibujo, la escultura, los objetos, los libros de autor y la música, aquella que él mismo ejecutó en las terrazas del MALBA, con tubos metálicos unidos en una de sus esculturas sonoras. De su obra menos conocida, vale la pena recorrer, en el propio <a href="http://leonferrari.com.ar/" target="_new">sitio del artista</a>, su serie <em>Nosotros no sabíamos</em>, una impactante colección de recortes de noticias de diversos diarios en la que la atrocidad del Terrorismo de Estado queda completamente expuesta y que, con su nombre, pone en jaque a uno de los refugios discursivos más visitados en Argentina. </p>
<p>Si un artista se define por la profundidad de lo que ofrece a la Humanidad; si el arte es el modo que tiene el hombre de poner en el camino de la estética lo que su ética es; el legado de <strong>Ferrari</strong> apenas empieza con sus obras y se abrirá al mundo en todos sus discípulos, los que lo fueron de hecho y los que lo son por afinidad. Si es así, entonces, alguna vez llegará el día en el que tanta explosión de sentido pueda ser leída como un lejano acto necesario para un mundo mejor.</p>
<p><br />
  
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
					$size = GetImageSize("ferrari/".$i.".jpg");	
					$anchura=$size[0];
					$nuevoAncho = (770 - $anchura) / 2;
					echo "	<img id=".$i." src=\"ferrari/".$i.".jpg\" style=\"margin-left:".$nuevoAncho."px\" />";
				}
				
			
			echo "</div>";
			
				//SETEO LAS VARIABLES PARA EL MANEJO DE THUMBNAILS
//				$thumbnail = 1;
//				$thumbnailAnterior = $cantidadImagenes;
//				$thumbnailSiguiente = 2;

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
						echo"<img style=\"float:left\" src=\"ferrari/mini".($iA).".jpg\" />";
					}
	
				echo "</div>";


				echo "<div id=\"galeria\">";
				
					for ($i=1; $i<=$cantidadImagenes; $i++)
					{
						echo"<img style=\"float:left\" src=\"ferrari/mini".($i).".jpg\" />";
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
						
						echo"<img style=\"float:left\" src=\"ferrari/mini".($iS).".jpg\" />";
					}
	
				echo "</div>";
			
				  
				echo "<div id=\"galeriaTexto\" onclick=\"slider2('P')\"> <tt>Siguiente'>'</tt> </div>";	
			
			echo "</div>";
			

?>
</p>
