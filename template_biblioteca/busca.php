<?php
	include "inicializacao.php";
	
	$raiz = "";
	
	include "inc/cabecalho.php";
	include "inc/estilo_interna.php";
	include "inc/topo.php";
	include "inc/estrutura.php";
	
	if (!isset($_POST['input_busca']) || $_POST['input_busca'] == "Pesquisar") {
		header("location: index.php");
		exit;
	} else {
		$chave = $_POST['input_busca'];	
?>
		<!-- Google search -->
        <script src="http://www.google.com.br/jsapi" type="text/javascript"></script>
		<script type="text/javascript"> 
            google.load('search', '1', {language : 'pt-BR', style : google.loader.themes.GREENSKY});
            google.setOnLoadCallback(function() {
                var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
					'003075121585300769612:pd9u0o21jpc', customSearchOptions);
                customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
                customSearchControl.draw('cse');
				customSearchControl.execute('<?=$chave?>');
			}, true);
		</script>

		<!-- Estilo busca (google) -->
		<link rel="stylesheet" href="css/busca.css" type="text/css" />
<?
	}
?>   
				<div id="esquerda_i">
					<div class="corpo">
						<span class="titulo">Busca</span>
                        <div id="cse" class="cse">Carregando a busca</div>
                    </div>    
				</div>

<?
	include "inc/coluna_direita.php";
	include "inc/rodape.php";
?>