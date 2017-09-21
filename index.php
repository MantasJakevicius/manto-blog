<!DOCTYPE html>

<html lang="en">

    <head>
    
        <title>Manto Blogas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    </head>
    
    <body>
     
  	<!--MENU-->
	<ul class="topnav" id="nav">
		<a href="index.php"><li id="home"><i class="fa fa-home" aria-hidden="true"></i></li></a>
		<a id="about" href="#post"><li>About Me</li></a>
		<a id="contact" href="#post"><li>Contact Me</li></a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
	</ul>
        
    <!--MAIN PAGE-->
	<div id="background">
		<p id="title">Welcome to Mantas's Blog</p>
		<div class="button"><a href="#post"><p id="lifestyle">Lifestyle</p></a></div>
		<div class="button"><a href="#post"><p id="programming" >Programming</p></a></div>

		<div id="footer"><script>new Date().getFullYear()>document.write(new Date().getFullYear());</script> &copy; Mantas Jakevicius</div>
		</div>

	<!--POST DIV-->
	<div id="post"></div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
<div class="modal-content">
	<br>
	<div class="modal-header">
		<span class="close">&times;</span>
		<h2>Post Header</h2>
	</div>
	<br>
	<div class="modal-body">
		<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis euismod ut diam in mollis. Sed eget interdum tortor. Phasellus ac lacinia est. Sed non libero tincidunt, ornare tellus id, rhoncus turpis. Sed id consectetur felis. Suspendisse facilisis ex erat, ac mollis quam convallis et. Donec vestibulum tortor in elementum feugiat. Integer urna eros, aliquam non nisl convallis, volutpat tristique nibh. Curabitur leo diam, blandit eget massa at, pulvinar consequat dui. Nulla facilisi. Nunc gravida varius sem sed ultricies. Ut dui felis, malesuada sit amet feugiat quis, vehicula ut justo. Praesent hendrerit eu lacus vitae tempus. Phasellus molestie massa quis mauris volutpat iaculis. Vivamus iaculis, ante semper pellentesque rhoncus, dolor neque maximus magna, sed euismod dui risus eget ipsum. Aenean ultrices augue vitae volutpat consectetur.
		<br><br>
		Quisque accumsan rhoncus quam non euismod. Nulla finibus, sem et sagittis dapibus, odio turpis interdum risus, a tincidunt nisl enim eget diam. Cras odio eros, consectetur vitae viverra sed, sodales vel erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque volutpat egestas arcu. Suspendisse tempor, sapien eu efficitur dignissim, enim purus tincidunt diam, vitae scelerisque dui nisl eget massa. Sed rutrum, leo posuere euismod posuere, dolor lorem consequat orci, vel euismod libero nunc ac augue. Fusce iaculis mi vitae eleifend maximus. Curabitur sit amet viverra nulla, sit amet laoreet felis. Suspendisse cursus convallis sodales. Fusce finibus quam lobortis sem fermentum lobortis. Aenean pulvinar consequat rhoncus. Suspendisse nec odio ut nisi interdum maximus. </p>
		<br>
			<img src="images/coding.jpg" alt="">
		<br><br>
		<p>Suspendisse sed enim laoreet, hendrerit orci quis, vehicula sapien. Cras quam neque, imperdiet et nisl at, vehicula blandit velit. Nam nec ex ultrices diam molestie tincidunt in sed lorem. Ut turpis nisi, ornare nec dui at, viverra egestas nulla. Suspendisse porta pretium enim. Vivamus vestibulum non lorem id sagittis. Cras pulvinar risus at nulla vestibulum, in malesuada sapien ullamcorper. Nunc ac mauris in libero ultrices euismod.
		<br><br>
			<img src="images/lifestyle.jpg" alt="">
		<br><br>
		Nulla facilisi. Nunc eleifend leo neque, sit amet interdum nisi rutrum sollicitudin. Ut rutrum neque a tortor rutrum gravida. Pellentesque ut bibendum dui, sed bibendum mi. Sed blandit vel risus nec pellentesque. Nulla eu suscipit orci. Phasellus ultricies, enim a auctor luctus, lectus ex varius turpis, et feugiat elit dui vitae urna. Maecenas lectus tellus, commodo id risus sit amet, tristique accumsan tellus. Integer ultrices erat in quam hendrerit, at malesuada risus pulvinar. Pellentesque tristique pretium risus, a sollicitudin nibh convallis et. Aliquam tincidunt pellentesque euismod. Quisque dapibus turpis sem, sed iaculis quam elementum vitae. Donec sodales ut mi ut condimentum. Integer dictum quis massa at luctus. Suspendisse quis rutrum dui. Donec quam ligula, dignissim eget augue id, pretium lacinia justo. </p>
		<br><br>
	</div>
</div>

</div>
        
<!--TOGGLE BUTTON-->
<script type="text/javascript">
	function myFunction() {
			var x = document.getElementById("nav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
		}
</script>

<script type="text/javascript" src="script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
   
<script>
var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    
<script>
	var $root = $('html, body');
	$('a').click(function() {
		$root.animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top - 80
		}, 1000);
		return false;
	});
</script>
   
<script type="text/javascript">
	
 $(document).ready(function(){
	 
		  $('#popular').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			nextArrow: false,
			prevArrow: false,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 2
					}
				},

				{
					breakpoint: 769,
					settings: {
						slidesToShow: 1
					}
				}
			]

		  });
		});
	
</script>
<!--    <a id="homepage" href="http://mjakevicius.co.uk"><img src="logo.png" alt=""></a>-->
    </body>
    
</html>