 <!DOCTYPE html>
  <html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <title>BunnyBot</title>
	  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    </head>

<body >
	<script language=JavaScript>
		<!--

		//Disable right mouse click Script
		//By Maximus (maximus@nsimail.com) w/ mods by DynamicDrive
		//For full source code, visit http://www.dynamicdrive.com

		var message="Oops you can't view the source code buddy!";

		///////////////////////////////////
		function clickIE4(){
		if (event.button==2){
		alert(message);
		return false;
		}
		}

		function clickNS4(e){
		if (document.layers||document.getElementById&&!document.all){
		if (e.which==2||e.which==3){
		alert(message);
		return false;
		}
		}
		}

		if (document.layers){
		document.captureEvents(Event.MOUSEDOWN);
		document.onmousedown=clickNS4;
		}
		else if (document.all&&!document.getElementById){
		document.onmousedown=clickIE4;
		}

		document.oncontextmenu=new Function("alert(message);return false")

		// --> 
</script>

<div class="card-panel black lighten-3" style="height: 170px;"><center>
  <img src="images/logo.jpg" style="width:140px;height:140px;"></center>
</div>
<div class="row center">
  <a href="#" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Bunny-Bot</a>
</div>





      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
