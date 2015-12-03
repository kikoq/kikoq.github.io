<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body{
		background-color: #f1c40f;
		-webkit-animation: color 5s ease-in  0s infinite alternate running;
		-moz-animation: color 5s linear  0s infinite alternate running;
		animation: color 5s linear  0s infinite alternate running;
		/*animation: name duration timing-function delay iteration-count direction fill-mode play-state*/
	}

	/* Animasi + Prefix untuk browser */
	@-webkit-keyframes color {
	    0% { background-color: #f1c40f; }
	    32% { background-color: #e74c3c; }
	    55% { background-color: #9b59b6; }
	    76% { background-color: #16a085; }
	    100% { background-color: #2ecc71; }
	}
	@-moz-keyframes color {
	     0% { background-color: #f1c40f; }
	    32% { background-color: #e74c3c; }
	    55% { background-color: #9b59b6; }
	    76% { background-color: #16a085; }
	    100% { background-color: #2ecc71; }
	}
	@keyframes color {
	  0% { background-color: #f1c40f; }
	    32% { background-color: #e74c3c; }
	    55% { background-color: #9b59b6; }
	    76% { background-color: #16a085; }
	    100% { background-color: #2ecc71; }
	}
	fieldset{
		background-color: orchid;
		color:white;
		font-size:24px;
		font-weight: bold;
		width: 1000px;
	}
	input{
		background-color: lightgreen;
		border:0px;
		height: 30px;
		border-radius: 15px;
	}
	</style>
</head>
<body>
<br><br><br><br>
<center>
	<form action="" method="POST" name="">
	<fieldset>
		<legend>LAMPU PERTAMA</legend>
		<input type="submit" name="Hled1" value="Hidupkan Lampu Pertama">
		<input type="submit" name="Mled1" value="Matikan Lampu Pertama">
	</fieldset>
	<br>
	<fieldset>
		<legend>LAMPU KEDUA</legend>
		<input type="submit" name="Hled2" value="Hidupkan Lampu Kedua">
		<input type="submit" name="Mled2" value="Matikan Lampu Kedua">
	</fieldset>
	<br>
	<fieldset>
		<legend>LAMPU KETIGA</legend>
		<input type="submit" name="Hled3" value="Hidupkan Lampu Ketiga">
		<input type="submit" name="Mled3" value="Matikan Lampu Ketiga">
	</fieldset>
	<br>
	<fieldset>
		<legend>SEMUA LAMPU</legend>
		<input type="submit" name="Hled4" value="Hidupkan Semua Lampu">
		<input type="submit" name="Mled4" value="Matikan Semua Lampu">
	</fieldset>
	</form>
</center>

<?php
    if (isset($_POST['Hled1']))
          shell_exec("Hled1.bat");
    else if (isset($_POST['Hled2']))
        shell_exec("Hled2.bat");
    else if (isset($_POST['Hled3']))
        shell_exec("Hled3.bat");
    else if (isset($_POST['Hled4']))
          shell_exec("Hled4.bat");
    else if (isset($_POST['Mled1']))
          shell_exec("Mled1.bat");
    else if (isset($_POST['Mled2']))
        shell_exec("Mled2.bat");
    else if (isset($_POST['Mled3']))
        shell_exec("Mled3.bat");
    else if (isset($_POST['Mled4']))
          shell_exec("Mled4.bat");     
?>

</body>
</html>