$(function(){
	$(document).ready(function() {
				$(".fancybox").attr('rel', 'gallery').fancybox(
					{padding : 0},
					{beforeLoad: function() {this.title = $(this.element).attr('caption');}},
					{helpers : {	overlay : {	css : {'background' : ' rgba(0, 1, 26, 0.8)'}}}}
				);
				console.log("script fancybox");

	});
});

function loadGalery(){
	$(document).ready(function() {
				$(".fancybox").attr('rel', 'gallery').fancybox(
					{padding : 0},
					{beforeLoad: function() {this.title = $(this.element).attr('caption');}},
					{helpers : {	overlay : {	css : {'background' : ' rgba(0, 1, 26, 0.8)'}}}}
				);
				console.log("script fancybox");

	});
};