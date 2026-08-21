<p>Cuando en este <a href="eneur.php?pag=15">mismo  número</a> nos referíamos a la dualidad entre fotógrafos de estudio y  fotógrafos de exterior, exaltábamos el deambular errático de Sergio Larraín y  su capacidad para capturar la magia de la intemperie. Es precisamente en este  binomio <em>in/out</em> donde interviene la  importante muestra monográfica que de Paul Cézanne  (1839-1906) nos brinda  el Museo Thyssen-Bornemisza de Madrid. Bajo el título &ldquo;Cézanne site/non site&rdquo;,  la pinacoteca madrileña expone 58 pinturas (49 óleos y 9  acuarelas) del más impresionista de los impresionistas y, a la vez, de uno de  los artistas que más cultivó un recorrido propio alejado de los postulados de  este movimiento, lo cual propició que se convirtiera en el primer cubista,  antes incluso de que el cubismo naciera como tal. </p>
<p>El concepto  &ldquo;site/non site&rdquo; es deudor de una interpretación realizada por el artista abstracto  estadounidense Robert Smithson, quien reflexionó sobre la, a su juicio, simplificación  formalista que el cubismo y sus seguidores habían hecho de la obra de Cézanne.  Para Smithson, la obra del pintor francés merecía ser rescatada a partir de las  referencias físicas presentes tanto en sus paisajes como en sus naturalezas  muertas. Partiendo de este precepto, la exposición reflexiona sobre el carácter  estático de las obras compuestas al aire libre enfrentándolo al dinamismo  propio de la naturaleza de sus bodegones de interior. La puesta en escena de  aquellos y las tensiones de estos dialogan de forma inversa, pues la  estabilidad solemne de las escenas de exterior enfatiza la disposición casi  azarosa de frutas, jarrones y botellas. </p>
La exposición, que tiene el valor añadido de ser la  primera monográfica que se organiza en España en los últimos treinta años, está  dividida en cinco espacios: Retrato de un desconocido, La curva del camino,  Desnudos y árboles, El fantasma de la Sainte-Victoire y Juego de  construcciones. Cada uno de ellos compone una perspectiva distinta y a la vez complementaria  de las dos caras, o al menos de dos de las caras, del genial artista francés.
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
<!--<tt>
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