<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
  </head>
  <body>
  <style type="text/css">
  body{
	background: AntiqueWhite;}
  h1{
	margin-top: 100px;
	font-size: 50pt;
	margin-bottom: -75px;
	text-align: center;
	color: SaddleBrown;
	font-weight: 1000;}
  .tombol_login{
	margin-top: 10px;
	background:SaddleBrown;
	color: white;
	font-size: 10pt;
	width: 100%;
	border: none;
	padding: 10px 20px;}
   .alert{
	background: brown;
	color: white;
	padding: 10px;
	text-align: center;
	border:1px #b32929;}
	.box {
	border-radius: 20px;
	width: 450px;
	background : LightCoral;
	margin: 70px auto;
	padding: 20px 20px;}
   label{
	font-size: 11pt;}
   .form_login{
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-top: 10px;
	margin-bottom: 20px;}
	</style>
	<h1>Login</h1>
	<?php 
	if(isset($_GET['message'])){
		if($_GET['message']=="failed"){
			echo "<div class='alert'>Username atau Password salah!</div>";}
		}
	?>
	<div class="box">
		<form action="login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" placeholder="Masukkan Username" class="form_login" required="required">
			<label>Password</label>
			<input type="password" name="password" placeholder="Masukkan Password" class="form_login" required="required">
			<hr>
			<input type="submit" class="tombol_login" value="LOGIN">
			<br/>
		</form>
	</div>
  </body>
</html>