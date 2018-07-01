<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Details</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/etalage.css">
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/jquery.etalage.min.js"></script>
<script src="js/menu_jquery.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

</head>
<?php
include 'include.php';
$val=$_GET['value'];
$cook= $_COOKIE['Name'];
	$cookm= $_COOKIE['Email'];
?>
<!-- header_top -->
<div class="top_bg">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<ul>
					<li><a href="#">You entered as:<?php echo $cook ?></a></li>
					
					
				
				</ul>
			</div>
			<div class="top_left">
				<h2><span></span> Call us : 666 666 666</h2>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- header -->
<div class="header_bg">
<div class="container">
	<div class="header">
	<div class="head-t">
		<div class="logo">
			<a href="index.php"><img src="images/ruot.png" class="img-responsive" alt=""/> </a>
		</div>
		<!-- start header_right -->
		<div class="header_right">
			<div class="rgt-bottom">
				
				
					 
				
				
			
			
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
		<!-- start header menu -->
		<ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="index.php">Home</a></li>
			</li>
				<li><a class="color6" href="#">Fridges & freezes</a>
				
				</li>				
			
				<li><a class="color7" href="#">Ovens and cooking</a>
				
				</li>				
			
				<li><a class="color9" href="#">Small applianses</a>
				
				</li>
				<li><a class="color4" href="#">Tv audio & electronics</a>
				
				</li>
		 </ul> 
	</div>
</div>
</div>

	

<!-- content -->
<div class="container">
<div class="women_main">
	<!-- start content -->
	
			<div class="row ">
			
				<div class="col-md-4 ">
				  
					
						
								
								<?php
							

 
								
								
                    $rez="SELECT * FROM photos where id='$val'";
           $rez = mysqli_query($mysqli, $rez);
$img = mysqli_fetch_object($rez);
//$size = getimagesize ("images2/'.$img->small.'" ); 


								
									echo'<img size=300 src="images/'.$img->big.'"    class="img-responsive" />';
								echo '<img class="etalage_source_image" src="images2/'.$img->big.'">';
								
							?>
							</div>
								
				
				 <div class="col-md-3">
					<h3>
					
		
		<?php echo '<div>'.$img->nazv_tov;
					?>
					</h3>
					<div class="col-md-9 ">
					
					<span class="code">Product Code:</span> 
					<?php echo $img->id;?>
					<br><span class="text">Information:</span>
					<?php echo $img->info;?></span>
							<br><span class="text">Price:</span>
							<span class="price-new"><?php echo $img->price;?></span></span>
						
					<br>
					<div class="btn_form">
						<a href="poc.php">buy</a>
					</div>
					</div>
			   	 </div>
				 </div>
          	    <div class="clearfix"></div>
          	   </div>
			  
          	    
				
	       </div>	
	
		   <div class="clearfix"></div>		
	  
	<!-- end content -->
</div>
</div>
<div class="foot-top">
	<div class="container">
		<div class="col-md-6 s-c">
			<li>
				<div class="fooll">
					<h5>follow us on</h5>
				</div>
			</li>
			<li>
				<div class="social-ic">
					<ul>
						<li><a href="#"><i class="facebok"> </i></a></li>
						<li><a href="#"><i class="twiter"> </i></a></li>
						<li><a href="#"><i class="goog"> </i></a></li>
						<li><a href="#"><i class="be"> </i></a></li>
						<li><a href="#"><i class="pp"> </i></a></li>
							<div class="clearfix"></div>	
					</ul>
				</div>
			</li>
				<div class="clearfix"> </div>
		</div>
		
			<div class="clearfix"> </div>
	</div>
</div>
<div class="footer">
	<div class="container">
		
		<div class="clearfix"> </div>
			<p>ВИС 32</a></p>
	</div>
</div>
</body>
</html>