<p>Es probable que la presencia femenina en tanto motivo pictórico tenga como competidor exclusivo al mismísimo Jesucristo, el único que acaso pueda hacerle sombra en cuanto al número de apariciones. Las causas se presentan bastante evidentes: las sinuosidades que se le suponen al cuerpo de una mujer, su desnudez (primero virginal, después más insinuante) y la frágil sensualidad que desprende han sido objeto de placer masculino y, por ende, constatación de su supremacía como sujeto histórico. En este contexto socioestético, las cabelleras constituyen la metáfora más precisa, la hebra que une todos los vértices de un significado que hunde sus raíces en la historia de los grupos sociales humanos.</p>

<p>Esta galería de imágenes, a fuerza de redundancias, busca expresar los matices que una mujer peinándose ha despertado a lo largo de la obra de algunos de los grandes pintores. En ocasiones, las diferencias entre una obra y otra son apenas perceptibles, más allá del vigor y la exclusividad de eso que da en llamarse "estilo personal". En otras, la adscripción a una corriente determinada (por caso, el cubismo o el surrealismo) violenta las formas y condiciona necesariamente el mensaje. No obstante en todas ellas (incluido el notable simbolismo cósmico de Joan Miró) se deja apreciar el pudor, el ensimismamiento, el instante casual en que una mujer contacta con sus cabellos mediante el artilugio al que homenajeamos en este número: el peine.</p>

<p>Así, la languidez del Modigliani, la casualidad que desprende el autorretrato de Serebriakova o la violencia del Picasso se enhebran en la línea de tiempo con la intimidad de las obras impresionistas e incluso con la virginidad de la muchacha peinándose de Giovanni Bellini, una obra que se inscribe en el Quattrochento tardío y que precede a la explosión del Renacimiento y la consolidación del antropocentrismo. Todas ellas, de una forma u otra, congelan el momento en que una mujer, raros peinados nuevos mediante, aporta su silueta anónima a la larga lista de mujeres retratadas. Con la venia de Jesucristo.</p>
<br>



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
					$size = GetImageSize("plastica/".$i.".jpg");	
					$anchura=$size[0];
					$nuevoAncho = (770 - $anchura) / 2;
					echo "	<img id=".$i." src=\"plastica/".$i.".jpg\" style=\"margin-left:".$nuevoAncho."px\" />";
				}
				
				
				echo "<div id=\"titulo\">";
//								
//					for ($i=1; $i<=$cantidadImagenes; $i++)
//					{
//						echo"<p> Titulo ".($i). "</p>";
//					}
				?>
                	<tt>
					<p>Retrato de Jeanne Hébuterne, con brazo izquierdo detrás de la cabeza (Amedeo Modigliani)</p>
                    <p>Peinando su pelo (Hishikawa Moronobu)</p>
                    <p>Autorretrato (Zinaida Serebriakova)</p>
                    <p>Chica peinándose (Pierre-Auguste Renoir)</p>
                    <p>Chica peinándose (McGregor Paxton)</p>
                    <p>Desnudo peinándose (Pablo Picasso)</p>
                    <p>El peinado (Edgar Degas)</p>
                    <p>El cabello (Henri-Edmond Cross)</p>
                    <p>La toilette de la mañana (Christoffer Eckersberg)</p>
                    <p>María Moñito peinándose (José Ramírez Conde)</p>
                    <p>Muchacha peinándose (Giovanni Bellini)</p>
                    <p>Mujer en un interior peinando a una niña (Jacobus Vrel)</p>
                    <p>Mujer joven peinándose ( Karl Hofer)</p>
                    <p>Mujer peinándose (José Mejía Vides)</p>
                    <p>Mujer peinándose (Toulouse Lautrec)</p>
                    <p>Mujeres peinándose (Edgar Degas)</p>
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
						echo"<img style=\"float:left\" src=\"plastica/mini".($iA).".jpg\" />";
					}
	
				echo "</div>";


				echo "<div id=\"galeria\">";
				
					for ($i=1; $i<=$cantidadImagenes; $i++)
					{
						echo"<img style=\"float:left\" src=\"plastica/mini".($i).".jpg\" /> ";
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
						
						echo"<img style=\"float:left\" src=\"plastica/mini".($iS).".jpg\" />";
					}
	
				echo "</div>";
			
				  
				echo "<div id=\"galeriaTexto\" onclick=\"slider2('P')\"> <tt>Siguiente'>'</tt> </div>";	
			
			echo "</div>";
			

?>
