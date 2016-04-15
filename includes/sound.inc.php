<!-- SOUND  -------------------------->   
<audio id="backgroundMusic" autoplay loop><!-- autoplay-->

    <?php if(($page=='home')||($page=='')) : ?>
        <source src="./sound/background_music.mp3" type="audio/mpeg">
        <source src="./sound/background_music.ogg" type="audio/ogg">
        <source src="./sound/background_music.acc" type="audio/acc">
        
    <?php elseif($page=='canyon') : ?>
        <source src="./sound/when_im_gone.mp3" type="audio/mpeg">
        <source src="./sound/when_im_gone.ogg" type="audio/ogg">
        <source src="./sound/when_im_gone.acc" type="audio/acc">
              
    <?php elseif($page=='eyre') : ?>
        <source src="./sound/sunset.mp3" type="audio/mpeg">
        <source src="./sound/sunset.ogg" type="audio/ogg">
        <source src="./sound/sunset.acc" type="audio/acc">
        
    <?php elseif($page=='cemetery') : ?>
        <source src="./sound/haunted_forest.mp3" type="audio/mpeg">
        <source src="./sound/haunted_forest.ogg" type="audio/ogg">
        <source src="./sound/haunted_forest.acc" type="audio/acc">

    <?php endif; ?>
                                              
    <!-- fallback -->
    <p><br/><br/>Your browser does not support HTML5 audio.</p>
</audio>