<?php
	include "inicializacao.php";
	
	$raiz = "";
	
	if (isset($_GET['id']) and $_GET['id'] != '')
		$id = $_GET['id'];
	else {
		header("location: documentos.php");
		exit;
	}
		
	include "inc/cabecalho.php";
	include "inc/estilo_interna.php";
	include "inc/topo.php";
	include "inc/estrutura.php";
	
	//setando o xml dos documentos da categoria selecionada
	$xml_documento = simplexml_load_file($local_url . $local_site . "documento/xml/".$id);

	$verifica = $xml_documento->item[0];
	
	
?>
				<div id="esquerda_i">
					<div class="corpo">
                    	<span class="titulo_n">Documentos</span>
<?
	if ($verifica) {
		$titulo_categoria = $verifica->tituloPai;
?>
						<h3><?=$titulo_categoria?></h3> 
<?
	}
?>                        
                        <p>Veja abaixo os documentos dispon&iacute;veis da categoria selecionada.</p><br>                	
<?
	if ($verifica) {
?>
						<ul>
<?
		foreach ( $xml_documento->item as $link ) {
			//dados das categorias/documentos
			$id_sub = $link->id;
			$titulo_sub = $link->titulo;
			$arquivo_sub = $link->linkArquivo;
?>
							<li>
<?
			if ($arquivo_sub == 'null' || $arquivo_sub == NULL) {
?>
				<a title="<?=$titulo_sub?>" href="documento.php?id=<?=$id_sub?>"><label> </label><?=$titulo_sub?></a>                            
<?
			} else {
?>                            
                <a title="<?=$titulo_sub?>" href="<?=$arquivo_sub?>" target="_blank"><label> </label><?=$titulo_sub?></a>             
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
                            <em>Nenhum documento foi encontrado nesta categoria.</em>
                            <br />
                            <br />
						</p>
<?
	}
?>
                            <div class="voltar">
                                <a href="javascript:history.back()">
                                    <span>« Voltar</span>
                                </a>
                            </div>
					</div>
				</div>
<?
	include "inc/coluna_direita.php";
	include "inc/rodape.php";
?>