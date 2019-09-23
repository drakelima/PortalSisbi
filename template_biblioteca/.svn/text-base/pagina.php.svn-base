<?php
	include "inicializacao.php";
	
	$raiz = "";
	
	//verifica se GET do conteudo da pagina foi setado
	if (isset($_GET['a']) and $_GET['a'] != '')
		$pagina = $_GET['a'];
	else {
		header("location: index.php");
		exit;
	}
		
	include "inc/cabecalho.php";
	include "inc/estilo_interna.php";
	include "inc/topo.php";
	include "inc/estrutura.php";
	
	//pegando o conteudo da pagina
	$url = $local_url . $local_site . "secao/xml/".$pagina;

	foreach (simplexml_load_file($url)->item as $item) {
		$titulo = $item->titulo;
		$texto = $item->descricao;
	}	
?>
				<div id="esquerda_i">
					<div class="corpo">
                    	<span class="titulo_n"><?=$titulo?></span>
                        <p><?=$texto?></p>
                    </div>
                </div>


<?
	include "inc/coluna_direita.php";
	include "inc/rodape.php";
?>