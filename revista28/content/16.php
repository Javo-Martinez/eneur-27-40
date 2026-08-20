<p>De todos los <em>ismos</em> artísticos que nos regaló el siglo xx, el del surrealismo es sin  duda uno de los más popularizados, y en especial el que atañe a las artes  plásticas. Las razones de esta afección masiva, sin embargo, no resultan del  todo claras. Acaso sea porque, de tan disociada como viene la realidad, la  correspondencia con esta queda asfaltada por la potencia de las metáforas  visuales sembradas de onirismo; acaso sea porque este reflejo de lo onírico  despierta en el otro una suerte de pudor que se resuelve desde la aceptación;  acaso, simplemente, porque esta aceptación sea un mecanismo de defensa del  vulgo, de quien se siente vejado por la revelación de su sueño de más recóndito:  de su deseo. Como fuera, lo surrealista embadurna la realidad actual, tan poco  surrealista ella o, por el contrario, tan ultrasurrealista que acaba pareciendo  un remedo vulgar de un expresionismo de magacín; la menciona e intenta  moldearla y explicarla, ponerle límites desde lo comprensivo, que es  exactamente lo contrario de lo que los surrealistas (originales) pretendían con  la producción de sus materiales. Creer, en definitiva, que una tormenta  repentina, una circunstancia laboral o una discusión entre amantes son &ldquo;surrealistas&rdquo;  define y, por tanto, allana el camino de la comprensión; es decir, de lo  antisurrealista.</p>
<p>Las reproducciones que ofrecemos compendian la  exposición &ldquo;El surrealismo y el sueño&rdquo; que puede visitarse en el Museo Thyssen  Bornemisza de Madrid hasta el próximo mes de enero. El título de la muestra presentaría,  al menos en apariencia, una redundancia. La invitación a multiplicar lo onírico  más allá de lo nominal que contiene la doble mención al surrealismo y el sueño  equivaldría, en realidad, a reconocer que los sueños (en plural, multiplicados  a su vez por el espejo de nuestra vigilia) tienen en las manifestaciones  surrealistas algo más que la expresión más precisa de su imprecisión, más que  un salvoconducto hacia la representación necesariamente imperfecta. La fuente  que para los surrealistas supusieron los sueños fue trasladada hasta el límite  mismo de la palabra, hasta el precipicio del lienzo en este caso, y sirvió  (sirve) para combatir la expresión dominante, no para explicarla. La  herramienta de este combate es el deseo, ese timón indómito que amontona a  mortales y poderosos en el rincón de los moldes, que se afila en las granadas  que alumbran peces que alumbran tigres, en la conversación entre dos  sombrerudos a la altura de las nubes. </p>
<p>Coinciden por estas fechas en Madrid dos  exposiciones que tienen al surrealismo como objeto de estudio y admiración. La  mencionada del Museo Thyssen Bornemisza y &ldquo;Surrealistas antes del surrealismo&rdquo;  (Fundación March),  cuyo recorrido de dibujos, grabados y fotografías concluye en el momento previo  al estallido del movimiento. Tal vez llame la atención la coincidencia de ambas  muestras, o quizá no tanto. Al menos en este momento histórico, en el que la  sociedad española vive a caballo entre las dosis sistémicas de ultrarrealidad a  las que se ve sometida y una acusada inclinación hacia las vías de escape, la  distracción y las sillas al borde del camino. Aun extremo, el surrealismo (y  los sueños) puede contribuir a templar el ánimo desalmado, o por el contrario, a  inflamar el espíritu y entender que otra alma es posible. En ambos casos quizá  dejara de confundirse el sueño con la modorra. Solo quizá.</p>


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
					$size = GetImageSize("surrealismo/".$i.".jpg");	
					$anchura=$size[0];
					$nuevoAncho = (770 - $anchura) / 2;
					echo "<img id=".$i." src=\"surrealismo/".$i.".jpg\" style=\"margin-left:".$nuevoAncho."px\" />";	
				}
				
			
				echo "<div id=\"titulo\">";
//								
//					for ($i=1; $i<=$cantidadImagenes; $i++)
//					{
//						echo"<p> Titulo ".($i). "</p>";
//					}
				?>	
                	<tt>
					<p>El templo de la palabra (Leonora Carrington)</p>
                    <p>El doble sueño de primavera (Giorgio de Chirico)</p>
                    <p>La miel es más dulce que la sangre (Salvador Dalí)</p>
                    <p>Sueño causado por el vuelo de una abeja alrededor de una granada un segundo antes de despertar (Salvador Dalí)</p>
                    <p>El sueño (Paul Delvaux)</p>
                    <p>Sueño o La media (Oscar Domínguez)</p>
                    <p>El mundo de los ingenuos (Max Ernst)</p>
                    <p>Después de mí, el sueño (Max Ernst)</p>
                    <p>El arte de la conversación (René Magritte)</p>
                    <p>Nocturno (René Magritte)</p>
                    <p>En la torre del sueño (André Masson)</p>
                    <p>Invasión de la noche (Roberto Matta)</p>
                    <p>Foto. Este es el color de mis sueños (Joan Miró)</p>
                    <p> Mujer en la noche (Joan Miró)</p>
                    <p>Ver es creer (La isla invisible) (Roland Penrose)</p>
                    <p>Los ojos cerrados (Odilon Redon)</p>
                    <p>Tarde de Carnaval (Henri Rousseau)</p>
                    <p>El lado superior del cielo (Kay Sage)</p>
                    <p>El geómetra de los sueños (Yves Tanguy)</p>
                    <p>Papilla estela (Remedios Varo)</p>

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
						echo"<img style=\"float:left\" src=\"surrealismo/mini".($iA).".jpg\" />";
					}
	
				echo "</div>";


				echo "<div id=\"galeria\">";
				
					for ($i=1; $i<=$cantidadImagenes; $i++)
					{
						echo"<img style=\"float:left\" src=\"surrealismo/mini".($i).".jpg\"/>";
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
						
						echo"<img style=\"float:left\" src=\"surrealismo/mini".($iS).".jpg\" />";
					}
	
				echo "</div>";
			
				  
				echo "<div id=\"galeriaTexto\" onclick=\"slider2('P')\"> <tt>Siguiente'>'</tt> </div>";	
				


			
			echo "</div>";
			

?>
