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

  $target = '/antinori/';

  error_reporting(E_WARNING);
  
  $Directory = getcwd();   
  
  $Directory = $Directory.$target; 


    if ((is_dir($Directory)))
    {

      $MyDirectory = opendir($Directory);
	  
	  

		while ($Entry= readdir($MyDirectory)) 
		{ 
				  $archivos[]= $Entry;  
		} 
		closedir($MyDirectory); 
		 
		sort($archivos); 
	  
       foreach ($archivos as $Entry) 
	  {
		  $checkThumb =   explode('mini',$Entry);
		  
		  $check = explode('.',$Entry);
	  			
          if($Entry != '.' && $Entry != '..' && $check[1]!= 'php' && $checkThumb[0] == $Entry && $Entry != 'video' )
          {

//          $foto = getimagesize($Directory.'/'.$Entry);
//          $width = $foto[0]*0.5;
//          $height = $foto[1]*0.5;
//          $axis = 'width';
		  
		  	$thumb = "mini".htmlentities($Entry);
		  	$titulo =   explode('.',$Entry);
			$titulo =   explode('_',$titulo[0]);
			$titulo = $titulo[1];
		  
          	echo '<a href=".'.$target.htmlentities($Entry).'" title="'.htmlentities($titulo).'"><img src=".'.$target.$thumb.'" style= " height: auto; max-height: 125px; margin: 2px;"></a>';
		  
          }
        }
      closedir($MyDirectory);
	  
	}

    else
    {
      echo "No es un directorio... ".$MyDirectory;
    }
		
	//echo '<p> Ver video <strong>Humus Simetricus</strong> </p>';
	//echo '<a class="popup-modal" href="#video"><img src="./antinori/mini21_Humus Simetricus.jpg" style=" height: auto; max-height: 125px; margin: 2px;"></a>';
        
?>        
	</div>
    
    		
	<p> Ver video <strong>Humus Simetricus</strong> </p>
	<a class="popup-modal" href="#video"><img src="./antinori/video/humus.jpg" style=" height: auto; max-height: 125px; margin: 2px;"></a>


        <div id="video" class="white-popup-block mfp-hide " style="text-align:center">
            <div class="popup-modal-dismiss" style="font-size:18px; color:#FFF">
            Cerrar
            </div>
            <video controls>
              <source src="./antinori/video/humus.mp4" type="video/mp4">
            Your browser does not support the video tag.
            </video>
        
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

	<script type="text/javascript">
    $(function () {
        $('.popup-modal').magnificPopup({
            type: 'inline',
            preloader: false,
            focus: '#video',
            modal: true
        });
        $(document).on('click', '.popup-modal-dismiss', function (e) {
            e.preventDefault();
            $.magnificPopup.close();
        });
    });
    </script>
        


</body>
</html>
