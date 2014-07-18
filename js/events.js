$(function() {
	
	$(document).ready(function (){

	   	$('.m-carousel').carousel({
			  dragRadius: 10
			, moveRadius: 20
			, classPrefix: undefined
			, classNames: {
			    outer: "carousel"
			  , inner: "carousel-inner"
			  , item: "item"
			  , center: "center"
			  , touch: "has-touch"
			  , dragging: "dragging"
			  , active: "active"
			}
		});
	});
});