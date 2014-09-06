$(document).ready(function() {
	// fix and release the workshop images
	$(window).scroll(function(){
		// Get container scroll position
		var fromTop = $(this).scrollTop();

		$(".row").each(function(){
			var name = $(this).attr('id');
			var offset = $("#" + name).offset().top;
						
			if(fromTop > offset){
				$("#"+name+"_image").css("position", "fixed");
		   		$("#"+name+"_image").css("top", 0);
		   		$("#"+name+"_image").css("right", 0);
		   	}
			else {
		   		$("#"+name+"_image").css("position", "relative");
		   	}	   	
		});
	});
});



$("#ccl_image").backstretch([
  "img/workshops/ccl_02.jpg",
  "img/workshops/ccl_03.jpg",
  "img/workshops/ccl_04.jpg"
], { fade: 750, duration: 8000 });

$("#ccl_small").backstretch([
  "img/workshops/ccl_02.jpg",
  "img/workshops/ccl_03.jpg",
  "img/workshops/ccl_04.jpg"
], { fade: 750, duration: 8000 });

$("#3d_image").backstretch([
  "img/workshops/3d_01.jpg"
], { fade: 750, duration: 8000 });

$("#3d_small").backstretch([
  // "img/workshops/ccl_01.jpg",
  "img/workshops/3d_01.jpg"
], { fade: 750, duration: 8000 });

$("#vvvv_image").backstretch([
  "img/workshops/vvvv_01.jpg",
  "img/workshops/vvvv_02.jpg"
], { fade: 750, duration: 8000 });


$("#vvvv_small").backstretch([
  // "img/workshops/ccl_01.jpg",
  "img/workshops/vvvv_01.jpg",
  "img/workshops/vvvv_02.jpg"
], { fade: 750, duration: 8000 });

$("#interface_image").backstretch([
  "img/workshops/interfaces_01.jpg",
  "img/workshops/interfaces_02.jpg",
  "img/workshops/interfaces_03.jpg",
  "img/workshops/interfaces_04.jpg"
], { fade: 750, duration: 8000 });

$("#interface_small").backstretch([
  "img/workshops/interfaces_01.jpg",
  "img/workshops/interfaces_02.jpg",
  "img/workshops/interfaces_03.jpg",
  "img/workshops/interfaces_04.jpg"
], { fade: 750, duration: 8000 });

$("#openframeworks_image").backstretch([
  "img/workshops/openframeworks_01.jpg",
  "img/workshops/openframeworks_02.jpg",
  "img/workshops/openframeworks_03.jpg",
  "img/workshops/openframeworks_04.jpg"
], { fade: 750, duration: 8000 });

$("#openframeworks_small").backstretch([
  "img/workshops/openframeworks_01.jpg",
  "img/workshops/openframeworks_02.jpg",
  "img/workshops/openframeworks_03.jpg",
  "img/workshops/openframeworks_04.jpg"
], { fade: 750, duration: 8000 });

$("#twitter_image").backstretch([
  "img/workshops/twitter_01.jpg",
  "img/workshops/twitter_02.jpg"
], { fade: 750, duration: 8000 });

$("#twitter_small").backstretch([
  "img/workshops/twitter_01.jpg",
  "img/workshops/twitter_02.jpg"
], { fade: 750, duration: 8000 });

$("#networkshop_image").backstretch([
  "img/workshops/networkshop_01.jpg"
], { fade: 750, duration: 8000 });

$("#networkshop_small").backstretch([
  "img/workshops/networkshop_01.jpg"
], { fade: 750, duration: 8000 });

$("#superobjects_image").backstretch([
  "img/workshops/superobjects_01.jpg"
], { fade: 750, duration: 8000 });

$("#superobjects_small").backstretch([
  "img/workshops/superobjects_01.jpg"
], { fade: 750, duration: 8000 });

$("#vj_image").backstretch([
  "img/workshops/vj_03.jpg",
  "img/workshops/vj_02.jpg",
  "img/workshops/vj_01.jpg",
  "img/workshops/vj_04.jpg"
], { fade: 750, duration: 8000 });

$("#vj_small").backstretch([
  "img/workshops/vj_03.jpg",
  "img/workshops/vj_02.jpg",
  "img/workshops/vj_01.jpg",
  "img/workshops/vj_04.jpg"
], { fade: 750, duration: 8000 });

// pre-load images
// if(document.images){
// 	var image1 = new Image()
//   image1.src = "http://retune.de/2013/img/Auger_Blinddate.jpg"
//   var image2 = new Image()
//   image2.src = "http://retune.de/2013/img/KyleMcDonald_LightLeaks.jpg"
// }