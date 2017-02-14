/**
 * @author sasha & alisa
 */

$("document").ready(function() {
	$(".lightbox").hide();
	getGlasses();
	bgr();
	hideBoxLite();
	
});

var bgr = function() {

	var randomNum,
	    imageUrl;
	randomNum = Math.floor(Math.random() * 4) + 1;
	imageUrl = "images/hp_bgr" + randomNum + ".jpg";
	$("#homeP").find("main").css('background-image', 'url(' + imageUrl + ')');
};

var boxLight = function() {

	

	$(".glass_item").on("click", function() {
		var clicked_index=$(this).attr("index");
		$.each(glasses, function(){
			if(this.index==clicked_index){
				 $('.model').html("<p> דגם "+this.model+"</p>");
	       		 $('.price').html("<p>מחיר "+this.price+" שח </p>");
	       		 if(this.is_optic==1){
	       		 	 $('.is_optic').html("<p>אופטי</p>");
	       		 }
	       		 else{
	       		 	$('.is_optic').html("<p>לא אופטי</p>");
	       		 }
	       		 if(this.is_poleroid==1){
	       		 	 $('.is_poleroid').html("<p>פולרויד</p>");
	       		 }
	       		 else{
	       		 	$('.is_poleroid').html("<p>לא פולרויד</p>");
	       		 }
	       			
	       		 $(".lightbox").show();
			}
			
		});

	
	});

};
var hideBoxLite= function(){
	
	$(".lightbox").on("click", function() {

		$(".lightbox").hide();
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
var glasses;
var getGlasses= function(){

	$.getJSON("glasses.php",function(data){
		glasses=data;
		$.each(data, function(){
			$('#wrap').append("<div class='box'><div class='innerContent'><div index="+ this.index+" class='"+this.pic_name+" glass_item'></div></div></div>");
			
		});
		
	        boxLight();
	});
	
};
