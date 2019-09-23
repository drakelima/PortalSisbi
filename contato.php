<?php
	include "inicializacao.php";
	
	$raiz = "";
	
	include "inc/cabecalho.php";
	include "inc/estilo_interna.php";
	include "inc/topo.php";
	include "inc/estrutura.php";
	
	if (isset($_POST['cp_nome'])) {

		// Pegar dados do $_POST
		$nome = $_POST['cp_nome'];
		$email = $_POST['cp_email'];
		$assunto = $_POST['cp_assunto'];

		$mensagem = "<strong>Assunto: ".$assunto."</strong><br /><br />".$_POST['cp_mensagem'];

		// E-mail para o envio
		$destino = $email_sisbi;

		$assunto_externo = "[SISBI] Contato do site";

		// Enviar o e-mail
		if (mail($destino, $assunto_externo, $mensagem, "Content-type: text/html; charset=utf-8\r\nFrom: $nome <$email>\r\n")) {
			header("Location: contato.php?msg=1");
		} else {
			header("Location: contato.php?msg=2");
		}

		exit;
	}
?>
						<div class="titulo">
							<span class="texto">Contato</span>
                        </div>
                        <?php include "inc/acessibilidade.php"; ?>
                        
						<div id="contato">
							<p  class="tamanho_fonte">
								Se deseja entrar em contato conosco para obter mais informações, esclarecer alguma dúvida ou fazer sugestões, utilize os dados abaixo ou preencha o formulário.<br /><br />
								<strong class="tamanho_fonte">Telefones:</strong> +55 (84) 3215-3841<br />
								<strong class="tamanho_fonte">E-mail:</strong> <a href="mailto:<?=$email_sisbi?>"><?=$email_sisbi?></a>
							</p>
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

							<form id="form_contato" name="form_contato" method="post" action="contato.php">
								<span class="area_campo">
									<label accesskey="1">Nome:</label>
									<input type="text" id="cp_nome" name="cp_nome" value="" />
								</span>

								<span class="area_campo">
									<label for="name" accesskey="2" class="padding-topo">E-mail:</label>
									<input type="text" id="cp_email" name="cp_email" value="" onchange="validaEmail(this)" />
								</span>

								<span class="area_campo">
									<label accesskey="3" class="padding-topo">Assunto:</label>
									<input type="text" id="cp_assunto" name="cp_assunto" value="" />
								</span>

								<span class="area_campo_maior">
									<label for="name" accesskey="4" class="padding-topo">Mensagem:</label>
									<textarea id="cp_mensagem" name="cp_mensagem" ></textarea>
								</span>

								<span class="area_botoes">
									<button type="button" onclick="verifContato()">Enviar</button>
									<button type="reset">Limpar</button>
								</span>
							</form>
						</div>	                        
<?php
	include "inc/coluna_direita.php";
	include "inc/rodape.php";
?>