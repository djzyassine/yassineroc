<!DOCTYPE html>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Open Comptable, Application de Comptablit� OpenSource </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Open Comptable, Application de Comptablit� OpenSource">
<meta name="author" content="Designova">

<!-- Standard Favicon--> 
<link rel="shortcut icon" href="../images/favicon/favicon.ico">



<!-- Bootstrap CSS Files -->
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
<!-- Custom Fonts Setup via Font-face CSS3 -->
<link href="../fonts/fonts.css" rel="stylesheet">
<!-- CSS files for plugins -->
<link href="../stylesheets/slidingmenu.css" rel="stylesheet">

<!-- css pour afficher le nom d'application vertical-->
<link href="../stylesheets/main2.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../login/css/style.css" />
		<script src="js/cufon-yui.js" type="../login/text/javascript"></script>
		<script src="js/ChunkFive_400.font.js" type="../login/text/javascript"></script>
		
		
		<script type="text/javascript">
			Cufon.replace('h1',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h2',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h3',{ textShadow: '1px 1px #000'});
			Cufon.replace('h5',{ textShadow: '1px 1px #000'});
			Cufon.replace('.back');
		</script>

  
		
    
    </head>
    <body>
	<!-- Sliding Navigation : starts -->
<nav class="menu" id="sm">
	<div class="sm-wrap">
		<div id="logo" class="text-center"><img alt="" title="" src="../images/logo.png"/></div>
		<a class="active" href="../index_root.html">Home</a>
		<a href="../login.html">Se D&eacute;connecter</a>
		<a href="liste_personnel.php">Gestion Personnel</a>
		<a href="traitement_salaire.php">Traitement De Sailare</a>
		<a href="../contact_root.html">Contact</a>
		<a href="../apropos_root.html">A Propos</a>
		<!--<a href="about.html">About</a>
		<a href="services.html">Services</a>
		<a href="contact.html">Contact</a>
		<a href="single-project.html">Single Project</a>-->
	</div>
	<!-- Navigation Trigger Button -->
	<div id="sm-trigger"><p id="vertical-logo">Open Comptable</p></div>
</nav>
<!-- Sliding Navigation : ends -->


		
<!-- Master Wrap : starts -->
<section id="mastwrap" class="sliding">



<!-- page-section : starts -->
<section id="intro" class="intro" style="background-color:white;">
	

	<!-- inner-section : starts -->
	
	<section class="inner-section" style="background-color:white;">

		<!-- container : starts -->
		<section class="container" >
			<!--<div class="row">
				<article class="col-md-12 text-left">
					<div class="intro-07-headletters full-height pad-common text-center">
						<!--<div <!--class="valign"-->


<!-- debut script php-->

<!--<div class="wrapper" >-->
			
			<!--<div class="content">-->
				<div id="form_wrapper" style="box-shadow:0px 0px 0px; border:0px" class="form_wrapper">
					
					<form class="login active" method="post" action="minoration_modification.php">
					



  <table width="800px" class="modifier" style=" text-align:center;" cellspacing="55px" ><tr>
  <?php 
  mysql_connect('localhost','root');

mysql_select_db('open_comptable');

$query=mysql_query('select * from minoration');
  if($rows=mysql_fetch_array($query))
  {
  echo '<td width="114px" height="50">';
  echo '<h5>CNSS:</h5></td>';
   echo '<td width="114px"><input type="text" name="h25" value="'.$rows[0].'" ></td>';
echo '</tr>';
  echo '<tr><td height="50%"><h5>AMO:</h5></td>';
  echo '<td width="114px"><input type="text" name="h50" value="'.$rows[1].'" ></td></tr>';
  echo '<tr>';
  echo '<td height="50"><h5>CIMR:</h5></td><td width="114px"><input type="text" name="h100" value="'.$rows[2].'"></td></tr>';
  echo '<td height="50"><h5>MUTUELLE:</h5></td><td width="114px"><input type="text" name="mutuelle" value="'.$rows[3].'"></td></tr>';
  echo '<td height="50"><h5>Nombre De Jours/mois:</h5></td><td width="114px"><input type="text" name="nbrjour" value="'.$rows[4].'"></td></tr>';
  echo '<td height="50"><h5>Nombre D\'heure/Jour:</h5></td><td width="114px"><input type="text" name="nbrheure" value="'.$rows[5].'"></td></tr>';
  }
  ?>
 
  

  <tr>
  <td height="50">
  <input  type="submit" value="Modifier">
  </td>
  <td>
   <!--<a href="http://localhost:8080/oc/php/liste_personnel.php">--><input type="button" value="Annuler"></a>
  </td>
  </tr></table>
</form>
					
				<!--</div>
				<div class="clear"></div>
			<!--</div>-->
			
		<!--</div>-->

<!-- fin script php-->


<!--</div>-->
				<!--</article>
			</div>-->
		</section>
		<!-- container : ends -->

        	</section>
	<!-- inner-section : ends -->
</section>
<!-- page-section : ends -->




<!-- masthead : starts -->
<footer id="mastfoot" class="clearfix" style="background-color:white;">
	<!-- inner-section : starts -->
	<section class="inner-section foot-top">
		<!-- container : starts -->
		<section class="container">
			<div class="row">
				<article class="col-md-4 text-left">
					<a class="handle" href="index.html">@Open Comptable</a>
				</article>
				<article class="col-md-8 text-right">
					<ul class="foot-social">
						<li><a href="#"><img title="" alt="" src="../images/social/01.png"/></a></li>
						<li><a href="#"><img title="" alt="" src="../images/social/02.png"/></a></li>
						<li><a href="#"><img title="" alt="" src="../images/social/03.png"/></a></li>
						<li><a href="#"><img title="" alt="" src="../images/social/04.png"/></a></li>
					</ul>
				</article>
			</div>
		</section>
		<!-- container : ends -->
	</section>
	<!-- inner-section : ends -->	

	<!-- inner-section : starts -->
	<section class="inner-section credit-panel">
		<!-- container : starts -->
		<section class="container">
			<div class="row">
				<article class="col-md-4 text-left">
					<p>Proudly created by ZOUHAIR Y@ssine</p>
				</article>
				<article class="col-md-8 text-right">
					
					<p>Copyright &copy; 2014 OC.</p>
				</article>
			</div>
		</section>
		<!-- container : ends -->
	</section>
	<!-- inner-section : ends -->	
</footer>
<!-- masthead : ends -->






</section>
<!-- Master Wrap : ends -->










<script src="../bootstrap/js/jquery.js" type="text/javascript"></script>
<script src="../javascripts/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="../bootstrap/js/bootstrap.js" ></script> 
<!-- JS Plugins -->
<script src="../javascripts/pace.min.js"></script>
<script src="../javascripts/retina.js" ></script> 
<script src="../javascripts/classie.js" ></script> 
<script src="../javascripts/jquery.touchSwipe.js"></script>
<script src="../javascripts/owl.carousel.js"></script>
<script src="../javascripts/jquery.mixitup.js"></script>
<script src="../javascripts/venobox.min.js"></script>
<script src="../javascripts/jquery.tweet.js"></script>
<script src="../javascripts/jquery.stellar.js"></script>
<script src="../javascripts/smooth-scroll.js"></script>
<script src="../javascripts/jquery.appear.js"></script>
<script src="../javascripts/slidingmenu.js"></script>

		<script type="text/javascript" src="../javascripts/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="../javascripts/jquery.vaccordion.js"></script>
<!-- JS Custom Codes --> 
<script src="../javascripts/form-validation.js" ></script> 
<script src="../javascripts/main.js" ></script> 

		<script type="text/javascript">
			$(function() {
				$('#va-accordion').vaccordion({
					// the accordion's width
					accordionW      : $(window).width(),
					// the accordion's height
					accordionH      : $(window).height(),
					// number of visible slices
					visibleSlices   :4,
					// the height of a opened slice
					// should not be more than accordionH
					expandedHeight  : 450,
					// speed when opening / closing a slice
					animSpeed       : 350,
					// easing when opening / closing a slice
					animEasing      : 'jswing',
					// opacity value for the collapsed slices
					animOpacity     : 0.1,
					// time to fade in the slice's content
					contentAnimSpeed: 1500,
					// if this is set to false,
					// we collapse any opened slice
					// before sliding
					savePositions   : true
				});
			});
		</script>


</body>

<!-- Mirrored from designova.net/identity/index07.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 04 Apr 2014 19:49:08 GMT -->
</html>
    </body>
</html>