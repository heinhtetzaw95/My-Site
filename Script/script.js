//alert("Hello!");

$(document).ready(function(){
	$("#top-bar").append("Ready!");
});

$("div.button").(function(){
	$(this).css("background-color", "black");
}).mouseleave(function(){
	$(this).css("background-color", "grey");
})