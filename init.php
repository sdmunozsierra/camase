<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>

<html>
<head>
	<title>AVON CHAFAAAAAA</title>
	<style type="text/css" src="avonChafa/style.css"></style>
</head>
<body>
	<form name="loginform" action="login_exec.php" method="post">
<table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
  <tr>
    <td colspan="2">
		<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
	</td>
  </tr>
  <DIV>
  		<tr>
  	   		<td width="116"><div align="right">Name<span></span></div></td>
  	   		<td width="116"><div align="right">Your members<span></span></div></td>
    	
  		</tr>
  </DIV>
  <tr>
    <td width="116"><div align="right">Name</div></td>
    <td width="177"><input name="username" type="text" /></td>
  </tr>
  <tr>
    <td><div align="right">Username</div></td>
    <td><input name="password" type="password" /></td>
  </tr>
  <tr>
    <td><div align="right">Password</div></td>
    <td><input name="password" type="password" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><a href="index.php">
   	<input type="button" value="Create User" /></td>
   
  </tr>
</table>
</form>

</body>
</html>
