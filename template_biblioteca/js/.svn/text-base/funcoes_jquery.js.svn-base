/*
*	Arquivo para as funcoes jquery
*	Autor(a): Andressa Kroeff Pires
*	Contato: andressa@info.ufrn.br
*	Data de criacao: 30/03/2011
*/

var abaAtual = 0;

mudarAba = function(numeroAba) {
	if (abaAtual == numeroAba) {
		/*$("#oculta_"+numeroAba).hide();*/
		$("#link_"+numeroAba).removeClass("on");
		$("#aba_"+numeroAba).slideUp("slow");
		abaAtual = 0;

	} else {
		if (abaAtual != 0) {
			/*$("#oculta_"+abaAtual).hide();*/
			$("#link_"+abaAtual).removeClass("on");
			$("#aba_"+abaAtual).hide();
		}

		/*$("#oculta_"+numeroAba).show();*/
		$("#link_"+numeroAba).addClass("on");
		$("#aba_"+numeroAba).slideDown("slow");
		abaAtual = numeroAba;
	}
}