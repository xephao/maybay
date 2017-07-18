vnTProduct = {

	downloadOrder: function () {

		html2canvas($(".mod_info_custumer"), {
			onrendered: function(canvas) {
				var dataURL = canvas.toDataURL("image/png");
				$("#frmDownload #image").val(dataURL);
				$("#frmDownload").submit();
			}
		});
		return true;

	},


	init:function()
	{

		$('.slider_date').slick({
			slidesToShow:7,
			infinite: false,
			slidesToScroll: 1,
			focusOnSelect: true,
			autoplay: false,
			autoplaySpeed: 8000,
			speed:1000,
			responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 5
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 3
				}
			}
			]
		});
		$(window).load(function(){
			if($(window).innerWidth() > 1024){
				$('.slider_date').slick('slickGoTo', 0);
			}else{
				if($(window).innerWidth() >= 768){
					$('.slider_date').slick('slickGoTo', 1);
				}else{
					$('.slider_date').slick('slickGoTo', 2);
				}
			}
		});
		$(window).resize(function(){
			if($(window).innerWidth() > 1024){
				$('.slider_date').slick('slickGoTo', 0);
			}else{
				if($(window).innerWidth() >= 768){
					$('.slider_date').slick('slickGoTo', 1);
				}else{
					$('.slider_date').slick('slickGoTo', 2);
				}
			}
		});


		$(".search_date .date_title").click(function(){
			if(! $(this).parents(".search_date").hasClass("show")){
				$(this).parents(".search_date").addClass('show');
			}else{
				$(this).parents(".search_date").removeClass("show");
			}
		});
		$(".search_date ul li a").click(function(){
			$(this).parents(".search_date").removeClass("show");
		});
		$(window).click(function(e){
			var $clicked = $(e.target);
			if(! $clicked.parents().hasClass("date_inbounds")){
				$(".date_inbounds").removeClass("show");
			}
			if(! $clicked.parents().hasClass("date_outbounds")){
				$(".date_outbounds").removeClass("show");
			}
		});

		$(".vnt-fitter-booking .div_title").click(function(){
			if($(window).innerWidth() > 1024){
				$(this).parents(".vnt-fitter-booking").find(".box-fitter-booking").addClass("active");
			}else{
				$(this).parents(".vnt-fitter-booking").find(".divmm").addClass('show');
				$('.style_fitter_mobile').addClass("showmenu");
				$('html').addClass("openmenu");
			}
		});
		$(window).resize(function(){
			if($(window).innerWidth() > 1024){
				$(".style_fitter_mobile").find(".divmm").removeClass('show');
				$('.style_fitter_mobile').removeClass("showmenu");
				$('html').removeClass("openmenu");
			}else{
				$(".box-fitter-booking").removeClass("active");
			}
		});

		$(".box-fitter-booking .close_search button").click(function(){
			$(this).parents(".box-fitter-booking").removeClass("active");
		});
		$(window).click(function(e){
			var $clicked = $(e.target);
			if(! $clicked.parents().hasClass("vnt-fitter-booking")){
				$(".box-fitter-booking").removeClass("active");
			}
		});


		$(".style_fitter_mobile .divmm .divmmbg , .style_fitter_mobile .divmm .mmContent .close-mmenu").click(function(event) {
			$(this).parents(".style_fitter_mobile").find(".divmm").removeClass('show');
			setTimeout(function() {
				$('.style_fitter_mobile').removeClass("showmenu");
				$('html').removeClass("openmenu");
			}, 500);
		});
		$(window).scroll(function(){
			var $offset_fixed = 0;
			if(typeof $(".vnt-fitter-booking .w_fixed_title").offset() == "object"){
				$offset_fixed = $(".vnt-fitter-booking .w_fixed_title").offset().top;
			}
			if($(window).scrollTop() > ($offset_fixed + 70)){
				$(".vnt-fitter-booking .div_title").addClass("fixed_title");
			}else{
				$(".vnt-fitter-booking .div_title").removeClass("fixed_title");
			}
		});

		(function($) {
			$.fn.getRangeValue = function(options){
				var settings = $.extend({
					step:4,
					star:0,
					stop:24,
					text:'h'
				}, options );
				var listArray = [];
				var objectNumber = {number:settings.star,position:0};
				var getNumber=parseInt((settings.stop - settings.star)/settings.step);
				var textHtml = '';
				for(var i=0;i<=getNumber;i++){
					objectNumber = {number:(settings.step*i + settings.star),position:((settings.step*i)/(settings.stop - settings.star))};
					listArray.push(objectNumber);
				}
				if(objectNumber.number !== settings.stop){
					objectNumber = {number:settings.stop,position:1};
					listArray.push(objectNumber);
				}
				for(i=0;i<listArray.length;i++){
					textHtml += '<span style="left:'+ (listArray[i].position * 100) +'%">'+ listArray[i].number + settings.text +'</span>'
				}
				//console.log(listArray[i].number,listArray[i].position);
				this.html(textHtml);
			}
		})(jQuery);

	}

};


/* Init */
jQuery(window).ready(function () {
	vnTProduct.init();
});

