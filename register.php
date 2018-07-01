
<!DOCTYPE HTML>
<html>
<head>
<title>Register</title>
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
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
</head>
<body>
<?php
include 'include.php';

?>
<!-- header_top -->
<div class="top_bg">
	<div class="container">
		<div class="header_top">
			
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
			<li class=><a class="color4 tt" href="dish.php" >Diswashes,sinks & tabs</a>
				
				</li>
				<li><a class="color6" href="fr.php">Fridges & freezes</a>
				
				</li>				
			
				<li><a class="color7" href="ovens.php">Ovens and cooking</a>
				
				</li>				
			
				
				<li><a class="color4" href="tv.php">Tv audio & electronics</a>
				
				</li>
		 </ul> 
	</div>
</div>
</div>
<!-- content -->
<div class="container">
<div class="main">
	<!-- start registration -->
	<div class="registration">
		<div class="registration_left">
		<h2>new user? <span> create an account </span></h2>
		
		<script>
			(function() {
		
			// Create input element for testing
			var inputs = document.createElement('input');
			
			// Create the supports object
			var supports = {};
			
			supports.autofocus   = 'autofocus' in inputs;
			supports.required    = 'required' in inputs;
			supports.placeholder = 'placeholder' in inputs;
		
			// Fallback for autofocus attribute
			if(!supports.autofocus) {
				
			}
			
			// Fallback for required attribute
			if(!supports.required) {
				
			}
		
			// Fallback for placeholder attribute
			if(!supports.placeholder) {
				
			}
			
			// Change text inside send button on submit
			var send = document.getElementById('register-submit');
			if(send) {
				send.onclick = function () {
					this.innerHTML = '...Sending';
				}
			}
		
		})();
		</script>
		 <div class="registration_form">
		 <!-- Form -->
			<form id="registration_form" action=" " method="post" name="submit_tel">
				
				<div>
					<label>
						<input placeholder="name:" name="name" type="text" tabindex="2" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="email address:" name="mail1" type="email" tabindex="3" required>
					</label>
				</div>
				
				<div>
					<label>
						<input placeholder="password" type="text" name="pas" tabindex="4" required>
					</label>
				</div>						
				<div>
					
				</div>	
				<div>
					<input type="submit" name="submit_tel" value="create an account" id="register-submit">
				</div>
				
				
			
			</form>
			<!-- /Form -->
		</div>
	</div>
	
	<div class="clearfix"></div>
	</div>
	<!-- end registration -->
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
		<div class="col-md-6 s-c">
			<div class="stay">
						<div class="stay-left">
							
						</div>
						
							<div class="clearfix"> </div>
			</div>
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


<?php
if(isset($_POST["submit_tel"]))
{
$name = $_POST["name"];
$pas= ($_POST["pas"]);
$mail= $_POST ["mail1"];

$name = clean($name);
$mail = clean($mail);
$pas = clean($pas);
$e=0;
if(!empty($name)  && !empty($mail) && !empty($pas)) {
    $email_validate = filter_var($mail, FILTER_VALIDATE_EMAIL); 
	if(check_length($name, 2, 25)  && check_length($pas, 2, 1000) && $email_validate) {
       
		$e=1;
    }else { 
        echo "Введенные данные некорректные";
    }
}else { 
    echo "Заполните пустые поля";
}

if ($e==1)
{
if 
    (!$mysqli->query("INSERT INTO users(Name,Password,Email ) VALUES ('$name','$pas','$mail')")) {
    echo "Не удалось создать таблицу: (" . $mysqli->errno . ") " . $mysqli->error;
}
}
}

?>
</body>
</html>