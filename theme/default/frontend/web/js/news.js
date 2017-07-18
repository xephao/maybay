$(document).ready(function(){
	$('#slider_feature').slick({
		slidesToShow:1,
		slidesToScroll: 1,
		arrows:false,
		dots: true,
		autoplay: true,
		autoplaySpeed: 5000,
		speed:1000
	});
});

function show_comment(id,lang,p) {

    $.ajax({
         type: "GET",
         url: ROOT+'modules/news/ajax/_show_comment.php',
         data: "id="+id+'&lang='+lang+'&p='+p,
         success: function(html){
              $("#ext_comment").html(html);
         }
     });
}

$( document ).ready(function() {
    $("#contentComment").focus(function(){
        $(this).parents(".w_content").find(".content-info").stop().slideDown(700);
    });
    $("#btn-close").click(function(){
        $(this).parents(".w_content").find(".content-info").stop().slideUp(700);
    });
});