<?php
	include "inicializacao.php";
	
	$raiz = "";
	
	include "inc/cabecalho.php";
	include "inc/topo.php";
	include "inc/estrutura.php";
	
	//pegando as noticias
	$xml_noticias = simplexml_load_file($local_url . $local_site . "noticia/xml/");	
	
	//pegando os primeiros eventos
	$url_evento = simplexml_load_file($local_url . $local_site . "evento/xml/");
	
	//pegando os primeiros documentos 
	$url_documento = simplexml_load_file($local_url . $local_site . "documento/xml/");
?>
				<div id="esquerda">
					<div class="destaque">
<?
	//verifica se ha noticias cadastradas
	$verifica = $xml_noticias->item[0];
	if ($verifica) {
?>
						<ul id="noticias">
<?
	//destaques (5)
	for ($i = 0; $i <= 4; $i++) {
		$item_des = $xml_noticias->item[$i];

		if ($item_des) {
			//dados das noticias em destaque
			$id_des = $item_des->id;
			$tit_des = $item_des->titulo;
			$descricao_des = $item_des->descricao;
			$img_des = $item_des->imagem;
			$dia = strftime("%d", strtotime($item_des->data));
			$mes = strftime("%m", strtotime($item_des->data)); 
			$ano = strftime("%Y", strtotime($item_des->data));
?>                     
							<li class="d_conteudo">

                                    <a href="noticia.php?id=<?=$id_des?>">
                                        <span class="d_titulo"><?=strlen($tit_des)>100?substr($tit_des, 0, 100).'...':$tit_des?></span>
                                        <span class="d_data"><?=$dia.' de '.$meses[$mes].' de '.$ano?></span>
                                        <p>
<?
			if (($img_des != 'null' and $img_des != NULL)) {
?>
                                            <span class="d_imagem">
                                                <img src="<?=$img_des?>" />
                                            </span>
<?
				$descricao_des = substr($descricao_des, 0, 170).'...';
			}
?>                                        
                                        	<?=$descricao_des?>
                                        </p>
                                    </a>
								</li>
<?
		} else
			break;
	}
?>
						</ul>
<?
	} else {
?>
						<p><br /><i>Nenhuma not&iacute;cia foi encontrada no momento.</i><br /></p>
<?
	}
?> 

					</div>
                    
                    
					<div id="mais_noticias">
						<span class="titulo">Outras Notícias</span>
<?
	//verifica se ha noticias cadastradas
	$verifica = $xml_noticias->item[0];
	if ($verifica) {
?>   
						<ul>
<?
		//lista as 5 primeiras
		for ($i = 0; $i <= 4; $i++) {
			$item_noticia = $xml_noticias->item[$i];
	
			if ($item_noticia) {
	
				//dados das noticias em destaque
				$id_noticia = $item_noticia->id;
				$titulo_noticia = $item_noticia->titulo;
				$data = strftime("%d/%m/%Y", strtotime($item_noticia->data));
				
				if(strlen($titulo_noticia)>45){
					$titulo_noticia = substr($titulo_noticia, 0, 45)."...";	
				}
?>
							<a href="noticia.php?id=<?=$id_noticia?>">
								<li><span class="l_data"><?=$data?></span> - <?=$titulo_noticia?></li>
                            </a>

<?
			} else
				break;
		}
?>  						</ul>
						<div class="todas_n"><a href="noticias.php">todas as notícias</a></div>

<?
	} else {
?>
						<p><br /><i>Nenhuma not&iacute;cia foi encontrada no momento.</i><br /></p>
<?
	}
?>                    

					</div>
				</div>
                
				<div id="meio">
					<div id="outros_links">
						<span class="titulo">Reserva de Espaço</span>
						<ul>
							<li><a href="#">Auditório</a></li>
							<li><a href="#">Mini Auditório</a></li>
							<li><a href="#">Vídeoteca</a></li>
						</ul>
							
					</div> 
					<div id="outros_links">
						<span class="titulo">Acesso BCZM</span>
							<ul>
							<li><a href="#">Almoxarifado</a></li>
							<li><a href="#">HelpDesk</a></li>
							<li><a href="#">Webmail</a></li>
						</ul>
					</div>
					<div id="documentos">
						<span class="titulo">Documentos</span>
<?
	//verifica se ha documentos cadastradas
	$verifica = $url_documento->item[0];
	if ($verifica) {
?>   
						<ul>
<?
	//documentos os 5 primeiros
	for ($j = 0; $j < 5; $j++) {
		$item_doc = $url_documento->item[$j];

		if ($item_doc) {
			//dados das categorias/documentos
			$id_public = $item_doc->id;
			$titulo_public = $item_doc->titulo;
			$arquivo_public = $item_doc->linkArquivo;
?>                        
							<li>
<?
			if ($arquivo_public == 'null' || $arquivo_public == NULL) {
?>
                            	<a title="<?=$titulo_public?>" href="documento.php?id=<?=$id_public?>">
                                	<?=$titulo_public?>
                                </a>
<?
			}
?>
                            </li>
<?
		} else
			break;
	}
?>
						</ul>
						<div class="todos_m"><a href="documentos.php">todos os documentos</a></div>
<?
	}else{
?>
                                    <p><br /><i>Nenhum documento foi encontrada no momento.</i><br /></p>
<?
	}
?>
					</div>
				</div>

<?
	include "inc/coluna_direita.php";
	include "inc/rodape.php";
?>