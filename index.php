
<!DOCTYPE HTML>
<html>
<head>
<title>Shop</title>
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
<script src="js/simpleCart.min.js"> </script>
</head>
<body>
<?php
include 'include.php';
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
			<img src="images/ruot.png" class="img-responsive" alt=""/>
		</div>
		<!-- start header_right -->
		<div class="header_right">
			<div class="rgt-bottom">
			
				<div class="log">
					<div class="login" >
						<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
						    <div id="loginBox">                
						        <form id="loginForm" method="post">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="text">Name</label>
						                          <input type="text" name="name" id="name">
						                    </fieldset>
						                    <fieldset>
						                            <label for="text">Password</label>
						                            <input type="text" name="pas" >
						                     </fieldset>
						                    <input type="submit" name="submit_tel"  value="Sign in">
						        
						            	</fieldset>
						            <?php
login($mysqli);
if(isset($_POST["submit_tel"]))
{
	
$name=$_POST['name'];
$password=($_POST['pas']);
 
$error = array(); //массив для ошибок 	
if ($name != "" && $password != "") //если поля заполнены 	
{ 		

$rez ="SELECT * FROM users WHERE Name='$name'"; //запрашиваем строку из БД с логином, введённым пользователем 	
$rez = mysqli_query($mysqli, $rez);	
if (mysqli_num_rows($rez) == 1) //если нашлась одна строка, значит такой юзер существует в БД 		
	{ 			
$row = mysqli_fetch_assoc($rez); 	

if (($password) == ($row['Password'])) //сравниваем хэшированный пароль из БД с хэшированными паролем, введённым пользователем и солью (алгоритм хэширования описан в предыдущей статье) 						
	{ 
//пишем логин и хэшированный пароль в cookie, также создаём переменную сессии
setcookie ("Name", $row['Name'], time() + 50000); 
setcookie ("Email", $row['Email']);						
setcookie ("Password", md5($row['Name'].$row['Email'].$row['Password']), time() + 50000); 				
$_SESSION['id'] = $row['id'];	//записываем в сессию id пользователя 				
$id = $_SESSION['id']; 				
lastAct($id, $mysqli); 	
header("Location: http://localhost/I/index.php");	
		
//return $error; 			
	} 			
else //если пароли не совпали 			
{ 				
$error[] = "Неверный пароль";
echo  "Неверный пароль";										
//return $error; 			
} 		
	} 		
else //если такого пользователя не найдено в БД 		
{ 			
$error[] = "Неверный логин и пароль"; 	
echo "Неверный логин и пароль"; 		
//return $error; 		
} 	
	
}
else 	
{ 		
$error[] = "Поля не должны быть пустыми!"; 	
echo "Поля не должны быть пустыми!";			
//return $error; 	
} 

}

 ?>
								</form>
								<form method="post">
			<div> &nbsp <input type="submit" value="exit" name="exit" id="register-submit"></div>
			<?php
			if(isset($_POST["exit"]))
{
	session_destroy();
	header("Location: http://localhost/I/index.php");
	
}?></form>
							</div>
						</div>
						
					</div>
				</div>
				<div class="reg">
					<a href="register.php">REGISTER</a>
				</div>
			
			
			<div class="clearfix"> </div>
		</div>
		
	</div>
		<!-- start header menu -->
		<ul class="megamenu skyblue">
		
		
	
			
			<li class="active grid"><a class="color4 tt" href="dish.php" >Diswashes,sinks & tabs</a>
				
				</li>
				<li><a class="color6" href="fr.php">Fridges & freezes</a>
				
				</li>				
			
				<li><a class="color7" href="ovens.php">Ovens and cooking</a>
				
				</li>				
			
				
				<li><a class="color4" href="#">Tv audio & electronics</a>
				
				</li>
		 </ul> 
	</div>
</div>
</div>

<div class="arriv">
	<div class="container">
		<div class="arriv-top">
			<div class="col-md-6 arriv-left">
				<a class="color7" href="dish.php"><img src="images/d.jpg" class="img-responsive" alt=""></a>
				<div class="arriv-info">
					
					<div class="crt-btn">
					<br><br>
					</div>
				</div>
			</div>
			<div class="col-md-6 arriv-right">
				<a class="color7" href="fr.php"><img src="images/f.jpg" class="img-responsive" alt=""></a>
				<div class="arriv-info">
					
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="arriv-top">
			<div class="col-md-6 arriv-left">
				<a class="color7" href="ovens.php"><img src="images/o.jpg" class="img-responsive" alt=""></a>
				<div class="arriv-info">
					
					
					</div>
				</div>
			</div>
			<div class="arriv-top">
			<div class="col-md-6 arriv-left">
				<a class="color7" href="tv.php"><img src="images/tv.jpg" class="img-responsive" alt=""></a>
				<div class="arriv-info">
					
					
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="arriv-top">
			
			
			<div class="clearfix"> </div>
		</div>
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
			<p>ВИС 32</p>
	</div>
</div>

</body>
</html>