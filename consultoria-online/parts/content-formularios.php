<!-- Modal Proposta -->
<div class="reveal" id="animatedModal-proposta" data-reveal data-close-on-click="true" data-animation-in="fade-in" data-animation-out="fade-out">
	<div class="text-center p-t-30">
		<div id="solicite-uma-proposta-05a76c968748d68a3ba8"></div>
		<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
		<script type="text/javascript">
			new RDStationForms('solicite-uma-proposta-05a76c968748d68a3ba8-html', 'UA-70350867-1').createForm();
		</script>
		<button class="close-button" data-close aria-label="Close modal" type="button">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
</div>
		
<!-- Modal Contato -->
<div class="reveal" id="animatedModal-contato" data-reveal data-close-on-click="true" data-animation-in="fade-in" data-animation-out="fade-out">
	<div id="fale_conosco-89e2c01bee36dda6c9b0"></div>
	<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
	<script type="text/javascript">
		new RDStationForms('fale_conosco-89e2c01bee36dda6c9b0-html', 'UA-70350867-1').createForm();
	</script>
	<button class="close-button" data-close aria-label="Close modal" type="button">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
		
<!-- Modal Diagnostico -->
<div class="reveal" id="animatedModal-diagnostico" data-reveal data-close-on-click="true" data-animation-in="fade-in" data-animation-out="fade-out">
	<div class="text-center">
	<h4> Diagnóstico gratuito da <b>Consultoria On-Line</b> </h4>
	<small>Preencha corretamente os campos marcados</small></div><br>
	<form id="conversion-form" method="POST" action="https://www.rdstation.com.br/api/1.2/conversions">
		<input type="hidden" id="identificador" name="identificador" value="teste" />
		<input type="hidden" id="token_rdstation" name="token_rdstation" value="2673f1a2e0568e504a2e7cc6d571d683" />
		<div class="name-field">
			<label for="name">Nome* <small>obrigatório</small>
				<input name="name" type="text" required>
			</label>
		</div>
		<div class="email-field">
			<label for="email">Email* <small>obrigatório</small>
				<input name="email" type="email" required>
			</label>
		</div>
		<div class="empresa">
			<label>Empresa
				<input type="text">
			</label>
		</div>
		<div class="telefone">
			<label>Telefone
				<input type="text">
			</label>
		</div>
		<div class="cargo">
			<label>Qual o seu cargo/função?
			<select>
				<option value="">Selecione</option>
				<option value="ceo">CEO</option>
				<option value="diretor">Diretor </option>
				<option value="gerente">Gerente</option>
				<option value="coordenadorsupervisor">Coordenador-Supervisor</option>
				<option value="analista">Analista</option>
				<option value="estagiario">Estagiário</option>
				<option value="outros">Outros</option>
			</select>
			</label>
		</div>
		<div class="norma">
			<label>Qual norma estaria interessado?* <small>obrigatório</small>
			<select required>
				<option value="">Selecione</option>
				<option value="ISO9001">ISO9001</option>
				<option value="ISO14001">ISO14001</option>
				<option value="OHSAS18001">OHSAS 18001</option>
				<option value="ISO22000">ISO22000</option>
				<option value="outras">Outras</option>
			</select>
			</label>
		</div>
		<div class="necessidade">
			<label>Qual a sua necessidade?* <small>obrigatório</small>
			<select required>
				<option value="">Selecione</option>
				<option value="certificacao">Certificação</option>
				<option value="manutencao">Manutenção da certificação</option>
				<option value="migracao">Migração nova versão da norma</option>
				<option value="pesquisaestudo">Pesquisa-Estudo</option>
				<option value="outros">Outros</option>
			</select>
			</label>
		</div>
		<div class="text-center">
		<input type="submit" class="button" id="botao_form" value="Enviar"></input><br>
		<small>Prometemos não utilizar suas informações de contato para enviar qualquer tipo de SPAM.</small>
		</div>
	</form>
	<button class="close-button" data-close aria-label="Close modal" type="button">
		<span aria-hidden="true">&times;</span>
	</button>
</div>

<script type="text/javascript">
/* Google Code for Formulario de Contato Conversion Page
In your html page, add the snippet and call
goog_report_conversion when someone clicks on the
chosen link or button. */

  /* <![CDATA[ */
  goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = 949325272;
    w.google_conversion_label = "xu2mCPiz82oQ2JvWxAM";
    w.google_remarketing_only = false;
  }
  // DO NOT CHANGE THE CODE BELOW.
  goog_report_conversion = function(url) {
    goog_snippet_vars();
    window.google_conversion_format = "3";
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  }
  var conv_handler = window['google_trackConversion'];
  if (typeof(conv_handler) == 'function') {
    conv_handler(opt);
  }
}
/* ]]> */
</script>
<script defer src="//www.googleadservices.com/pagead/conversion_async.js"></script>
<script type ='text/javascript' src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>
<script type="text/javascript">
    var form = jQuery('#conversion-form');

    form.on('submit', function(ev) {
      var inputs = form.find(':input');

      RdIntegration.post(inputs.serializeArray());
    });
</script>