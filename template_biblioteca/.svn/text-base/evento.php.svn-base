<?php
	include "inicializacao.php";
	
	$raiz = "";
	
	if (isset($_GET['id']) or $_GET['id'] != '')
		$id = $_GET['id'];
	else {
		header("location: eventos.php");
		exit;
	}
	
	include "inc/cabecalho.php";
	include "inc/estilo_interna.php";
	include "inc/topo.php";
	include "inc/estrutura.php";

	foreach (simplexml_load_file($local_url . $local_site . "evento/xml/".$id)->item as $item) {
		$titulo = $item->titulo;
		$descricao = $item->descricao;
		$dataI = strftime("%d/%m/%Y", strtotime($item->dataInicio));
		$dataF = strftime("%d/%m/%Y", strtotime($item->dataFim));

		if ($dataF != $dataI)
			$periodo = $dataI." a ".$dataF;
		else
			$periodo = $dataI;

		$local = $item->local;
		$email = $item->email;
		$telefone = $item->telefone;
		$site = $item->site;
		$links = $item->outrasUrls;
		$imagem = $item->imagem;

		$titulo_a = $item->nomeArquivo;
		$arquivo = $item->arquivo;

		if ($arquivo != 'null' and $arquivo != NULL) {
			if ($titulo_a != 'null' and $titulo_a != NULL)
				$texto_arquivo = $titulo_a;
			else
				$texto_arquivo = 'Clique aqui para baixar!';
		} else
			$texto_arquivo = '';
	}
?>
				<div id="esquerda_i">
					<div class="corpo">
                    
                    	 <span class="titulo_n"><?=$titulo?></span>
<?
	if ($imagem != 'null') {
?>           
						<div class="a_imagem">         
                            <span class="imagem aumenta">
                                <a href="<?=$imagem?>" title="<?=$titulo?>">
                                    <img src="<?=$imagem?>" title="Clique para ampliar a imagem!" />
                                </a>
                            </span>
                        </div>
<?
	}
?>
                           <div class="dados">
                                    <ul>
                                        <li>
                                            <strong>Período:</strong> <?=$periodo?>
                                        </li>
<?
	if ($local != '') {
?>
                                         <li>
                                            <strong>Local:</strong> <?=$local?>
                                         </li>
<?
	}
	if ($telefone != '') {
?>
                                          <li>
                                             <strong>Telefone(s):</strong> <?=$telefone?>
                                          </li>
<?
	}
	if ($email != '') {
?>                                        <li>
                                            <strong>E-mail:</strong> <a href="mailto:<?=$email?>"><?=$email?></a>                                  
                                       	  </li>
<?
	}
	if ($site != '') {
?>                                          
                                        <li>
                                            <strong>Site:</strong> <a href="<?=$site?>" target="_blank"><?=$site?></a>                                
                                        </li>
<?
	}
	if ($texto_arquivo != '') {
?>                                        <li>
                                            <strong>Arquivo em anexo:</strong> <a href="<?=$arquivo?>" title="Baixe aqui o arquivo!" target="_blank"><?=$texto_arquivo?></a>                               
                                        </li>
<?
	}
	if ($links != '' and $links != 'null') {
?>                                        <li>
                                            <strong>Outras URL's:</strong> <?=$links?>                            
                                        </li>
<?
	}
?>                                    </ul>
                                </div>
                                    
                        <div class="descricao"><?=nl2br($descricao)?></div>
                            
                        <? include "inc/rodape_interna.php"?>             
                    </div>
				</div>
<?
	include "inc/coluna_direita.php";
	include "inc/rodape.php";
?>