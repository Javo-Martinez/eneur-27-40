<!DOCTYPE html>
<html lang="en">
<head>

    
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="../slider/dist/magnific-popup.css"> 
    
    <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
    <script src="../js/jquery-1.11.0.min.js"></script>
    
    <!-- Magnific Popup core JS file -->
    <script src="../slider/dist/jquery.magnific-popup.js"></script> 
    

</head>
<body>

	
<script type="text/javascript">
$(function () {
	$('.popup-modal').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#test-modal',
		modal: true
	});
	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
});
</script>

<a class="popup-modal" href="#test-modal"><img src="http://cdn.theatlantic.com/static/mt/assets/culture_test/david%20bowie%20next%20day%20650.jpg"></a>

<div id="test-modal" class="white-popup-block mfp-hide " style="text-align:center">
	<div class="popup-modal-dismiss">
    Cerrar
    </div>
    <video controls autoplay >
      <source src="http://www.estonoesunarevista.com.ar/nro026/video/001.mp4" type="video/mp4">
    Your browser does not support the video tag.
    </video>

</div>
</body>
</html>
