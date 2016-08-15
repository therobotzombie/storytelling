<!-- NAVIGATION  -------------------------->   
<div id="mobile-nav" class="click"><div class="nav_icon"></div></div>
<nav>
    <ul class="menu">	
    	<?php if(in_array($page, $scrolling)) : ?>
    		<li class="back click"><a href="./index.php?page=home#bookshelf" title="Go back to the bookshelf" data-index="1"><i class="fa fa-angle-left fa-fw"></i>&nbsp;  back to bookshelf</a></li>
 			<?php elseif(in_array($page, $no_scrolling)) : ?>
            <li class="back click"><a href="./index.php?page=canyon" title="Start with the first scene!" data-index="1">start exploring <i class="fa fa-angle-right fa-fw"></i></a></li>   
		<?php endif; ?>
        <li class="click"><a id="onoff_nav" value="on" data-index="2" title="Sound On/Off"><i class="fa fa-volume-off fa-fw"></i>&nbsp; Sound Off</a></li>
        <?php if(in_array($page, $scrolling)) : ?>
    		 <li class="click"><a id="autoplaylink" value="off" data-index="3" title="Turn Autoplay On"><i class="fa fa-play-circle fa-fw"></i>&nbsp; Autoplay On</a></li>
		<?php endif; ?>
        <li class="click"><a href="#help" data-toggle="modal" data-target="#helpModal" data-index="4" title="Need Help?"><i class="fa fa-question fa-fw"></i>&nbsp; Help</a></li>
        <li class="click"><a href="#about" data-toggle="modal" data-target="#aboutModal" data-index="5" title="About this Website"><i class="fa fa-info fa-fw"></i>&nbsp; About</a></li> 
        <li class="click"><a href="#booklist" id="booklist" data-toggle="modal" data-target="#booklistModal" data-index="6" title="About the Books"><i class="fa fa-book fa-fw"></i>&nbsp; Book List</a></li>
             
        <div class="logo_small"><?php echo file_get_contents("./img/logo.svg"); ?></div>
        <div class="bottomlinks">
         	<span><i class="fa fa-copyright"></i> 2015 - <?php echo date("Y"); ?> We're All Stories.</span><br/>
            <a href="#contact" id="contact" data-toggle="modal" data-target="#contactModal" data-index="7" title="Kontakt aufnehmen">Kontakt</a>
            &middot;
            <a href="./index.php?page=imprint" data-index="8" title="Impressum anzeigen">Impressum</a>
             &middot;
			<a href="./index.php?page=disclaimer" data-index="9" title="Datenschutzerklärung anzeigen">Datenschutz</a>		
			<?php include_once("./includes/sound.inc.php"); ?>
        </div>
    </ul>  
</nav> 
