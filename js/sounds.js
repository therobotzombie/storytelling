// toggle sound on / off 
$('#onoff,#onoff_nav').click(function() {
  var option = $('#onoff').attr('value');
	  if(option === 'off') {
		$('#onoff').attr('value', 'on');	
		$('#onoff').attr('title', 'mute sound');		
		$('#onoff_nav').html("<i class='fa fa-volume-off fa-fw'></i>&nbsp; Sound Off");
		$('#onoff').html("<img src='./img/audio-on.svg' />");
		$('#backgroundMusic').trigger("play");	
	  } 
	  else {
		$('#onoff').attr('value', 'off');
		$('#onoff').attr('title', 'sound on');
		$('#onoff_nav').html("<i class='fa fa-volume-up fa-fw'></i>&nbsp; Sound On");	
		$('#onoff').html("<img src='./img/audio-off.svg' />");
		$('#backgroundMusic').trigger("pause");
	  }
});
	
$('#onoff_nav').click(function() {
	closeNav();
});

// SOUND EFFECTS 
	$('.meow').easyAudioEffects({
	   ogg : "sound/effects/meow.ogg",
	   mp3 : "sound/effects/meow.mp3",
	   eventType : "click",
	   playType : "oneShotPolyphonic"
	});
	$('.owl').easyAudioEffects({
	   ogg : "sound/effects/owl.ogg",
	   mp3 : "sound/effects/owl.mp3",
	   eventType : "click",
	   playType : "oneShotPolyphonic"
	});
	$('.scream').easyAudioEffects({
	   ogg : "sound/effects/screaming_hawk.ogg",
	   mp3 : "sound/effects/screaming_hawk.mp3",
	   eventType : "click", 
	   playType : "oneShotPolyphonic"
	});
	$('.flicker').easyAudioEffects({
	   ogg : "sound/effects/blow.ogg",
	   mp3 : "sound/effects/blow.mp3",
	   eventType : "click",
	   playType : "oneShotPolyphonic"
	});
	$('.click,.close').easyAudioEffects({
	   ogg : "sound/effects/click_022.ogg",
	   mp3 : "sound/effects/click_022.mp3",
	   eventType : "click",
	   playType : "oneShotPolyphonic"
	});
	$('.rollover').easyAudioEffects({
	   ogg : "sound/effects/rollover_1.ogg",
	   mp3 : "sound/effects/rollover_1.mp3",
	   eventType : "hover",
	   playType : "oneShotPolyphonic"
	});
	$('.ring').easyAudioEffects({
	   ogg : "sound/effects/shooting_star.ogg",
	   mp3 : "sound/effects/shooting_star.mp3",
	   eventType : "click", 
	   playType : "oneShotPolyphonic"
	});
	$('.alarm').easyAudioEffects({
	   ogg : "sound/effects/alarm.ogg",
	   mp3 : "sound/effects/alarm.mp3",
	   eventType : "hover", 
	   playType : "oneShotPolyphonic"
	});
