/*Numeros */
jQuery(document).ready(function(){var t=0;jQuery(window).scroll(function(){var n=jQuery("#counter").offset().top-window.innerHeight;0==t&&jQuery(window).scrollTop()>n&&(jQuery(".counter-value").each(function(){var t=jQuery(this),n=t.attr("data-count");jQuery({countNum:t.text()}).animate({countNum:n},{duration:2e3,easing:"swing",step:function(){t.text(Math.floor(this.countNum))},complete:function(){t.text(this.countNum)}})}),t=1)})});

/*Cronometro*/
jQuery(document).ready(function(){FlipClock.Lang.Custom={days:"Dias",hours:"Horas",minutes:"Minutos",seconds:"Segundos"};var o={clockFace:"DailyCounter",countdown:!0,language:"Custom"},e=1537239660-(new Date).getTime()/1e3;e=Math.max(1,e),jQuery(".clock-builder-output").FlipClock(e,o)});

/*TYPED */
document.addEventListener('DOMContentLoaded', function () {
Typed.new('.element', {
    strings: ["Implementar as certificações ISO", "Pode ser mais fácil", "Pode ser mais econômico", "Mais rápido", "E pode ser Online!"],
    typeSpeed: 10,
    backDelay: 1500,
    loop: !0,
    startDelay: 1200,
});
});

jQuery(document).ready(function(){
	var d = new Date();
	d.setTime(1537289700*1000); // from: 09/18/2018 01:55 pm -0300
	jQuery('.clock-builder-small-output').countdown(d, function(event) {
		jQuery(this).html(event.strftime('%D dias e %H :%M :%S'));
	});
});