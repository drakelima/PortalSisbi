<?php
	include "inicializacao.php";
	
	$raiz = "";
	
	include "inc/cabecalho.php";
	include "inc/estilo_interna.php";
	include "inc/topo.php";
	include "inc/estrutura.php";
	
	//setando o xml dos documentos (na raiz)
	$xml_documentos = simplexml_load_file($local_url . $local_site . "documento/xml/");
?>
				<div id="esquerda_i">
					<div class="corpo">
						<span class="titulo_n">Documentos</span>
                        <p>Veja abaixo os documentos disponíveis:</p>
                        
<?
	$verifica = $xml_documentos->item[0];
	if ($verifica) {
?>                        
                        <ul>
<?
		foreach ( $xml_documentos->item as $link ) {
			//dados das categorias/documentos
			$id = $link->id;
			$titulo_link = $link->titulo;
			$arquivo = $link->linkArquivo;
?>                        
                            <li>
<?
			if ($arquivo == 'null' || $arquivo == NULL) {
?>                            
                            	<a title="<?=$titulo_link?>" href="documento.php?id=<?=$id?>"><label> </label><?=$titulo_link?></a>
 
<?
			} else {
?>
								<a title="<?=$titulo_link?>" href="<?=$arquivo?>" target="_blank"><label> </label><?=$titulo_link?></a>
                                
<?
			}
?>                                                            
                            </li>
<?
		}
?>
						</ul>
<?
	} else {
?>
						<p class="tamanho_fonte">
                        	<br />
                        	<em>Nenhum documento foi encontrado no momento.</em>
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