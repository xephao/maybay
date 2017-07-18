var isDevice = false;
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	isDevice = true;
}
// khong the phong to cua so
function openPopUp(url, windowName, w, h, scrollbar) {
	var winl = (screen.width - w) / 2;
	var wint = (screen.height - h) / 2;
	winprops = 'height='+h+',width='+w+',top='+wint+',left='+winl+',scrollbars='+scrollbar ;
	win = window.open(url, windowName, winprops);
	if (parseInt(navigator.appVersion) >= 4) {
		win.window.focus();
	}
}

// co the phong to cua so
var win=null;
function NewWindow(mypage,myname,w,h,scroll,pos){
	if(pos=="random"){LeftPosition=(screen.width)?Math.floor(Math.random()*(screen.width-w)):100;TopPosition=(screen.height)?Math.floor(Math.random()*((screen.height-h)-75)):100;}
	if(pos=="center"){LeftPosition=(screen.width)?(screen.width-w)/2:100;TopPosition=(screen.height)?(screen.height-h)/2:100;}
	else if((pos!="center" && pos!="random") || pos==null){LeftPosition=0;TopPosition=20}
	settings='width='+w+',height='+h+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',location=no,directories=no,status=no,menubar=no,toolbar=no,resizable=yes';
	win=window.open(mypage,myname,settings);}

// is_num
function is_num(event,f){
	if (event.srcElement) {kc =  event.keyCode;} else {kc =  event.which;}
	if ((kc < 47 || kc > 57) && kc != 8 && kc != 0) return false;
	return true;
}


function format_number (num) {
	num = num.toString().replace(/\$|\./g,'');
	if(isNaN(num))
		num = "0";
	sign = (num == (num = Math.abs(num)));
	num = Math.round(num*100+0.50000000001);
	num = Math.round(num/100).toString();
	for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
		num = num.substring(0,num.length-(4*i+3))+'.'+ num.substring(num.length-(4*i+3));
	return (((sign)?'':'-') + num);
}


function numberOnly (myfield, e){
	var key,keychar;
	if (window.event){key = window.event.keyCode}
	else if (e){key = e.which}
	else{return true}
	keychar = String.fromCharCode(key);
	if ((key==null) || (key==0) || (key==8) || (key==9) || (key==13) || (key==27)){return true}
	else if (("0123456789").indexOf(keychar) > -1){return true}
	return false;
};


/*--------------- Link advertise ----------------*/
window.rwt = function (obj, type, id) {
	try {
		if (obj === window) {
			obj = window.event.srcElement;
			while (obj) {
				if (obj.href) break;
				obj = obj.parentNode
			}
		}
		obj.href = ROOT+'?'+cmd+'=mod:advertise|type:'+type+'|lid:'+id;
		obj.onmousedown = ""
	} catch(o) {}
	return true ;
};

(function (jQuery) {
	jQuery.fn.clickoutside = function (callback) {
		var outside = 1,
			self = $(this);
		self.cb = callback;
		this.click(function () {
			outside = 0
		});
		$(document).click(function (event) {
			if (event.button == 0) {
				outside && self.cb();
				outside = 1
			}
		});
		return $(this)
	}
})(jQuery);

(function($) {
	$.fn.hoverDelay = function(f,g) {
		var cfg = {
			sensitivity: 7,
			delayOver: 150,
			delayOut: 0
		};
		cfg = $.extend(cfg, g ? { over: f, out: g } : f );
		var cX, cY, pX, pY;

		var track = function(ev) {
			cX = ev.pageX;
			cY = ev.pageY;
		};

		var compare = function(ev,ob) {
			ob.hoverDelay_t = clearTimeout(ob.hoverDelay_t);

			if ( ( Math.abs(pX-cX) + Math.abs(pY-cY) ) < cfg.sensitivity ) {
				$(ob).unbind("mousemove",track);

				ob.hoverDelay_s = 1;
				return cfg.over.apply(ob,[ev]);
			} else {

				pX = cX; pY = cY;

				ob.hoverDelay_t = setTimeout( function(){compare(ev, ob);} , cfg.delayOver );
			}
		};

		var delay = function(ev,ob) {
			ob.hoverDelay_t = clearTimeout(ob.hoverDelay_t);
			ob.hoverDelay_s = 0;
			return cfg.out.apply(ob,[ev]);
		};

		var handleHover = function(e) {
			var ev = jQuery.extend({},e);
			var ob = this;

			if (ob.hoverDelay_t) { ob.hoverDelay_t = clearTimeout(ob.hoverDelay_t); }

			// if e.type == "mouseenter"
			if (e.type == "mouseenter") {
				pX = ev.pageX; pY = ev.pageY;
				$(ob).bind("mousemove",track);
				if (ob.hoverDelay_s != 1) { ob.hoverDelay_t = setTimeout( function(){compare(ev,ob);} , cfg.delayOver );}

				// else e.type == "mouseleave"
			} else {
				// unbind expensive mousemove event
				$(ob).unbind("mousemove",track);
				if (ob.hoverDelay_s == 1) { ob.hoverDelay_t = setTimeout( function(){delay(ev,ob);} , cfg.delayOut );}
			}
		};
		return this.bind('mouseenter',handleHover).bind('mouseleave',handleHover);
	};
})(jQuery);



    // $(function(){  
    //      var pull        = $('#pull');  
    //      var b_search    = $('.box-search-ticket');  
    //      menuHeight  = b_search.height(); 

    //     if(mod == 'main')
    //     {
    //         pull.hide();
    //     }else{
    //         b_search.hide();
    //     } 

    //     $(pull).on('click', function(e) {  
    //          e.preventDefault();
    //          var icon = $(this).find('i');
    //          if(icon.hasClass('fa-angle-down')){
    //             icon.removeClass('fa-angle-down').addClass('fa-angle-up');
    //          }else{
    //             icon.removeClass('fa-angle-up').addClass('fa-angle-down');
    //          }
    //          if($(this).find('.title').text() == "Hiện tìm kiếm")
    //             $(this).find('.title').text('Ẩn tìm kiếm');
    //          else
    //             $(this).find('.title').text('Hiện tìm kiếm');

    //          b_search.slideToggle();  
    //     });

    //     /*if(isDevice == false)
	   //  {
	   //      b_search.removeAttr('style');
	   //      pull.css('display', 'none');
	   //  }*/

	   //  $(window).resize(function(){  
	   //      var w = $(window).width();  
	   //      if(w > 320 && b_search.is(':hidden')) {  
	   //        b_search.removeAttr('style');  
	   //      } 
	   //  });   

    // });  


// function load_Statistics ()
// {
// 	$.ajax({
// 		async: true,
// 		dataType: 'json',
// 		url: ROOT+"load_ajax.php?do=statistics",
// 		type: 'POST',
// 		success: function (data) {
// 			$("#stats_online").html(data.online);
// 			$("#stats_totals").html(data.totals);
// 			$("#stats_member").html(data.mem_online);
// 		}
// 	}) ;

// }

function registerMaillist ()
{
	var femail = $("#femail").val();
	var ok_send = 1;

	if(!vnTRUST.is_email(femail)) {
		jAlert(js_lang['err_email_invalid'],js_lang['error']);
		ok_send=0;
	}

	if (ok_send){
		var mydata =  "email="+femail  ;
		$.ajax({
			async: true,
			dataType: 'json',
			url: ROOT+'load_ajax.php?do=regMaillist',
			type: 'POST',
			data: mydata ,
			success: function (data) {
				jAlert(data.mess,js_lang['announce'],function(){ $("#femail").val('')  } );
			}
		}) ;
	}

	return false ;

}

function LoadAjax(doAct,mydata,ext_display) {
	$.ajax({
		async: true,
		url: ROOT+'load_ajax.php?do='+doAct,
		type: 'POST',
		data: mydata ,
		success: function (data) {
			$("#"+ext_display).html(data)
		}
	}) ;
}

/** 01. Top Nav
 **************************************************************** **/
function _topNav() {

	$(".vnt-search .div_title").click(function(){
		if(! $(this).parent().hasClass("show")){
			$(this).parent().addClass("show");
		}else{
			$(this).parent().removeClass("show");
		}
	});
	$(window).bind("click",function(e){
		var $clicked = $(e.target);
		if(! $clicked.parents().hasClass("vnt-search")){
			$(".vnt-search").removeClass("show");
		}
	});

	$(window).load(function(){
		var $offsetFixedMenu = 0;
		if(typeof $(".vnt-headMain").offset() == 'object'){
			$offsetFixedMenu = $(".vnt-headMain").offset().top;
		}
		$(window).scroll(function(){
			var $scrollTop = $(window).scrollTop();
			if($scrollTop > $offsetFixedMenu){
				$(".vnt-headMain .fixed_menu").addClass("active");
			}else{
				$(".vnt-headMain .fixed_menu").removeClass("active");
			}
		});
	});

}

/** 10. Top Nav
 **************************************************************** **/
function vnTFooter() {

	$("a.viewmap").fancybox({
		width : '1000',
		maxWidth	: "90%",
		maxHeight	: "90%",
		helpers: {
			overlay: {
				locked: false
			}
		},
		href: this.href,
		type: $(this).data("type"),
		openEffect  : 'elastic',
		closeEffect : 'elastic'
	});


	// link
	(function($) {
		$.fn.getShow = function(options){
			var settings = $.extend({
				// These are the defaults.
				item_class: ".gs_item" // add class css to child item
			}, options );

			$(this).children().addClass(settings.item_class.substr(1));
			var $element = $(this).children(settings.item_class);
			$element.find(".node_content").hide();
			$($element[0]).children(".node_content").show();
			$($element[0]).addClass("active");
			$(this.selector +" "+ settings.item_class +" .node_title").click(function(e){
				if(! $(this).parents(settings.item_class).hasClass("active")){
					$(this).parents(settings.item_class).addClass("active");
					$(this).parents(settings.item_class).find(".node_content").slideToggle(700);
					$(this).parents(settings.item_class).siblings().each(function(e){
						if($(this).hasClass("active")){
							$(this).removeClass("active");
							$(this).find(".node_content").slideToggle(700);
						}
					});
				}else{
					$(this).parents(settings.item_class).removeClass("active");
					$(this).parents(settings.item_class).find(".node_content").slideToggle(700);
				}
				return false;
			});
		};

		$.fn.getShow_2 = function(options){
			var settings = $.extend({
				// These are the defaults.
				item_class: ".nodes" // add class css to child item
			}, options );

			$(this).children().addClass(settings.item_class.substr(1));
			var $element = $(this).children(settings.item_class);
			$element.find(".nodes_content").hide();
			$($element[0]).children(".nodes_content").show();
			$($element[0]).addClass("active");
			$(this.selector +" "+ settings.item_class +" .nodes_title").click(function(e){
				if(! $(this).parents(settings.item_class).hasClass("active")){
					$(this).parents(settings.item_class).addClass("active");
					$(this).parents(settings.item_class).find(".nodes_content").slideToggle(700);
					$(this).parents(settings.item_class).siblings().each(function(e){
						if($(this).hasClass("active")){
							$(this).removeClass("active");
							$(this).find(".nodes_content").slideToggle(700);
						}
					});
				}else{
					$(this).parents(settings.item_class).removeClass("active");
					$(this).parents(settings.item_class).find(".nodes_content").slideToggle(700);
				}
				return false;
			});
		};

	})(jQuery);

	$(".grid_link_footer").getShow();
	$(".group_list_nodes").getShow_2();

	if($(window).width() > 768) {
		$('.group_list_nodes .node03 .nodes_content').show();
	}
	$(window).resize(function(){
		if($(window).innerWidth() < 768){
			$('.group_list_nodes .node03 .nodes_content').hide();
		}else{
			$('.group_list_nodes .node03 .nodes_content').show();
		}
	});

}

/** Core
 **************************************************************** **/
function TRUSTvn() {
	var Xwidth = $(window).width();

	if(Xwidth<1100){$(".floating-left").hide() ; $(".floating-right").hide()}
	_topNav();


	$(".fancybox").fancybox();

	$(".alert-autohide").delay(5000).slideUp(200, function() {
		$(this).alert('close');
	});



	$('input[data-input=radio]:radio').each(function(){
		$(this).wrap("<span class='style_radio'></span>");
		$(this).parent().append("<span class='style_icon'></span>");
	});
	$('input[data-input=radio_checkbox]:radio').each(function(){
		$(this).wrap("<span class='style_radio_checkbox'></span>");
		$(this).parent().append("<span class='style_icon'></span>");
	});
	$('input[data-input=checkbox]:checkbox').each(function(){
		$(this).wrap("<span class='style_checkbox'></span>");
		$(this).parent().append("<span class='style_icon'></span>");
	});

	$(".mmMenu ul li").each(function(){
		var countsize = $(this).find("ul li").size();
		if(countsize > 0){
			$(this).find("a:first").wrap("<div class='m-sub'></div>");
			$(this).find(".m-sub:first").append("<div class='button-submenu'></div>")
		}
	});
	$(".mmMenu ul li ul").css({'display':'none'});
	$(".mmMenu ul li .button-submenu").click(function(){
		if(! $(this).hasClass("show")){
			$(this).parent().parent().find("ul:first").stop().slideToggle(700);
			$(this).addClass("show");
			$(this).parent().parent().siblings().each(function(){
				if($(this).find(".m-sub:first").find(".button-submenu").hasClass("show")){
					$(this).find("ul:first").stop().slideToggle(700);
					$(this).find(".m-sub:first").find(".button-submenu").removeClass("show");
				}
			});
		}else{
			$(this).parent().parent().find("ul:first").stop().slideToggle(700);
			$(this).removeClass("show");
		}
	});
	$(".menu_mobile .icon_menu").click(function(event) {
		$(this).parent().find(".divmm").addClass('show');
		$('.menu_mobile').addClass("showmenu");
		$('html').addClass("openmenu");
		$('body').css({});
	});
	$(".menu_mobile .divmm .divmmbg , .menu_mobile .divmm .mmContent .close-mmenu").click(function(event) {
		$(this).parents(".menu_mobile").find(".divmm").removeClass('show');
		setTimeout(function() {
			$('.menu_mobile').removeClass("showmenu");
			$('html').removeClass("openmenu");
		}, 500);
	});
	$(window).resize(function(){
		if($(window).innerWidth() > 1024){
			$(".menu_mobile").find(".divmm").removeClass('show');
			$('.menu_mobile').removeClass("showmenu");
			$('html').removeClass("openmenu");
		}
	});


	if($('.vnt-category li').find("a").hasClass("current")){
		$(".vnt-category .title_active").text($('.vnt-category li a.current').text());
	}else{
		$(".vnt-category .title_active").text($('.vnt-category li:first a').text());
	}
	$(".vnt-category .title_active").click(function(){
		if(! $(this).parents(".vnt-category").hasClass("show")){
			$(this).parents(".vnt-category").addClass('show');
		}else{
			$(this).parents(".vnt-category").removeClass("show");
		}
	});
	$(window).click(function(e){
		var $clicked = $(e.target);
		if(! $clicked.parents().hasClass("vnt-category")){
			$(".vnt-category").removeClass("show");
		}
	});

	vnTFooter();
	// load_Statistics();
	vnTRUST.goTopStart();

}

/* Init */
jQuery(window).ready(function () {
	TRUSTvn();
});