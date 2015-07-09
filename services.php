<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
   
			<?php
				include("header.php")
			?>
	     			<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
										<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"> </span>
					<span class="icon-bar"> </span>
					<span class="icon-bar"> </span>
				  </button>
				</div>
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
					<li><a href="about.php">About</a></li>
					<li class="active"><a href="services.php">Services</a></li>
					<li><a href="projects.php">Projects</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				  </ul>
					<div class="search">
						<form>
							<input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
							<input type="submit" value=" ">
						</form>
					</div>
				  <div class="clearfix"> </div>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
						<div class="clearfix"> </div>
					<!----start-main-header----->
					<div class="main-header">
			
				  <!-- script-for-menu -->
			 <script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle("slow" , function(){
						});
					});
			 </script>
			 <!-- script-for-menu -->	 
				
						
		 </div>
		<!----End-main-header------>
	</div>	
	</div>		
	</div>	
<!---End-header--->
<!---start-content------>
  	      <br>
  	      <br>
  	      <br>
  	      <br>
  	      <br>

  	      <br>
  	      <br>
  	      <br>

  	      <br>
  	      <br>
  	      <br>
  	      <br>

  	      <br>

 <!---end-content------>
 <?php
	include("footer.php")
 ?>

<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 

</body>
</html>

