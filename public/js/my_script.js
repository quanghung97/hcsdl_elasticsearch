$(document).ready(function() {
	$("input[name='type-search']").click(function(){
		if(this.checked){
			$("#nangcao").text('');
			$("#nangcao").text($(this).parent().text());
		}
	});
	$("#search_home").click(function(){
		window.location.replace($(location).attr("href") + $('input[name=type-search]:checked').val() + '?text_search='+ $("#text_search").val());
	});
	$("#text_search").focus(function(){
		$(document).keypress(function(event) {
			if(event.which == '13'){
				window.location.replace($(location).attr("href") + $('input[name=type-search]:checked').val() + '?text_search='+ $("#text_search").val());
			}
		});
	});
	
	$("#back_page").click(function(){
		window.location.replace($.cookie("backurl"));
	});
	$(".top-banner").css("background-image","url('"+$(location).attr("href")+"storage/app/public/media/banner/banner.jpg')");
});

