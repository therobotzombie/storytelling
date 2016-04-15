// Scripts
	
// fullscreen layout
$(function() {
	$('#fullpage').fullpage({
		verticalCentered: true,
		scrollOverflow: false,
		//autoScrolling: false,
		lockAnchors: false,
		anchors:['hello', 'bookshelf', 'info'],
		navigation: false,
		scrollingSpeed: 900,
		loopBottom: false,
		loopTop: false,
		loopHorizontal: true,
		continuousVertical: false,
		'afterLoad': function(anchorLink, index){
			if(index == 1) {
				$('.border').addClass('active');
	    	}
			if(index == 2) {
				$('#bigbookshelf').addClass('active');
				$('.logo_home').addClass('active');
			}
			if(index == 3) {
				$('.logo_home').removeClass('active');
				$('.scenequote').addClass('active');
			}
		},		
		'onLeave': function(index, nextIndex, direction){
			$('.border').toggleClass('active',  (index == 2 && direction == 'up'));		
			$('.logo_home').toggleClass('active', (index == 1 && direction == 'down' ) || (index == 4 && direction == 'down'));
			$('.scenequote').toggleClass('active', (index == 4 && direction == 'up'));
		}
		
	});
});

// toast notifications
toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-right",
  "preventDuplicates": true,
  "onclick": null,
  "showDuration": "3500",
  "hideDuration": "2500",
  "timeOut": "2000",
  "extendedTimeOut": "4000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
   
// close navigation     
function closeNav() {
	$('nav').toggleClass('active');
	$('#mobile-nav').toggleClass('active');
}

// scroll down automatically   	
$('#autoplaylink').click(function() {
	var option = $(this).attr('value');	  
	  if(option === 'off') {
		closeNav();
		autoScrollOn();			
	  } 
	  else {
		$(this).attr('value', 'off');	
		$(this).html("<i class='fa fa-play-circle fa-fw'></i>&nbsp; Autoplay On");
		closeNav();
		toastr.info('AUTOPLAY OFF   <i class="fa fa-pause"></i>');
		$("html, body").stop();
	  }
});

function autoScrollOn() {
	$('#autoplaylink').attr('value', 'on');	
	$('#autoplaylink').html("<i class='fa fa-pause fa-fw'></i>&nbsp; Autoplay Off");
	$("html, body").animate({ scrollTop: $('#scrolling').prop("scrollHeight")}, 600);
	jQuery.fx.interval = 80;
	scrollDown();
}
function scrollDown() {
	toastr.info('AUTOPLAY ON   <i class="fa fa-play-circle"></i>');	
	jQuery.fx.interval = 80;
	$("html, body").animate({ scrollTop: $(document).height() }, { duration: 40000, easing: 'linear' });
}


// SCENE ACTIONS

// candles
$('.flicker').click(function() {
	var candleID = this.id;	
	$('#cemetery .books #'+candleID+' circle').fadeOut('slow');
});

// ladder moving and falling on click
$('.books_transparent #ladder').on('click', function() {
	$('.books #ladder, .books_transparent #ladder').attr("class", "translate");
		$('.books_transparent #ladder').on('click', function() {
			$('.books #ladder, .books_transparent #ladder').attr("class", "fall");
		});
});


