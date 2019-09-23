<?php
	include "inicializacao.php";
	
	$raiz = "";
		
	include "inc/cabecalho.php";
	include "inc/estilo_interna.php";
	include "inc/topo.php";
	include "inc/estrutura.php";
	
	//pegando os eventos
	$xml_eventos = simplexml_load_file($local_url . $local_site . "evento/xml/");
?>
				<div id="esquerda_i">
					<div class="corpo">
                    	<span class="titulo_n">Eventos</span>
                        <p>Selecione abaixo um dos eventos para visualizar mais informações:</p>
                        
<?
	$verifica_eventos = $xml_eventos->item[0]->id; //variavel de verificacao

	if ($verifica_eventos) {
?>                        
						
                        <ul class="listagem-evento">
<?                  
			$cont = 1;
			$temp_mesAno = "";
			foreach( $xml_eventos->item as $item ) {      
				//dados dos eventos
				$id = $item->id;
				$mes = strftime("%m", strtotime($item->dataInicio));
				$ano = strftime("%Y", strtotime($item->dataInicio));
				$ver_mesAno = $meses[$mes]." - ".$ano;
		
				$dataI = strftime("%d/%m", strtotime($item->dataInicio));
				$dataF = strftime("%d/%m", strtotime($item->dataFim));
		
				if ($dataF != $dataI)
					$periodo = 'De '.$dataI." a ".$dataF;
				else
					$periodo = $dataI;
		
				$titulo = $item->titulo;
		
				if ($temp_mesAno != $ver_mesAno) {
					$temp_mesAno = $ver_mesAno;    
					
					if ($cont > 1) {
?>
								</ul>
							</li>
<?
					}
?>
							<li class="li-listagem">
                                <h3 class="tamanho_fonte"><?=$ver_mesAno?></h3>
                                <ul class="agenda">
<?
				}
?>                                    
                                    <li>
                                        <a href="evento.php?id=<?=$id?>" title="<?=$titulo?>">
                                            <span class="l_data tamanho_fonte"><?=$periodo?></span>   -
                                            <span class="tamanho_fonte">
                                               <?=$titulo?>
                                            </span>
                                        </a>
									</li>
<?
			$cont++;
		}

		if ($cont > 1) {
?>                                          
								</ul>   
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
                            <em>Nenhum evento foi encontrado no momento.</em>
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