$("h1").css("color", "yellow");

$("#burger").css("border", "2px solid blue");

var theStyles = {
    backgroundColor: "orange",
    fontSize: "48px",
    border: "4px solid green"
};

$("#burger").css(theStyles);

$("div").css("backgroundColor", "blue");
$(".fun").css("fontSize", "48px");
$("#food").css("border", "8px solid green");
$(".fun:first-of-type").css("color", "orange")

// $("input").attr("type", "color");

$("img").click(function(){
	alert("You clicked on the image");
});

$("li").click(function(){
	$(this).fadeOut();
});

$("li").click(function(){
	var text = $(this).text();
	alert("You clicked on " + text);
});

$("input").keypress(function(event){
	console.log(event);
});