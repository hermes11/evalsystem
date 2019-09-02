<?php

session_start();
if(isset($_SESSION['id'])&& $_SESSION['id']!="")
{

}
else{
	header("location: studlogin.php");
}




 


 ?>

