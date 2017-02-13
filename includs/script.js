/**
 * @author sasha & alisa
 */

$("document").ready(function() {
	boxLight();
	bgr();
});

var bgr = function() {

	var randomNum,
	    imageUrl;
	randomNum = Math.floor(Math.random() * 4) + 1;
	imageUrl = "images/hp_bgr" + randomNum + ".jpg";
	$("#homeP").find("main").css('background-image', 'url(' + imageUrl + ')');
};

var boxLight = function() {

	$(".lightbox").hide();

	$(".item").on("click", function() {

		$(".lightbox").show();
	});

};

var myFunction = function() {
	
	var x = document.getElementById("myTopnav");
	if (x.className === "topnav") {
		x.className += " responsive";
	} else {
		x.className = "topnav";
	}	
};
