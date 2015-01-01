
// lesson 1
$(document).ready(function(){
	$('.responsive_icons .fa').on('mouseenter', function(){
		console.log('.fa');
		$(".responsive_icons .fa").addClass('fa-spin');
	});
	$('.fa').on('mouseleave', function(){
		console.log('.fa');
		$(".fa").removeClass('fa-spin');
	});
});


// hide Extra Bootstrap Examples
$(document).ready(function(){
	$('.extra_images').hide();
	$('.view_more_examples').on('click', function(){
		$('.extra_images').slideToggle(1000);
	});
});


// slideToggle Tasks
$(document).ready(function(){
	$(".next1, .task1").hide();
	$('.task').on('click', function(){
		$(this).closest('.task').find('.task1, .next1').fadeIn();
	});
});


// sildeToggle Bootstrap icons
$(document).ready(function(){
	$('.extra_icons').hide();
	$('#more_bootstrap').on('click', function(){
		$('.extra_icons').fadeToggle(500);
	});
});


// smoothscroll
$(document).ready(function(){
	$(".smooth, .tabs").click(function() {
		$('html').find('.main_content').css('height', '100%');
		$(window).scrollTop(0);
		$('html').find('.main_content').css('height', '100vh');
	});
});

// tooltips
$('.tooltips').tooltip('hide');

// popovers
$('.pop_active').popover("hide");


$('.revealer').on('click', function(){
	$('body').find('.reveal_answer').toggleClass('hidden');
});
