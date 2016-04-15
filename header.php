<!-- PRELOADING ANIMATION -->
<div id="preloading">
	<?php if(in_array($page, $scrolling)) : ?>
        <div id="fakeLoader_scroll"></div>   
            <?php else : ?>
            <div id="fakeLoader"></div>    
    <?php endif; ?>
</div>    
       
<!-- FULL-BODY-BORDER -->
<div id="left"></div><div id="right"></div><div id="top"></div><div id="bottom"></div>    
    
<!-- WARNING MESSAGE -->   
	<div id="warning">
   	    <p>This website is powered by new shiny CSS3 and SVG filters! To see everything in full glory, grab yourself <a href="http://www.google.com/chrome/">Google Chrome 
        <i class="fa fa-external-link"></i></a>.</p>
        <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>


<!-- HOME BUTTON / LOGO --> 
    <div class="go_home">
		<?php if(($page!='home')&&($page!='')) : ?>
			 <a href="./index.php" class="logo_home click" data-toggle="tooltip" data-placement="right" title="go back home"><?php echo file_get_contents("img/logo.svg"); ?></a>
    		 <?php else : ?>
         		<span data-toggle="tooltip" data-placement="right" title="What is this all about?">
                    <a href="#about" class="logo_home click" data-toggle="modal" data-target="#aboutModal">
                        <?php echo file_get_contents("img/logo.svg"); ?>
                    </a>
                </span>
    	<?php endif; ?>
    </div>                     


<!-- NAVIGATION -->   
	<div id="sound_options">
   	    <a id="onoff" class="click" value="on" data-index="2"><img src="./img/audio-on.svg" /></a>
    </div>
    
	<?php include("./includes/nav.inc.php"); ?>
    
  
 <!-- EXTRA NAVIGATION FOR SCENES -->  
	<?php
    if(isset($_GET['page'])){ 
        switch($_GET['page']){
            case "canyon": $previous_scene="./index.php?page=canyon"; $next_scene="./index.php?page=cemetery"; break;
            case "cemetery": $previous_scene="./index.php?page=canyon"; $next_scene="./index.php?page=eyre"; break;
			case "eyre": $previous_scene="./index.php?page=cemetery"; $next_scene="./index.php?page=home"; break;
        } 
    }
    ?>
    
     <div id="extra_nav"> 
        <?php if(in_array($page, $scrolling)) : ?>
        	 <a href="<?php echo $previous_scene;?>" class="scene_arrow click previous" data-toggle="tooltip" data-placement="right" title="previous book">
			 	<?php echo file_get_contents("./img/fancy_arrow2.svg"); ?>
             </a>
             <a href="<?php echo $next_scene;?>" class="scene_arrow click next" data-toggle="tooltip" data-placement="left" title="next book">
             	<?php echo file_get_contents("./img/fancy_arrow2.svg"); ?>
             </a>
		<?php endif; ?>
     </div>       
        
 <!-- ABOUT MODAL -->
	<?php include("./includes/about.inc.php"); ?>
        
 <!-- HELP MODAL -->
	<?php include("./includes/help.inc.php"); ?>
    
 <!-- CONTACT MODAL -->
	<?php include("./includes/contact.inc.php"); ?>
    
<!-- BOOKLIST MODAL-->
	<?php include("./includes/booklist.inc.php"); ?>
