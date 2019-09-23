<?php
	include "inicializacao.php";
	
	$raiz = "";
	
	include "inc/cabecalho.php";
	include "inc/estilo_interna.php";
	include "inc/topo.php";
	include "inc/estrutura.php";

	//pegando as noticias
	$url = simplexml_load_file($local_url . $local_site . "noticia/xml/");
?>

                    <div class="titulo">
                        <span class="texto">Notícias</span>
                    </div>
                    <?php include "inc/acessibilidade.php"; ?>
                    
					<div id="interna_noticias">
<?
	$verifica_not = $url->item[0]->id;

	if ($verifica_not) {
?>
                    	<ul>
<?
		$cont = 0;
		foreach ( $url->item as $item ) {
			if ($cont < 30) {
				//dados das noticias
				$data = strftime("%d/%m/%Y", strtotime($item->data));
				$titulo = $item->titulo;
				$id = $item->id;
?>
                            <li class="tamanho_fonte">
                                <a href="noticia.php?id=<?=$id?>" >
                                    <span class="destaque"><?=$data?></span> - <?=$titulo?>
                                </a>
                            </li>
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
                    	<p class="tamanho_fonte"><i>Nenhuma not&iacute;cia encontrada!</i></p>
<?
	}
?>
					</div>

<?php
	include "inc/coluna_direita.php";
	include "inc/rodape.php";
?>