<html>
	<head>
	<title>AUTOMATICO</title>
	</head>
	<body background="lumache2.jpg">

 	<!--GPIO17-->
	<form action="" method="post">
	<p style="font-size:100px;text-align:center;color:white">AUTOMATICO</p>
  
    <div style="text-align:center">
	<input class="input" type="submit" name="DUECICLI" value="DUE CICLI" style="font-size:50px;background:rgba(0, 222, 255, 0.3);padding:70px">
    
    	 <input type="submit" name="TRECICLI" value="TRE CICLI" style="font-size:50px;background:rgba(0, 222, 255, 0.3);padding:70px">
    
        <input type="submit" name="QUATTROCICLI" value="QUATTRO CICLI" style="font-size:50px;background:rgba(0, 222, 255, 0.3);padding:70px">

         <input type="submit" name="CINQUECICLI" value="CINQUE CICLI" style="font-size:50px;background:rgba(0, 222, 255, 0.3);padding:70px">

        <input type="submit" name="SEICICLI" value="SEI CICLI" style="font-size:50px;background:rgba(0, 222, 255, 0.3);padding:70px">
<br/>
        <input type="submit" name="STOP" value="SPEGNIMENTO" style="font-size:50px;background:rgba(0, 222, 255, 0.3);padding:70px 300px">
</div>
        </form>
	<br/>
<div style="text-align:center">
    <a href=".." style="font-size:80px;color:yellow;background:green;margin-right:100px">HOME</a>
    <a href="../manuale/" style="font-size:80px;color:yellow;background:green">MANUALE</a>
</div>
	</body>


<p style="font-size:70px">
<?php

// Function PHP del pin GPIO17

	if ($_POST[DUECICLI]) {
	$a = exec("(sudo sh /var/www/html/rele/gpio/17/ciclo2botti.sh) > /dev/null 2>&1 &");
        echo "ULTIMA AZIONE(DUECICLI)";
	}

	if ($_POST[TRECICLI]) {
	$a = exec("(sudo sh /var/www/html/rele/gpio/17/ciclo3botti.sh) > /dev/null 2>&1 &");
        echo "ULTIMA AZIONE(TRECICLI)";
	}


	if ($_POST[QUATTROCICLI]) {
	 $a = exec("(sudo sh /var/www/html/rele/gpio/17/ciclo4botti.sh) > /dev/null 2>&1 &");
        echo "ULTIMA AZIONE(QUATTROCICLI)";
	}

	if ($_POST[CINQUECICLI]) {
	 $a = exec("(sudo sh /var/www/html/rele/gpio/17/ciclo5botti.sh) > /dev/null 2>&1 &");
        echo "ULTIMA AZIONE(CINQUECICLI)";
	}

        if ($_POST[SEICICLI]) {
	 $a = exec("(sudo sh /var/www/html/rele/gpio/17/ciclo6botti.sh) > /dev/null 2>&1 &");
        echo "ULTIMA AZIONE(SEICICLI)";
	}

        if ($_POST[STOP]) {
	 $a = exec("(sudo sh /var/www/html/rele/gpio/17/spegni.sh) > /dev/null 2>&1 &");
	echo "ULTIMA AZIONE(SPEGNIMENTO)";
	}
?>
</p>
</html>
