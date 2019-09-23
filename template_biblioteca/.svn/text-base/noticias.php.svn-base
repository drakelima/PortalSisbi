<?php
	include "inicializacao.php";
	
	$raiz = "";
	
	include "inc/cabecalho.php";
	include "inc/estilo_interna.php";
	include "inc/topo.php";
	include "inc/estrutura.php";
	
	//pegando as noticias
	$xml_noticias = simplexml_load_file($local_url . $local_site . "noticia/xml/");
?>
				<div id="esquerda_i">
					<div class="corpo">
						<span class="titulo">Notícias</span>
                        <p>Veja abaixo as notícias disponíveis:</p>
<?
	$verifica = $xml_noticias->item[0];
	if ($verifica) {
?>   
						<ul>
<?
		//lista as 30 primeiras
		$cont = 0;
		foreach ( $xml_noticias->item as $item ) {
			if ($cont < 30) {
				//dados das noticias
				$data = strftime("%d/%m/%Y", strtotime($item->data));
				$titulo = $item->titulo;
				$id = $item->id;
?>                        
							<li class="tamanho_fonte"><a href="noticia.php?id=<?=$id?>"><span class="tamanho_fonte"><span class="l_data"><?=$data?></span> - <?=strlen($titulo)>80?substr($titulo, 0, 80).'...':$titulo?></span> </a></li>
<?
				$cont++;
			} else
				break;
		}
?>                        
						</ul>
<?
	} else {
?>                        
						<p class="tamanho_fonte">
                        	<br />
                        	<em>Nenhuma not&iacute;cia foi encontrada no momento.</em>
						</p>
<?
	}
?>                                            
                    </div>
               </div>




<?
	include "inc/coluna_direita.php";
	include "inc/rodape.php";
?>