
// navbar
$(document).ready(function(){
	$(window).scroll(function(){
		if(this.scrollY > 20){
			$('.navbar').addClass("sticky");
		}else{
			 $('.navbar').removeClass("sticky");
		}
		 if(this.scrollY > 500){
		 	$('.scroll-up-btn').addClass("show");
		 }else{
		 	$('.scroll-up-btn').removeClass("show");
		 }
	});

	// menu slise up-down
	$('.scroll-up-btn').click(function(){
		$('html').animate({scrollTop:0});
	});


// menu toggle
	$('.menu-btn').click(function(){
		$('.navbar .menu').toggleClass("active");
		$('.menu-btn i').toggleClass("active");
	});

	// type 
	var typed = new Typed(".typing",{
		strings: ["Web Designer","Web Developer","YouTuber","Blogger","Freelancer"],
		typeSpeed:100,
		backSpeed:60,
		loop:true
	});

	var typed = new Typed(".typing2",{
		strings: ["Web Designer","Web Developer","YouTuber","Blogger","Freelancer"],
		typeSpeed:100,
		backSpeed:60,
		loop:true
	});

	// menu owl

	$('.carousel').owlCarousel({
		margin:20,
		loop:true,
		autoplayTimeOut:2000,
		autotimeHoverPause:true,
		responsive:{
			0:{
				items:1,
				nav:false
			},
			600:{
				items:2,
				nav:false
			},
			1000:{
				items:3,
				nav:false
			}
		}
	});

});