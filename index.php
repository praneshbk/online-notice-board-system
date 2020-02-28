<?php 
include('connection.php');
session_start();
 ?>
<html>
    <head><b>
        <title>Online Notice Board</title><b>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	<style>
.intro {
    background-color: ;
}
</style>

	</head>
	<body>
			<nav class="navbar navbar-default navbar-fixed-top" style="background-color: black;">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><div class="intro">
  
<h3>Online Notice Board for MCA Students</h3></div></a></li>
      
	  
	  <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>
   
   
	
	<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>
	
	</ul>


<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	   <li><a href="index.php?option=forget_pass"><span class="glyphicon glyphicon-frg-ps"></span> Forgrt passwor</a></li>
    </ul>



</div>
</nav>	



  <!-- Wrapper for slides 
 <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="images/28571_KLSGOGTE_APP (1).jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div> <!--
    </div>
    <div class="item">
      <img src="images/d2.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
	
	 <div class="item">
      <img src="images/d4.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

 <br><br><br><br><br><br><br><br>
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider end-->
</div>
 <br><br><br><br><br><br><br><br>


<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			
			
			else if($opt=="login")
			{
			include('login.php');
			}
			else if($opt=="forget_pass")
			{
			include('aa.php');
			}
		}
		else
		{
                    
                    
                    
		}
		?>
		
		
		
		
		</div>
	<!-- container -->
		
		
		
		</div>
	</div>

</div>



<br/>
<br/>
<br/>
<br/>

<!-- footer-->

			<nav class="navbar navbar-default navbar-bottom" style="background:blue">
  <div class="container">
  <center>
  <ul class="nav navbar-nav navbar-left">
    <li> Developed by Department of MCA GIT Belgaum</li></center>
	</ul>
</div>
</nav>
<!-- footer-->

	</body>
</html>