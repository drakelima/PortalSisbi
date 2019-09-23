<?php
	include "inicializacao.php";	
	
	$raiz = "";
	
	//verifica se existe o ID da noticia
	if (isset($_GET['id']) or $_GET['id'] != '')
		$id = $_GET['id'];
	else {
		header("location: noticias.php");
		exit;
	}
	
	include "inc/cabecalho.php";
	include "inc/estilo_interna.php";
	include "inc/topo.php";
	include "inc/estrutura.php";
	
	//pega os dados da notícia
	foreach (simplexml_load_file($local_url . $local_site . "noticia/xml/".$id)->item as $item) {
		$data = strftime("%d/%m/%Y &agrave;s %H:%M", strtotime($item->data));
		$titulo = $item->titulo;
		$descricao = $item->descricao;
		$imagem = $item->imagem;
		$imagem_p = $item->imagemp;
		$legenda = $item->legenda;
		$fonte = $item->fonte;
		$dia = strftime("%d", strtotime($item->data));
		$mes = strftime("%m", strtotime($item->data));
		$ano = strftime("%Y", strtotime($item->data));

		if ($imagem_p != 'null' and $imagem_p != NULL)
			$area_img = $imagem_p;
		else if ($imagem != 'null' and $imagem != NULL)
				$area_img = $imagem;
			else
				$area_img = '';

		if ($legenda != 'null' and $legenda != NULL) {
			if ($fonte != 'null' and $fonte != NULL)
				$texto_legenda = $legenda . "<br>(Foto: " . $fonte . ")";
			else
				$texto_legenda = $legenda;
		} else
			$texto_legenda = '';

		$titulo_a = $item->tituloAnexo;
		$anexo = $item->anexo;

		if ($anexo != 'null' and $anexo != NULL) {
			if ($titulo_a != 'null' and $titulo_a != NULL)
				$texto_anexo = $titulo_a;
			else
				$texto_anexo = 'Clique aqui para baixar!';
		} else
			$texto_anexo = '';
	}
?>                    
                            <div class="titulo">
                            	<span class="texto"><?=$titulo?></span>
                            </div>
                            <?php include "inc/acessibilidade.php"; ?>

                            
						<div id="pagina" class="tamanho_fonte">
                            <span class="data-noticia tamanho_fonte">
                            	<?=$dia." de ".$meses[$mes].", ".$ano?>
                            </span>
                        
                            
<?
	if ($area_img != '') {
?>                    
    						<span class="img-pagina aumenta">
                            	<a href="<?=$imagem?>" title="<?=$titulo?>">
                                    <img src="<?=$area_img?>" title="Clique aqui para ampliar a imagem!" />
                                </a>    
                                
<?
		if ($texto_legenda != '') {
?>                                
                            	<span class="legenda-foto tamanho_fonte"><?=$texto_legenda?></span>
                                
<?
		}
?>
							</span>
<?		
	}
?>	                       
                            <p class="tamanho_fonte"><?=$descricao?></p>
                            
<?
	if ($texto_anexo != "") {
?>                         
                            <p class="tamanho_fonte">
                            	<br />
                            	<strong>Arquivo em anexo:</strong> <a href="<?=$anexo?>" title="Baixe aqui o arquivo!" target="_blank"><?=$texto_anexo?></a>
							</p>
                            
<?
	}
?>

                            <br />
                            <div class="rodape-interna"> 
                                <a href="javascript:history.back()">
                                    <span class="voltar" >
                                        <img src="img/voltar.png"> <label class="tamanho_fonte">Voltar</label>
                                    </span>
                                </a>
                            </div>
                            
                       </div>


<?php
	include "inc/coluna_direita.php";   
	include "inc/rodape.php";
?>