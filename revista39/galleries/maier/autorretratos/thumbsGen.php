<?php
// El archivo

	$Directory = getcwd();   

	//echo  "directorio A: ".$Directory;

    if ((is_dir($Directory)))
    {

      $MyDirectory = opendir($Directory);

      //echo  "directorio B: ".$MyDirectory;

        while($Entry = @readdir($MyDirectory)) 
		
        {
			$check = explode('.',$Entry);
			
          if($Entry != '.' && $Entry != '..' && $check[1] != 'php')
		  {

				//echo  "Entry: ".$Entry;

			$porcentaje = 0.4;
			
				$nombre_archivo = $Entry;
				$porcentaje = 0.5;
				
				// Tipo de contenido
				header('Content-Type: image/jpeg');
				
				// Obtener nuevas dimensiones
				list($ancho, $alto) = getimagesize($nombre_archivo);
				$nuevo_ancho = $ancho * $porcentaje;
				$nuevo_alto = $alto * $porcentaje;
				
				// Redimensionar
				//$imagen_p = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
				$imagen_p = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
				$imagen = imagecreatefromjpeg($nombre_archivo);
				//imagecopyresampled($imagen_p, $imagen, 0, 0, 0, 0, 30, 30, $ancho, $alto);
				imagecopyresampled($imagen_p, $imagen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
				
				// Imprimir
				imagejpeg($imagen_p, 'mini'.$Entry);
          }
        }
      closedir($MyDirectory);
    }
    else
    {
      echo "No es un directorio...";
    }
?>