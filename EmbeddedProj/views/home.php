<!DOCTYPE html5>
<html lang="en">
	<head>
		<title>Webcam Tracker</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<!--<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular.min.js"></script>-->
		<img id="imageid" src="inc/img/imgDefault.png"/>
		<input id="sliderid" type="range" min="0" max="25" value="0" step="5" onchange="updatePicture(this.value)" />
		
		
		<script type="text/javascript">
		function updatePicture(picValue)
		{
			var xmlhttp;
			if (window.XMLHttpRequest)// code for IE7+, Firefox, Chrome, Opera, Safari
  				xmlhttp=new XMLHttpRequest();
			else// code for IE6, IE5
  				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			xmlhttp.onreadystatechange=function()
 			{
  				if (xmlhttp.readyState==4 && xmlhttp.status==200)
    				document.getElementById("imageid").src="inc/img/"+xmlhttp.responseText;
			};
			xmlhttp.open("GET","models/home.php?img="+picValue,true);
			xmlhttp.send();
		}
		</script>
		
		<style>
			#imageid {
				width:400px;
				height:400px;
			}
			#sliderid{
				width:400px;
			}
		</style>
	</body>
</html>