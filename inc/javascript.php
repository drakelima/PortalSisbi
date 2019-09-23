<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script type="text/javascript" src="js/jquery.tools.min.js"></script>

<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="js/acessibilidade.js"></script>

<!-- Validações -->
<script type="text/javascript" src="js/validacao.js"></script>

<!-- Js fonts -->
<script type="text/javascript" src="<?=$raiz?>js/jquery.fontsize.js"></script>

<script type="text/javascript">
		$(document).ready( function() {
			//formata fonte
			fontSize('.acessibilidade', '.tamanho_fonte', 9, 10, 16);
			
			$('#slider').nivoSlider({
				effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
				animSpeed: 500, // Slide transition speed
				pauseTime: 3000, // How long each slide will show
				startSlide: 0, // Set starting Slide (0 index)
				directionNav: false, // Next & Prev navigation
				controlNav: true, // 1,2,3... navigation
				randomStart: true, // Start on a random slide
			});
			
			// initialize scrollable
			$("#nacionais").scrollable();
			$("#locais").scrollable();
			
			$("#destaque").scrollable({ vertical: true });
			
		});
	</script>