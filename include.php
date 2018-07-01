<!DOCTYPE html5>
<html>
<head>
<title></title>
<meta charset="utf-8">
</head>
<body>

<?php
$mysqli = new mysqli("localhost", "root", "", "shop");

if ($mysqli->connect_errno) {
    echo "�� ������� ������������ � MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}
function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}
function lastAct($id, $mysqli)
{ 	$tm = time(); 
	 $rez="UPDATE users SET online='$tm', last_act='$tm' WHERE id='$id'";
	$rezult = mysqli_query($mysqli, $rez) ;	
	
}

function login ($mysqli) { 	

ini_set ("session.use_trans_sid", true); 
	session_start();  

	if (isset($_SESSION['id']))//���� ���c�� ���� 	
{ 	
	
	if(isset($_COOKIE['name']) && isset($_COOKIE['password'])) //���� cookie ����, �� ������ ������� ����� �� ����� � ����� true 	
		{ 			
		echo "!1!";
		SetCookie("name", "", time() - 1, '/'); 	
		SetCookie("password","", time() - 1, '/'); 		
		SetCookie("email","", time() - 1, '/'); 		
		setcookie ("name", $_COOKIE['name'], time() + 50000, '/'); 			
		setcookie ("password", $_COOKIE['password'], time() + 50000, '/'); 		
		setcookie ("email", $_COOKIE['email'], time() + 50000, '/');	
		$id = $_SESSION['id']; 			
		lastAct($id, $mysqli); 			
	return true; 		
		} 		
	else //����� ������� cookie � ������� � �������, ����� ����� ����������� �������� ������ �� �������  		
		{ 		
		echo "!2!";	
		$rez = "SELECT * FROM users WHERE id='{$_SESSION['id']}'"; //����������� ������ � ������� id 		
		$rez =mysqli_query($mysqli,$rez);	
		if (mysqli_num_rows($rez) == 1) //���� �������� ���� ������
		{ 		
		$row = mysqli_fetch_assoc($rez); //���������� � � ������������� ������ 				
		setcookie ("name", $row['Name'], time()+50000, '/'); 	
		setcookie ("email", $row['Email'], time()+50000, '/'); 			
		setcookie ("password", md5($row['Name'].$row['Password']), time() + 50000, '/'); 
		$id = $_SESSION['id'];
		lastAct($id, $mysqli); 
		return true; 			
		} 
		else {return false; echo "error";}	
		} 	

} 	
else //���� ������ ���, �� �������� ������������� cookie. ���� ��� ����������, �� �������� �� ���������� �� �� 	
{ 		
if(isset($_COOKIE['name']) && isset($_COOKIE['password'])) //���� ���� ����������. 		
	{ 
		
	$rez = "SELECT * FROM users WHERE name='{$_COOKIE['name']}'"; //����������� ������ � ������� ������� � ������� 	
	mysqli_query($mysqli,$rez);		
	@$row = mysqli_fetch_assoc($rez); 			
	if(@mysqli_num_rows($rez) == 1 && md5($row['Name'].$row['Password']) == $_COOKIE['password']) //���� ����� � ������ ������� � �� 			
		{ 		
echo "!3!";		
		$_SESSION['id'] = $row['id']; //���������� � ������ id 				
		$id = $_SESSION['id']; 				
		lastAct($id, $mysqli); 				
		return true; 			
		} 			
	else //���� ������ �� cookie �� �������			
		{ 	
echo "!4!";		
		SetCookie("name", "", time() - 360000, '/'); 				
		SetCookie("password", "", time() - 360000, '/');	 
		SetCookie("email", "", time() - 360000, '/');				
		return false;
		 echo "error"; 			
		} 		
} 		
else //���� ���� �� ���������� 		
{ 			
return false; 
 echo "error";		
} 	
} 
}
function is_admin($id, $mysqli) { 	
@$rez = "SELECT prava FROM users WHERE id='$id'";
$rez =mysqli_query($mysqli, $rez);	
if (mysqli_num_rows($rez) == 1) 	
{ 		
$prava = mysqli_result($rez, 0); 		
if ($prava == 1) return true; 		
else return false; 
} 	
else return false;	 
}
/*function out ($mysqli) { 	
session_start();
$id = $_SESSION['id'];			 	
$rez= "UPDATE reg SET online=0 WHERE id='$id'"; //�������� ���� online, ���������, ��� ������������ ����� � ����� (���������� � �������) 
mysqli_query( $rez);	
unset($_SESSION['id']); //������� ���������� ������ 	
SetCookie("name", ""); //������� cookie � ������� 	
SetCookie("password", ""); //������� cookie � �������  	

 }*/
 
 /*function resize($image, $w_o = false, $h_o = false) {
    if (($w_o < 0) || ($h_o < 0)) {
      echo "������������ ������� ���������";
      return false;
    }
    list($w_i, $h_i, $type) = getimagesize($image); // �������� ������� � ��� ����������� (�����)
    $types = array("", "gif", "jpeg", "png"); // ������ � ������ �����������
    $ext = $types[$type]; // ���� "��������" ��� �����������, ����� �������� ����
    if ($ext) {
      $func = 'imagecreatefrom'.$ext; // �������� �������� �������, ��������������� ����, ��� �������� �����������
      $img_i = $func($image); // ������ ���������� ��� ������ � �������� ������������
    } else {
      echo '������������ �����������'; // ������� ������, ���� ������ ����������� ������������
      return false;
    }
    /* ���� ������� ������ 1 ��������, �� ������ ����������� ��������������� 
    if (!$h_o) $h_o = $w_o / ($w_i / $h_i)/3;
    if (!$w_o) $w_o = $h_o / ($h_i / $w_i)/3;
    $img_o = imagecreatetruecolor($w_o, $h_o); // ������ ���������� ��� ��������� �����������
    imagecopyresampled($img_o, $img_i, 0, 0, 0, 0, $w_o, $h_o, $w_i, $h_i); // ��������� ����������� �� ��������� � ��������, ����������� ���
    $func = 'image'.$ext; // �������� ������� ��� ���������� ����������
    return $func($img_o, $image);*/ // ��������� ����������� � ��� �� ����, ��� � ��������, ��������� ��������� ���� ��������
 // }

 function imageresize($outfile,$infile,$neww,$newh,$quality) {

		    $im=imagecreatefromjpeg($infile);
		    $im1=imagecreatetruecolor($neww,$newh);
		    imagecopyresampled($im1,$im,0,0,0,0,$neww,$newh,imagesx($im),imagesy($im));

		    imagejpeg($im1,$outfile,$quality);
		    imagedestroy($im);
		    imagedestroy($im1);
    	}
 function click() {
	 $m=0;
	 $p=$m++;
	 echo '<img src="images2/'.$img['small'].'" alt="'.$img['small'].'" />';
	 }
?>
</body>
</html>