<html>
	<head>

	</head>
	<body background="chiocciola.jpg">

 	<!--GPIO17-->
	<form action="" method="post">
	<p style="font-size:100px;text-align:center;color:white">POMPA</p>
  
    
	<input type="submit" name="ACCENSIONE" value="ACCENSIONE" style="font-size:50px;background:rgba(0, 222, 255, 0.3);padding:70px">
    
    	 <input type="submit" name="SPEGNIMENTO" value="SPEGNIMENTO" style="font-size:50px;background:rgba(0, 222, 255, 0.3);padding:70px">
    
        <!--GPIO18-->
	</form>

	<form action="" method="post">
        <p style="font-size:100px;text-align:center;color:white">IRRIGATORE</p>


        <input type="submit" name="start" value="ACCENSIONE" style="font-size:50px;background:rgba(0, 222, 255, 0.3);padding:70px">

         <input type="submit" name="stop" value="SPEGNIMENTO" style="font-size:50px;background:rgba(0, 222, 255, 0.3);padding:70px">


        </form>
<div style="text-align:center">
	<a href=".." style="font-size:80px;text-align:center;color:yellow;background:green;margin-right:100px">HOME</a>
        <a href="../automatico/" style="font-size:80px;text-align:center;color:yellow;background:green">AUTOMATICO</a>
	</body>
</div>

<p style="font-size:70px">
<?php

// Function PHP del pin GPIO17

	if ($_POST[ACCENSIONE]) {
	$a = exec("(sudo sh /var/www/html/rele/gpio/17/avvio.sh) > /dev/null 2>&1 &");
        echo "ULTIMA AZIONE(ACCENSIONE POMPA)";
	}

	if ($_POST[SPEGNIMENTO]) {
	$a = exec("sudo sh /var/www/html/rele/gpio/17/spegni.sh");
        echo "ULTIMA AZIONE(SPEGNIMENTO)";
	}

// Function del pin GPIO18

	if ($_POST[start]) {
	 $a- exec("(sudo sh /var/www/html/rele/gpio/17/avvioidro.sh) > /dev/null 2>&1 &");
	echo "ULTIMA AZIONE(ACCENSIONE IRRIGAZIONE)";
	}

	if ($_POST[stop]) {
	 $a- exec("sudo sh /var/www/html/rele/gpio/17/spegni.sh");
	echo "ULTIMA AZIONE(SPEGNIMENTO)";
	}

?>
</p>
</html>
