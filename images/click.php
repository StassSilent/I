<!DOCTYPE HTML>
<html>
<head>
<title>Gretong a Ecommerce Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
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
 ?>
<!-- header_top -->
<div class="top_bg">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<ul>
					<li><a href="#">help</a></li>
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
			<a href="index.php"><img src="images/logo.png" class="img-responsive" alt=""/> </a>
		</div>
		<!-- start header_right -->
		<div class="header_right">
			<div class="rgt-bottom">
				
				
					 
				
				
			<div class="cart box_1">
					<h3> <span class="simpleCart_total">$0.00</span> <img src="images/bag.png" alt=""></h3>
					
				<div class="clearfix"> </div>
			</div>
			<div class="create_btn">
				<a href="checkout.php">CHECKOUT</a>
			</div>
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
<div class="arriv">
	<div class="container">
		
		
		
	</div>
</div>

<div class="foot-top">
	<div class="container">
	

	<?php 
	$admin=0;
 if (login($mysqli)){
	 $id=$_SESSION['id'];
	 
	
	 echo ' <form  action=" " method="post" enctype="multipart/form-data">
      <input type="file" name="filename"><br> 
      <input type="submit" name="p" value="Загрузить"><br>
	  
      </form>
	  '; 
	  if(isset($_POST["p"])){
		  if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
   {
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
     move_uploaded_file($_FILES["filename"]["tmp_name"], "C:/xampp/htdocs/I/images/".$_FILES["filename"]["name"]);

	 $image=$_FILES["filename"]["name"];
	 $file="C:/xampp/htdocs/I/images/".$image;
	 $newfile="C:/xampp/htdocs/I/images2/".$image;
	 copy($file, $newfile);
	 
	  resize($newfile, 300);
	  header ('location:click.php');

	 if 
    (!$mysqli->query("INSERT INTO photos(small,big) VALUES ('$image','$image')")) {
    echo "Не удалось создать таблицу: (" . $mysqli->errno . ") " . $mysqli->error;
   }}
   else {
      echo("Ошибка загрузки файла");
   }
 
 	
	  }
 
	  $query="SELECT prava FROM reg WHERE id='$id'";
if ($result = mysqli_query($mysqli, $query)) {

    /* выборка данных и помещение их в массив */
    while ($row = mysqli_fetch_row($result)) {
		if ($row[0]!=NULL){
       printf ("%s \n", $row[0]);
	   $admin=1;
    }}
}
 
	} 
	$rez="SELECT *  FROM photos";

$rez = mysqli_query($mysqli, $rez);

		while( $img = mysqli_fetch_array($rez) ) {
			 $w= $img['id'];
		echo	'<span style="float:left; margin:10px;">';
	
   // $mysqli->query("UPDATE photos SET ord=ord+1 WHERE small='$w'");
		echo '<a name="kol" id="kol" href="details.php?value='.$w.'" ><img src="images2/'.$img['small'].'" alt="'.$img['small'].'" /></a>';
		
		echo	'<div>';
		
		

if($rez)
{
    $rows = mysqli_num_rows($rez); // количество полученных строк
}
		
       if ($admin==1) {
		   $n=$img['id'];
		echo '<form action="" method="post" class="form1">
		<br><input type="submit" class="button" name='.$n.' value="Удалить">';
		
		if(isset($_POST["$n"]))
		{
			
			$mysqli->query("DELETE FROM photos WHERE id='$n'");
		}
	   }
		echo	'</div>';
		echo '</span>';
 echo '</form>';
 
    
	}
	?>
	</div>
	<br>
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
			<p>Copyrights © 2015 Gretong. All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>

</body>
</html>