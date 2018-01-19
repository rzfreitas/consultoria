jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

/*SCROLL TO TOP*/
jQuery(document).ready(function(){jQuery(window).scroll(function(){jQuery(this).scrollTop()>100?jQuery("#scroll").fadeIn():jQuery("#scroll").fadeOut()}),jQuery("#scroll").click(function(){return jQuery("html, body").animate({scrollTop:0},600),!1}),jQuery(".scrollTop").click(function(){return jQuery("html, body").animate({scrollTop:0},600),!1})});

/*Scroll to element*/
function scrollToElement(o,t){jQuery("html, body").animate({scrollTop:jQuery(o).offset().top+t+"px"},"fast")}

/* REDIRECIONA */
document.getElementById("botao_form").onclick = function (e) {
  e.preventDefault();

  var form = jQuery(e.target).closest('form'), data_array = form.find(':input').serializeArray(), b = jQuery(this);

  RdIntegration.post(data_array, function () {
    redirect(data_array);
    goog_report_conversion('http://consultoriaiso.org/');
  });
};

function getDataFromArray(array, name) {
  for (var i = 0; i < array.length; ++i) {
    if (array[i].name === name) {
      return array[i].value;
    }
  }
  return null;
}

function redirect(array) {

  var name = getDataFromArray(array, 'name');
  var email = getDataFromArray(array, 'email');

  alert("Obrigado! Você está sendo direcionado para a plataforma de Consultoria On-Line...");

  window.location = 'https://portal.sgionline.com.br/ra?name=' + name + "&email=" + email + "&data=TEST DRIVE FLOW";

  return false;

}

/*YOUTUBE SEM IFRAME*/
!function(){for(var e=document.querySelectorAll(".ytb"),t=0;t<e.length;t++){var n="https://img.youtube.com/vi/"+e[t].dataset.embed+"/sddefault.jpg",r=new Image;r.src=n,r.addEventListener("load",function(){e[t].appendChild(r)}()),e[t].addEventListener("click",function(){var e=document.createElement("iframe");e.setAttribute("frameborder","0"),e.setAttribute("allowfullscreen",""),e.setAttribute("src","https://www.youtube.com/embed/"+this.dataset.embed+"?rel=1&showinfo=1&autoplay=1]"),this.innerHTML="",this.appendChild(e)})}}();

function scrollToElement(selector, offset){  
	jQuery("html, body").animate({  
		scrollTop: jQuery(selector).offset().top + offset + 'px'  
	}, 'slow');  
}

//deixa como ativo o botao dos planos
jQuery(".selection").click(function(e) {
	jQuery(".selection").removeClass("selection-click");
	jQuery(this).addClass("selection-click");
});

//integracao com a loja
function getProductDetails(p_ProductID) {
	window.produto = p_ProductID;
	jQuery('#PlanoPorteEmpresa').html("");
	jQuery('#PlanosPrecos').html("");
	jQuery('#PlanosHoras').html("");
	jQuery.ajax({
		url: 'https://loja-prod.sgionline.com.br/LojaVGServer/api/v0/product/getProductDetailsFull',
		type: 'GET',
		headers: {'X-Requested-With': 'XMLHttpRequest', 'productID': p_ProductID},
		contentType: 'application/json; charset=utf-8',
    Authorization:'Basic cmZlcnJlaXJhQHZlcmRlZ2hhaWEuY29tLmJyOkAxMjNtdWRhcg==',
    success: function (result) {
			jQuery.each(result.content.priceOptionList.list, function(i, item){
				var radioBtn = jQuery('<input type="radio" name="rbtnPlanoPorteEmpresa" value="' + item.id +'"><div class="inline-fields"><h3>' + item.languageList[0].name + '</h3><br><p>' + item.languageList[0].description + '</p></div>');
				radioBtn.appendTo('#PlanoPorteEmpresa');
				jQuery('input:radio[name="rbtnPlanoPorteEmpresa"]').change(
				function(){
					if (jQuery(this).is(':checked') && jQuery(this).val() == item.id) {
						window.orgSize = item.languageList[0].name;
						var resultParcelas = (item.price * item.quantityMax / 12).toFixed(2);								
						jQuery('#PlanosPrecos').html("R$ " + resultParcelas);
						jQuery('#PlanosHoras').html(item.quantityMax);
					}
				});				
			});
		}
	});
}

function redirect_loja(){
	var idProduct = window.produto;
	var nameSize = window.orgSize;
	alert("Obrigado! Você está sendo direcionado para a loja da Verde Ghaia.");
	var url  = 'http://loja.sgionline.com.br/produto/'+ idProduct +'?op='+ nameSize +'';
	window.location.replace(url);
}

jQuery(document).ready(function() {
  function setHeight() {
    windowHeight = jQuery(window).innerHeight();
    jQuery('#img-banner').css('min-height', windowHeight-'76');
  };
  setHeight();
  
  jQuery(window).resize(function() {
    setHeight();
  });
});
