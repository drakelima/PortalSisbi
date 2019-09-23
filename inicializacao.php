<?php
	//error_reporting(0);

	ob_start();
	
	global $raiz, $local_url, $local_site, $meses, $email_sisbi, $webmail;
	
	$local_url = "http://www.sistemas.ufrn.br/gerenciadorportais/public/";
	$local_site = "sisbi/";
	
	//meses escritos
	$meses = array('01' => 'Janeiro', '02' => 'Fevereiro', '03' => 'Março', '04' => 'Abril', '05' => 'Maio', '06' => 'Junho', '07' => 'Julho', '08' => 'Agosto', '09' => 'Setembro', '10' => 'Outubro', '11' => 'Novembro', '12' => 'Dezembro');
	
	$email_sisbi = "bcdir@bczm.ufrn.br"; //envio do formulario

	$webmail = "http://www.bczm.ufrn.br/webmail/";
?>