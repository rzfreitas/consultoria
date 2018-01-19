<div class="bg-cinza p-t-50 p-b-50 p-t-c p-b-c" id="planos-post">
	<div class="row columns">
		<h2>Escolha um plano para migrar:</h2> <br>
		<h3>1° Passo - escolha a norma</h3>
	</div>	
	<div id="PlanoNorma" class="row row-eq-height">
		<div class="large-3 columns quadro no-p">
			<p>ISO 9001</p>
			<button class="selection" id="9" onclick="javascript: getProductDetails(2);">SELECIONAR</button>
		</div>
		<div class="large-3 columns quadro no-p">
			<p>ISO 14001</p>
			<button class="selection" id="14" onclick="javascript: getProductDetails(3);">SELECIONAR</button>
		</div>											
	</div>

	<div class="row columns">
		<h3>2° Passo - escolha o tamanho da sua empresa</h3>
	</div>
	<div id="PlanoPorteEmpresa" class="row columns row-eq-height p-b-50 p-b-c">		
	</div>
	<div class="row columns row-eq-height parcelas">
		<div class="large-7 columns">
			<span class="num-parc">PARCELAS</span> <br> em até 12x <div id="PlanosPrecos"></div> <br>			
			<strong>HORA(S):</strong> <div id="PlanosHoras"></div>
		</div>
		<div class="large-5 columns p-t-c">
			<div class="btn-contratar v-center">
				<button onclick="javascript:redirect_loja();">CONTRATAR</nutton>
			</div>
		</div>						
	</div>
</div>

