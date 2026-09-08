<!DOCTYPE html>
<html lang="en">
<head>

    
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="./slider/dist/magnific-popup.css"> 
    
    <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
    <script src="./js/jquery-1.11.0.min.js"></script>
    
    <!-- Magnific Popup core JS file -->
    <script src="./slider/dist/jquery.magnific-popup.js"></script> 
    

</head>
<body>


    <div class="popup-gallery">
<?    

  $target = '/maier/parejas/';

  error_reporting(E_WARNING);
  
  $Directory = getcwd();   
  
  $Directory = $Directory.$target; 


    if ((is_dir($Directory)))
    {

      $MyDirectory = opendir($Directory);
	  
	  

		while ($Entry6= readdir($MyDirectory)) 
		{ 
				  $archivos6[]= $Entry6;  
		} 
		closedir($MyDirectory); 
		 
		sort($archivos6); 
	  
       foreach ($archivos6 as $Entry6) 
{
		  $checkThumb =   explode('mini',$Entry6);
		  
		  $check = explode('.',$Entry6);
	  			
          if($Entry6 != '.' && $Entry6 != '..' && $check[1]!= 'php' && $checkThumb[0] == $Entry6)
          {

//          $foto = getimagesize($Directory.'/'.$Entry6);
//          $width = $foto[0]*0.5;
//          $height = $foto[1]*0.5;
//          $axis = 'width';
		  
		  	$thumb = "mini".htmlentities($Entry6);
		  	$titulo =   explode('.',$Entry6);
			$titulo =   explode('_',$titulo[0]);
			$titulo = $titulo[1];
		  
          	echo '<a href=".'.$target.htmlentities($Entry6).'" title="'.htmlentities($titulo).'"><img src="./'.$target.$thumb.'" style= " height: auto; max-height: 125px; margin: 2px;"></a>';
		  
          }
        }
      //closedir($MyDirectory);
    }
    else
    {
      echo "No es un directorio... ".$MyDirectory;
    }
        
?>        
	</div>

<script type="text/javascript">
      $(document).ready(function() {
        $('.popup-gallery').magnificPopup({
          delegate: 'a',
          type: 'image',
          tLoading: 'Cargando imagen #%curr%...',
          mainClass: 'mfp-img-mobile',
          gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
          },
          image: {
            tError: '<a href="%url%">La imagen #%curr%</a> no pudo ser cargada.'
          }
        });
      });
</script>


</body>
</html>
