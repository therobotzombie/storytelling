<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7 ]><html id="ie6" class="ie ie-old ie-super-old"><![endif]-->
<!--[if IE 7 ]>   <html id="ie7" class="ie ie-old ie-super-old"><![endif]-->
<!--[if IE 8 ]>   <html id="ie8" class="ie ie-old ie-super-old"><![endif]-->
<!--[if IE 9 ]>   <html id="ie9" class="ie ie-old"><![endif]-->
<!--[if gt IE 9]><!--><html><!--<![endif]-->

<html>     
    <?php 
        $page = $_SERVER['REQUEST_URI']; 
        $page = str_replace('/storytelling/', '', $page);  // online:  '/'   - localhost: /storytelling/
        $page = str_replace('index.php', '', $page); 
        $page = str_replace('?page=', '', $page); 
        $page = !$page ? "" : $page;

        // for checking page types
        $no_scrolling = array('home', '', '404', 'imprint', 'disclaimer');
        $scrolling = array('cemetery', 'canyon', 'eyre');	
		$no_home = array('404', 'imprint', 'disclaimer');

        switch ( @$_GET ['page'] ) {
                case "home": $page_title = 'A Storytelling Website'; break;
				case "404": $page_title = '404! The page cannot be found.'; break;
				case "imprint": $page_title = 'Imprint / Impressum'; break;
				case "disclaimer": $page_title = 'Disclaimer / Haftungsausschluss'; break;
				case "canyon": $page_title = 'The Book of Lost Things'; break;
				case "cemetery": $page_title = 'The Shadow of The Wind'; break;
				case "eyre": $page_title = 'Jane Eyre'; break;
                default: $page_title = 'Home'; break; 
         }
    ?>
<head>
    <title>We're All Stories &middot; <?php if (isset($page_title)): ?><?php echo $page_title; ?><?php endif; ?></title>
    <?php include_once("./head-tag.php"); ?>
</head>


<body id="<?php echo $page ?>" > 

	<?php include_once("./header.php"); ?>       

    <!-- CONTENT -->
    <?php error_reporting(E_ALL ^ E_NOTICE);  ?>
    <?php
    if(isset($_GET['page'])){ 
        switch($_GET['page']){
            case "home": include_once("./includes/home.inc.php"); break;	
            case "imprint": include_once("./includes/imprint.inc.php"); break;
            case "disclaimer": include_once("./includes/disclaimer.inc.php"); break;
            case "cemetery": include_once("./includes/cemetery.inc.php"); break;
	    	case "canyon": include_once("./includes/canyon.inc.php"); break;
            case "eyre": include_once("./includes/eyre.inc.php"); break;
            case "404": include_once("./includes/404.inc.php"); break;
            default: include_once("./includes/home.inc.php"); break;
        } 
    }
    else { 
        include_once("./includes/home.inc.php"); 
    }
    ?>

	<script src="js/jquery-ui.min.js"></script> 
    <script src="js/bootstrap.min.js"></script> <!-- framework -->  
    <script src="js/jquery.jInvertScroll.js"></script> <!-- parallax effect -->  
    <script src="js/jquery.fullpage.min.js"></script> 
    <script src="js/typed.min.js"></script> <!-- typing animation  -->  
    <script src="js/fm.scrollator.jquery.js"></script> <!-- special scrollbar for scenes -->  
    <script src="js/jquery.visible.min.js"></script>
    <script src="js/jquery.easyaudioeffects.1.0.0.min.js"></script>
    <script src="js/sounds.js"></script>  <!-- sound on/off and sound effects -->  
    <script src="js/mostrar_nav.js"></script> <!-- side navigation -->  
	<script src="js/app.js"></script> <!-- contact form -->  
    <script src="js/toastr.min.js"></script> <!-- notifications -->  
    <script src="js/skrollr.min.js"></script>  <!-- scroll-activated animations -->  
    <script src="js/browser-detection.js"></script>   <!-- browser detection --> 
    <script src="js/scripts.js"></script>  <!-- custom scripts -->

    <script>
	  	// bootstrap scripts
		$("body").tooltip({ selector:'[data-toggle=tooltip]'});
		$(".modal-fullscreen").on('show.bs.modal', function() {
		 setTimeout( function() {
			$(".modal-backdrop").addClass("modal-backdrop-fullscreen");
			}, 0);
		});
		$(".modal-fullscreen").on('hidden.bs.modal', function () {
			 $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
		});
		$(".modal-fullscreen").scrollator({
			zIndex: '999999999999999' 
		});
		// initialize skrollr
		skrollr.init();
	</script>
    
            
    <script>  	
        // add these scripts only on scene-pages 
		<?php if(in_array($page, $scrolling)) : ?>
			$('#<?php echo $page;?>').scrollator({
				zIndex: '999999999999' 
			});

			$("#fakeLoader_scroll").fakeLoader({
				timeToHide: 1000  //1800
			});
			
			// horizontal scrolling 
			(function($) {
				$.jInvertScroll(['.scroll'], { 
					width: 'auto',
					height: '9000',	// the shorter, the faster the scroll
					onScroll: function(percent) { 
						console.log(percent);
					}
				});
			}(jQuery));
			
			// arrow key functions 
			$(function () {
				$(document).keydown(function(e) {
					switch(e.which) {
						case 37: // left
						$("html, body").stop();
						toastr.info('AUTOPLAY OFF   <i class="fa fa-pause"></i>');
						$('#autoplaylink').attr('value', 'off');
						$('#autoplaylink').html("<i class='fa fa-play-circle fa-fw'></i>&nbsp; Autoplay On");
						break;
				
						case 38: // up
						$("html, body").animate({ scrollTop: '-=25px' }, 10);
						break;
				
						case 39: // right
						autoScrollOn();
						break;
				
						case 40: // down
						$("html, body").animate({ scrollTop: '+=25px' }, 10);
						break;
				
						default: return; 
					}
					e.preventDefault(); // prevent the default action (scroll / move caret)
					});
				});
			 
				// reload page if window width oder height have changed
				$(function() {
					var $window = $(window);
					var width = $window.width();
					var height = $window.height();
					setInterval(function () {
						if ((width != $window.width()) || (height != $window.height())) {
							width = $window.width();
							height = $window.height();
							location.reload();
						}
					}, 500);
				});
					
		    // add these scripts only on home
			<?php elseif(in_array($page, $no_scrolling))  : ?>
				$("#fakeLoader").fakeLoader({
					timeToHide: 2200 
				});
						 
				// add these scripts only on normal pages
				<?php if(in_array($page, $no_home))  : ?>
					$('body').scrollator({
						zIndex: '9999999999999' 
					});
				<?php endif; ?>
				
		<?php endif; ?>
    </script>

</body>
</html>