				<div id="direita">
					<div class="busca">
						<div class ="t_busca">Busca</div>
						<div id="f_busca">
                        	<form id="form_busca" action="busca.php" method="post">
                                <fieldset id="search">
                                    <input value="Pesquisar" id="input_busca" name="input_busca" type="text" onFocus="limpaCampo(this, 'Pesquisar')" onBlur="preencheCampo(this, 'Pesquisar')" />
                                    <input type="button" name="" id="searchsubmit" title="Buscar" onClick="verifBusca()" />
                                </fieldset>
                            </form>
						</div>
					</div>
					<div class="enquete">
						<div class="t_enquete">Enquete</div>
<?
	//endereco da enquete
	$url_iframe = $local_url . $local_site . "enquete/";
?>
                        	<iframe scrolling="auto" frameborder="0" width="100%" height="171px" src="<?=$url_iframe?>">
                    		</iframe>  
                        	
                        <!--
						<h1>Lorem ipsum dolor sit amet, lorem ipsum dolor sit amet, lorem ipsum dolor sit amet?</h1>
						<form id="formEnqueteVotacao">
							<table>
								<tr>
									<td>
										<input type="radio" name="enquete"/> <label>Item 1</label>
									</td>
								</tr>
								<tr>
									<td>
										<input type="radio" name="enquete"/> <label>Item 2</label>
									</td>
								</tr>
								<tr>
									<td>
										<input type="radio" name="enquete"/> <label>Item 3</label>
									</td>
								</tr>
								
							</table>
							<input id="bt_votar" type="submit" value="Votar" name="bt_votar">
						</form>   
                         -->
						
					</div>
					<div class="redes_sociais">
						<div class= "t_rede_s">Redes Sociais</div>
						<div class="icones">
							<span class="icon"><a href="#"><img src="img/facebook.png" title="Facebook"></a></span>
							<span class="icon"><a href="#"><img src="img/twitter.png" title="Twitter"></a></span>
							<span class="icon"><a href="#"><img src="img/flickr.png" title="Flickr"></a></span>
							<span class="ultimo"><a href="#"><img src="img/rss.png" title="RSS"></a></span>
						</div>
					</div>
				</div>