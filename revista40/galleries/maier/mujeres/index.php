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

  $target = '/maier/mujeres/';

  error_reporting(E_WARNING);
  
  $Directory = getcwd();   
  
  $Directory = $Directory.$target; 


    if ((is_dir($Directory)))
    {

      $MyDirectory = opendir($Directory);
	  
	  

		while ($Entry4= readdir($MyDirectory)) 
		{ 
				  $archivos4[]= $Entry4;  
		} 
		closedir($MyDirectory); 
		 
		sort($archivos); 
	  
       foreach ($archivos4 as $Entry4) 
{
		  $checkThumb =   explode('mini',$Entry4);
		  
		  $check = explode('.',$Entry4);
	  			
          if($Entry4 != '.' && $Entry4 != '..' && $check[1]!= 'php' && $checkThumb[0] == $Entry4)
          {

//          $foto = getimagesize($Directory.'/'.$Entry4);
//          $width = $foto[0]*0.5;
//          $height = $foto[1]*0.5;
//          $axis = 'width';
		  
		  	$thumb = "mini".htmlentities($Entry4);
		  	$titulo =   explode('.',$Entry4);
			$titulo =   explode('_',$titulo[0]);
			$titulo = $titulo[1];
		  
          	echo '<a href=".'.$target.htmlentities($Entry4).'" title="'.htmlentities($titulo).'"><img src="./'.$target.$thumb.'" style= " height: auto; max-height: 125px; margin: 2px;"></a>';
		  
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
