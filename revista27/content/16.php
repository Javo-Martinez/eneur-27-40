<p>Mucho antes de que  el peine se hubiera convertido en ese objeto que encaja perfectamente en el  bolsillo del caballero; mucho antes también de que el pelo se volviera fetiche  de una sexualidad más o menos intensa, y mucho antes –por supuesto– de que los clorofluorocarbonados  de lacas y fijadores hubieran dado en la diana de la capa de ozono, el peine ya  había mostrado sus dientes en las fauces de la humanidad. La galería fotográfica  que les presentamos a continuación da buena fe de esa presencia histórica, acaso  modesta pero nunca marginal.
<p>Desde las muestras más  primitivas (algunas de las cuales se asemejan más a objetos punzantes que a complementos  de belleza) hasta las delicadas joyas que adornaron los tocadores de monarquías  y aristocracias varias, el peine enseña una evolución que abarca el primer  descubrimiento de una forma que emula los dedos de la mano, su conversión en <em>delicatessen</em> de orfebre y su posterior extensión  hacia el cosmos pequeñoburgués, esto es, hacia la funcionalidad y la  accesibilidad, conseguidas en buena parte gracias a ese milagro del capitalismo  de Estado que es la hegemonía del plástico <em>made  in China</em>.</p>
<p>A la vista de su  actual usabilidad y su conversión en baratija de bolsillo, todo indica que los  peines actuales acabarán su paso por el mundo en vertederos contaminantes. Mientras  tanto, estos peines históricos despiertan la admiración de los visitantes del  Hermitage, del museo egipcio de Berlín o de muchas otras instituciones cuyos  fondos, a menudo, se han nutrido con los frutos del expolio colonial. Por ello,  resulta trabajoso imaginar (al precio al que hoy se cotizan las certezas) el  que nuestros peines actuales vayan a integrar las colecciones permanentes de  museo alguno, a no ser que las autoridades del porvenir tengan a bien planear  la apertura de los futuros Museo del Rastro o Museo de la Saladita. Mientras  eso ocurre (o no), los invitamos a disfrutar de estos peines que, producto del  azar, la supremacía militar o las infidelidades de palacio, han conseguido su  lugar en la foto de la historia. </p>
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
					$size = GetImageSize("peines/".$i.".jpg");	
					$anchura=$size[0];
					$nuevoAncho = (770 - $anchura) / 2;
					echo "	<img id=".$i." src=\"peines/".$i.".jpg\" style=\"margin-left:".$nuevoAncho."px\" />";
				}
				
				echo "<div id=\"titulo\">";
//								
//					for ($i=1; $i<=$cantidadImagenes; $i++)
//					{
//						echo"<p> Titulo ".($i). "</p>";
//					}
				?>
                	<tt>
					<p>Peine egipcio predinástico (Museo Egipcio, Berlín)</p>
                    <p>Peine indonesio (Tropenmuseum, Ámsterdam)</p>
                    <p>Peine fino de la cultura indonesia batak (Tropenmuseum, Ámsterdam)</p>
                    <p>Peine de madera de la cultura indonesia de la isla de Nias (Tropenmuseum, Ámsterdam)</p>
                    <p>Peine de madera decorado con hilos de cobre. Talla de la isla de Bali (Tropenmuseum, Ámsterdam)</p>
                    <p>Peine de la cultura indonesia batak (Tropenmuseum, Ámsterdam)</p>
                    <p>Peine ornamental de carey, Indonesia (Tropenmuseum, Ámsterdam)</p>
                    <p>Peine de madera de la cultura indonesia batak (Tropenmuseum, Ámsterdam)</p>
                    <p>Peine egipcio de marfil de hipopótamo (Museo del Louvre)</p>
                    <p>Peine egipcio de madera (Walters Art Museum, Maryland)</p>
                    <p>Peine del Neolítico (Museo Histórico de Berna)</p>
                    <p>Peine medieval de marfil (British Museum)</p>
                    <p>Antiguo peine romano (Museo-castillo Boiotro, Passau, Alemania)</p>
                    <p>Peine litúrgico de marfil de elefante (Victoria & Albert Museum, Londres)</p>
                    <p>Peine de hueso del siglo IV a. C. (Museum Lauriacum, Enns, Austria)</p>
                    <p>Peine medieval de marfil (Museo del Cincuentenario, Bruselas)</p>
                    <p>Peine ornamental japonés de carey (Museo de Arte de Honolulu, Hawái)</p>
                    <p>Peine japonés del siglo XIX en plata y oro (Museo de las Artes Decorativas, París) </p>
                    <p>Peine del túmulo de Solokha, en oro, siglo IV a. C. (Museo del Hermitage, San Petersburgo) </p>
                    <p>Peine con escena del suplicio de Eduardo II (Museo Cívico Medieval de Bolonia)</p>
                    <p>Peine de madera con talla decorativa de la cultura cimarrona en Surinam (Tropenmuseum, Ámsterdam)</p>
                    <p>Peine de madera de la cultura cimarrona en Surinam (Tropenmuseum, Ámsterdam)</p>
                    <p>Peine de caballero, made in China (Ferrocarril General Roca)</p>
                    </tt>
                <?
//				
				echo "</div>";	
			
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
						echo"<img style=\"float:left\" src=\"peines/mini".($iA).".jpg\" />";
					}
	
				echo "</div>";


				echo "<div id=\"galeria\">";
				
					for ($i=1; $i<=$cantidadImagenes; $i++)
					{
						echo"<img style=\"float:left\" src=\"peines/mini".($i).".jpg\" />";
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
						
						echo"<img style=\"float:left\" src=\"peines/mini".($iS).".jpg\" />";
					}
	
				echo "</div>";
			
				  
				echo "<div id=\"galeriaTexto\" onclick=\"slider2('P')\"> <tt>Siguiente'>'</tt> </div>";	
			
			echo "</div>";
			

?>
