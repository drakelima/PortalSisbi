<?php
	include "inicializacao.php";
	
	$raiz = "";
	
	include "inc/cabecalho.php";
	include "inc/estilo_interna.php";
	include "inc/topo.php";
	include "inc/estrutura.php";
	
		echo $_POST['nome'];
		echo $_POST['email'];
		echo $_POST['assunto'];
		echo $_POST['mensagem'];
		
	
	if (isset($_POST['nome'])) {

		// Pegar dados do $_POST
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$assunto = $_POST['assunto'];

		$mensagem = "<strong>Assunto: ".$assunto."</strong><br /><br />".$_POST['mensagem'];

		// E-mail para o envio
		$destino = $email_sisbi;

		$assunto_externo = "[BCZM] Contato do site";
		
		// Enviar o e-mail
		if (mail($destino, $assunto_externo, $mensagem, "Content-type: text/html; charset=utf-8\r\nFrom: $nome <$email>\r\n")) {
			header("Location: contato.php?msg=1");
		} else {
			header("Location: contato.php?msg=2");
		}

		exit;
		
	}	
?>
				<div id="esquerda_i">
					<div class="corpo">
						<span class="titulo">Contato</span>
						<p><b>Telefone:</b> (00) 0000-0000</p>
						<p><b>E-mail:</b> bcdir@bczm.ufrn.br</p>
						<p>Ultilize este formulário para entrar em contato conosco.</p>
                        
<?
						if (isset($_GET["msg"]) and ($_GET["msg"] > 0 and $_GET["msg"] < 3)) {

							//mensagens de envio
							$texto = array(
								1 => 'Mensagem enviada com sucesso!',
								2 => 'Erro ao enviar a mensagem. Por favor tente mais tarde!'
							);
?>
						<div id="mensagem_envio_erro" class="tamanho_fonte">
                                <b>*</b> <?=$texto[$_GET["msg"]]?>
                         </div>                        
<?
						}
?>                        
						<div class="formulario">
							<form id="formContato" action="contato.php" method="post" name="formContato">
                                   <fieldset>
                                        <label for="nome">Nome:</label>
                                        <input type="text" id="nome" name="nome" value="" /> 
                                        
                                        <label for="email">Email:</label>
                                        <input type="text" id="email" name="email" value="" onchange="validaEmail(this)" /> 
                                   
                                        <label for="assunto">Assunto:</label>
                                        <input type="text" id="assunto" name="assunto" value="" /> 
                                        
                                        <label for="mensagem">Mensagem:</label> 
                                        <textarea id="mensagem" name="mensagem"></textarea>
                                        
                                        <button type="button" onclick="verifContato()">Enviar</button>
                                        <input type="reset" value="Limpar">
                                   </fieldset> 
                            </form>
						</div>
					</div>
                </div>

<?
	include "inc/coluna_direita.php";
	include "inc/rodape.php";
?>