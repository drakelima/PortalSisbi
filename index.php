<?php
	include "inicializacao.php";
	
	$raiz = "";
	
	include "inc/cabecalho.php";
	include "inc/topo.php";
	include "inc/estrutura.php";
	
	//pegando as noticias
	$xml_noticias = simplexml_load_file($local_url . $local_site . "noticia/xml/");
	
	//pegando as fotos das bibliotecas
	$xml_galeria = simplexml_load_file($local_url . $local_site . "galeria/xml/11142782");		
?>

					<div id="area_animacao">
						<div id="slider" class="nivoSlider">
<?
	$verifica_galeria = $xml_galeria->item[0]->id; //variavel de verificacao

	if ($verifica_galeria) {

		$cont = 0;
		foreach ($xml_galeria->item as $item) {
			//dados do album e suas fotos
			$id = $item->id;
			$titulo = $item->titulo;
			$img = $item->linkImagemGrd;

?>
                            <img src="<?=$img?>" title='#htmlcaption<?=$cont?>' />
<?
				$cont++;
			}
?>
						</div>
<?
		$cont = 0;
		foreach ($xml_galeria->item as $item) {
			$titulo = $item->titulo;
?>
                            <div id="htmlcaption<?=$cont?>" class="nivo-html-caption">
                                <span><?=$titulo?></span>
                            </div>
<?
			$cont++;
		}	
	}
?>                                   
					</div>
                    
					<div id="noticias">
                        <strong>Últimas Notícias</strong>
<?
	//verifica se ha noticias cadastradas
	$verifica = $xml_noticias->item[0];
	if ($verifica) {
?>                        
                        <div id="list-noticia">
                            <ul>                        
<?
		//lista as 5 primeiras
		for ($i = 0; $i < 4; $i++) {
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
                                <li>
                                	<a href="noticia.php?id=<?=$id_noticia?>">
                                    	<label class="data"><?=$data?> - </label> <?=$titulo_noticia?>
                                    </a>
                                </li>
                                
<?
			} else
				break;
		}
?>                                       
                                
                                
                            </ul>
                        </div>
                        <div class="mais"><a href="noticias.php">mais notícias</a></div>
<?
	} else {
?>
						<p><br /><i>Nenhuma not&iacute;cia foi encontrada no momento.</i><br /></p>
<?
	}
?>                       
					</div>

<?
	include "inc/parceiros.php";
	include "inc/rodape.php";
?>