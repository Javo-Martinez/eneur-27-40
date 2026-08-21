<p>Lo sabe todo el  mundo: Adán y Eva no disfrutaban de un trato igualitario en el Edén. Las  distancias se instalaron entre ellos desde el momento mismo en que saliera del  costado del muchacho. Y ya nunca nada fue lo mismo. Luego vino la tentación y  con ella, el desnudo y el destierro posterior. Sin embargo, el hombre pareció  recuperarse de aquella desnudez originaria bastante mejor que la mujer, cuyo  cuerpo expuesto <em>como Dios la trajo al  mundo</em> comenzó a verse como la representación del orden natural, mientras  que las virtudes masculinas pronto pasaron a ser una cuestión de Estado y de  sus dependencias, los baños sauna.</p>
<p>La representación  artística, con su correspondiente mecenazgo clerical y monárquico, terminó por  solidificar las asimetrías. Salvo contados y magníficos exponentes, el <em>travelling</em> descendente del artista se  detiene apenas vislumbradas las ingles del hombre. Con ánimo igualmente  recopilatorio y provocador, el Museo d' Orsay de París ha organizado la muestra  &ldquo;Masculin/Masculin&rdquo;, que reúne más de un centenar de obras en distintos  formatos con el único motivo del cuerpo masculino desnudo. La exposición concentra  pinturas, esculturas y fotografías a partir del año 1800, cuando la Revolución  Industrial había comenzado a instalar la &ldquo;indiferencia de la naturaleza&rdquo;, según  señala Xavier Rey, uno de los comisarios de la muestra.</p>
<p>&ldquo;Masculin/Masculin&rdquo;  se dispone en once espacios temáticos, que resumen respectivamente el ideal  clásico, el desnudo heroico, el cuerpo en la naturaleza o el dolor. En sus  salas pueden verse obras de Rodin, Cézanne, Lucien Freud, Edvard Munch o el  celebrado Ron Mueck, entre otros. Esto No  Es Una Revista les trae una coqueta selección de dichas obras dirigida a  todos aquellos que no tengan la fortuna de pasear este invierno por las orillas  del Sena, ya sea bien abrigados o germinalmente desnudos. </p>
<p><a href="http://www.musee-orsay.fr/es/eventos/exposiciones/en-el-museo-de-orsay/exposiciones-en-el-museo-de-orsa/article/masculin-masculin-37292.html?tx_ttnews%5BbackPid%5D=254&amp;cHash=90119a0a49">Masculino  / Masculino. El hombre desnudo en el arte de 1800 hasta la actualidad</a></p>
<p>
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
					$size = GetImageSize("plastica/".$i.".jpg");	
					$anchura=$size[0];
					$nuevoAncho = (770 - $anchura) / 2;
					echo "<img id=".$i." src=\"plastica/".$i.".jpg\" style=\"margin-left:".$nuevoAncho."px\" />";	
				}
				
			
				echo "<div id=\"titulo\">";
//								
//					for ($i=1; $i<=$cantidadImagenes; $i++)
//					{
//						echo"<p> Titulo ".($i). "</p>";
//					}
				?>	
<tt>
                        <p>Académie d'homme, dit Patrocle (1778) (Jacques Louis David)</p> 
                        <p>Torse du Belvédère (1881) (Emile-Edmond Peynot)</p> 
                        <p>Le Berger Pâris (1787) (Jean-Baptiste Frédéric Desmarais)</p> 
                        <p>Horst P. Horst, Photographie (1932) (George Hoyningen-Huene)</p> 
                        <p>Abel (Camille Félix Bellanger)</p> 
                        <p>Roland furieux (1867) (Jean-Bernard Duseigneur)</p> 
                        <p>La edad de bronce (Auguste Rodin)</p> 
                        <p>Igualdad ante la muerte (1848) (William Bouguereau)</p> 
                        <p>Le Pêcheur à l'épervier (1868) (Frédéric Bazille)</p> 
                        <p>Jeune assis au bord de la mer, étude (1836) (Hippolyte Flandrin)</p> 
                        <p>Would-Be Martyr and 72 virgins (2008) (David LaChapelle)</p> 
                        <p>Saint Sébastien expirant (1789) (François-Xavier Fabre)</p> 
                        <p>Le Bain (1951) (Paul Cadmus)</p> 
                        <p>Le Sommeil d'Endymion (1791) (Anne-Louis Girodet)</p> 	
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
						echo"<img style=\"float:left\" src=\"plastica/mini".($iA).".jpg\" />";
					}
	
				echo "</div>";


				echo "<div id=\"galeria\">";
				
					for ($i=1; $i<=$cantidadImagenes; $i++)
					{
						echo"<img style=\"float:left\" src=\"plastica/mini".($i).".jpg\"/>";
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
</p>