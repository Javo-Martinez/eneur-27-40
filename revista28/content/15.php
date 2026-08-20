<p>El joven artista  Víctor Mahana (Santiago de Chile, 1977) acaba de clausurar una exposición  individual en el Museo Nacional de Bellas Artes de Chile titulada &ldquo;Cuando  desperté no había nadie&rdquo;. Las obras allí expuestas, que Esto No Es Una Revista  reproduce con la gentileza de su autor, reflejan motivos que parecen tener su  origen en un punto situado a caballo entre el sueño y la vigilia.</p>
<p>Esta tensión hace  que resulte difícil permanecer ajeno ante la obra de Mahana. Los motivos de sus  cuadros llegan al artista como si este fuera un otro, como si el mensaje parido  en un instante fugaz fuera el que moldeara al pintor, con el único objeto de  que este inmortalice unos contornos que aún se presentan difusos. Este  territorio de impaciente ambigüedad expresa a la vez un camino que se sitúa  entre la densidad y la levedad. Dos formas de enfrentarse a la tela que son en  realidad una: la del artista que antepone la pregunta a la respuesta, la  búsqueda a la meta, lo insoluble a la respuesta correcta. </p>
<p>Los cuadros de  Mahana suceden en un no-tiempo, en una suerte de atemporalidad que les añade aún  más perspectivas, y que dota al poliedro cromático de más ángulos que vértices.  El material simbólico, así, pasa a ocupar el espacio de lo crónico, y se  representa mediante poderosas metáforas visuales que borran de un solo  cimbronazo cualquier intento de interpretación homogénea. Porque tras esta  articulación de contrapesos se despliega una estrategia creativa que da al  objeto significados múltiples que ocurren en varios escenarios simultáneos. De  esta forma, el espectador se convierte frente a la obra en actor necesario de  una disputa dialéctica que, aun pudiendo ser equidistante de los extremos, se  despoja una y otra vez de cualquier sospecha de imparcialidad.</p>

<span style="font-size:14px">
<p><strong>Bio</strong><br />
Víctor Mahana (Santiago de Chile, 1977).  Licenciado en Arte. Pintor, grabador e ilustrador. Su obra forma parte de  colecciones chilenas e internacionales. Ha realizado más de medio centenar de  exposiciones colectivas e individuales, entre las que destaca &ldquo;Cuando desperté  no había nadie&rdquo;, recientemente clausurada en el Museo Nacional de Bellas Artes  de Chile. <br />
  <a href="http://www.victormahana.com/">www.victormahana.com</a></p>
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
					$size = GetImageSize("pinturas/".$i.".jpg");	
					$anchura=$size[0];
					$nuevoAncho = (770 - $anchura) / 2;
					echo "<img id=".$i." src=\"pinturas/".$i.".jpg\" style=\"margin-left:".$nuevoAncho."px\" />";	
				}
				
			
				echo "<div id=\"titulo\">";
//								
//					for ($i=1; $i<=$cantidadImagenes; $i++)
//					{
//						echo"<p> Titulo ".($i). "</p>";
//					}
				?>	
                	<tt>
					<p> Babel (2013). Óleo sobre tela (200 x 160 cm)</p>
					<p> Caída libre (2013). Óleo sobre tela (120 x 90 cm) </p>
					<p> Camino (2013). Óleo sobre tela (120 x 90 cm) </p>
                    <p> La salida (Políptico) (medidas totales 350 x 100 cm) </p>
                    <p> Santiago (2012). Óleo sobre tela (300 x 100 cm) </p>
                    <p> Migración (2013). Óleo sobre tela (160 x 160 cm) </p>
                    <p> Túnel (2013). Óleo sobre tela (200 x 160 cm) </p>
                    <p> Burbuja (2012). Óleo sobre tela (160 x 160 cm) </p>
                    <p> Gaza  (2013). Óleo sobre tela (200 x 160 cm) </p>
                    <p> Cuando desperté no había nadie (Tríptico) (2013). <br />
Óleo sobre tela (medidas totales: 560 x 200 cm) </p>
                    <p> Cuando desperté no había nadie (Tríptico) (2013). <br />
Óleo sobre tela (medidas totales: 560 x 200 cm) </p>
                    <p> Cuando desperté no había nadie (Tríptico) (2013). <br />
Óleo sobre tela (medidas totales: 560 x 200 cm) </p>
                    <p> La torre (2012). Óleo sobre tela (200 x 160 cm) </p>
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
						echo"<img style=\"float:left\" src=\"pinturas/mini".($iA).".jpg\" />";
					}
	
				echo "</div>";


				echo "<div id=\"galeria\">";
				
					for ($i=1; $i<=$cantidadImagenes; $i++)
					{
						echo"<img style=\"float:left\" src=\"pinturas/mini".($i).".jpg\"/>";
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
						
						echo"<img style=\"float:left\" src=\"pinturas/mini".($iS).".jpg\" />";
					}
	
				echo "</div>";
			
				  
				echo "<div id=\"galeriaTexto\" onclick=\"slider2('P')\"> <tt>Siguiente'>'</tt> </div>";	
				


			
			echo "</div>";
			

?>
