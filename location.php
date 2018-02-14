	<!DOCTYPE>
		<html>
		 <head>
		 <title>Contact Us </title>
		   <link rel="stylesheet" href="styles/style.css" media="all" />
		   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_0KwbEDCjWvQ0XSPux_wu283DCyGD-no">
			</script>

			<script>
			function initialize() {
			  var mapProp = {
			    center:new google.maps.LatLng(23.7801728,90.4050027),
			    zoom:16,
				    mapTypeId:google.maps.MapTypeId.ROADMAP
			  };
			  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
			}
			google.maps.event.addDomListener(window, 'load', initialize);
			</script>
		 </head>

		<body>


					   <div style="float:center">


					   <h1><b> DEVELOPED BY</b></h1>
					   <h3><b>Sabit, Farhad, Safkat</b></h3>
					   <h3><b>Brac University, Bangladesh</b></h3>

					   

					   <span style="float:center">
						<h2 align="left"> Location :</h2>
						<div id="googleMap" style="width:1200px;height:500px;">

						</div>
						<!-- <p style="text-align:center;"><img src="location.png" width="400" height="200"/></p> -->
						</span>

						</div>
					   </div>
					   </div>




				  
	</div>
		 </body>
		 </html>