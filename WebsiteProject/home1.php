<!DOCTYPE html>
  <html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <title>BunnyBot</title>
	  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	 <link type="text/css" rel="stylesheet" href="css/cus.css" />
    </head>

<body bgcolor="grey">
	<script language=JavaScript>
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
	</script>




<div class="image">
 <img  src="images/background1.jpg" width="100%">
  <h2 class="header center">
	<span>A modern responsive AI bot developed on c#
	</span>
  </h2>
  <h3 class="header center">
	<span>Click on the download button below to download the Application
	</span>
  </h3>
 <div class="button">
   <h6 align="center">
	<span>
	 <a href="#" class="waves-effect  btn">Download</a>
	</span>
   </h6>
  </div>
</div>





<div class="container">
 <div class="container">
  <div class="container">
   <div class="row">
    <div class="col">
     <div class="card">
      <div class="card-image">
 	<img src="images/BunnyBot.gif">
	  <span class="card-title">Instructions
	  </span>
      </div>
	<div class="card-content  blue-grey lighten-1">
	<ol>
	<li>Microsoft dotNet 4.3 is required</li>
	<li>After installing dotNet Reboot your PC</li>
	<li>Install BunnyBot</li>
	<li>Run as adminstrator</li>
	<li>Enjoy!</li>
	</ol>
     </div>
    </div>
   </div>
  </div>
 </div>   
</div>

  
<center>
 <div class="container about">
  <h5>About Site</h5>
  <h6>Well read down below</h6>
  <hr>
</center>
  <div class="row">
    <div class="col s12 m4 l4">
      <h5 style="color:white">Story</h5>
	<div class="card blue-grey darken-1">
         <div class="card-content white-text">
      	<p>Wondering how did i built this site?</p><br>
      	<p>Oh man come on... without a proper guide you can't built it.</p><br>
      	<p>Whats special about your site?</p><br>
      	<p>I have choosen Google's material design.</p><br>
      	<p>Would you help me building one?</p><br>
      	<p>I would love to help :)</p>
   	 </div>
         </div>
       </div>
    <div class="col s12 m4 l4">
      <h5 style="color:white">Useful Links</h5>
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <img src="images/profile.png" width="64" height="64">
          <p>Trust me , I have learn't a lot about Material Design on these two site's. InFact these helped me building up this beautiful site. Check them for sure!! I have also pushed all my work to my github. Feel Free To Fork.</p>
        </div>
        <div class="card-action">
          <a href="https://scotch.io/tutorials/make-material-design-websites-with-the-materialize-css-framework" target="_blank">Link1</a>
          <a href='http://materializecss.com/' target="_blank">Link2</a>
	<a  href='https://github.com/hellripper545/' target="_blank">Github</a>
        </div>
      </div>
    </div>
	<div class="col s12 m4 l4">
      <h5 style="color:white;">Credits</h5>
      <ul>
        <li>
          <div class="collapsible-header">Google(For providing material design)</div>
        </li>
        <li>
          <div class="collapsible-header">scotch.io (For proper guide )</div>
        </li>
        <li>
          <div class="collapsible-header">Myself (Oh comeon don't ask y)</div>
        </li>
        <li>
          <div class="collapsible-header">My Team (They always helped me)</div>
        </li>
	<li>
          <div class="collapsible-header">All those who helped me</div>
        </li>
      </ul>
    </div>
  </div>
</div>



<center>
 <div class="container">
  <h5>Contact</h5>
   <h6>Get in touch with me</h6>
  <hr>
</center>
  <div class="row">
   <div class="col s12 m6 l6">
    <div class="row">
     <form class="col s12">
      <div class="row">
       <div class="input-field col s6">
        <input id="first_name" type="text" class="validate">
        <label for="first_name">First Name</label>
       </div>
      <div class="input-field col s6">
       <input id="last_name" type="text" class="validate">
       <label for="last_name">Last Name</label>
      </div>
     </div>
    <div class="row">
     <div class="input-field col s12">
      <input id="email" type="email" class="validate">
      <label for="email">E-Mail</label>
     </div>
    </div>
     <textarea class="materialize-textarea" placeholder="Your Message" required></textarea>
      <a href="#" class="waves-effect  btn">Submit</a>
     </form>
    </div>
   </div>
    <div class="col m2 m6 20 contact-holder">
      <h6 class="mdi-action-home">Address</h6>
       <p>#vadlamudi, Guntur, Andhra Pradesh, India</p>
      <h6 class="mdi-hardware-phone-android">Phone Number</h6>
       <p>+91 9999999999</p>
      <h6 class="mdi-action-open-in-browser">Website</h6>
       <p>Oops :P under construction</p>
    </div>
  </div>
</div>


<footer>
  <div class="footer-copyright">
    © 2016 Copyrighted Item
  </div>
</footer>

      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
      <script src="js/init.js"></script>
</body>
</html>
