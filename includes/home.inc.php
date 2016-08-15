<div id="fullpage">
    <!-- FIRST PAGE - INTRODUCTION -->
    <section class="section" id="section0">  
          <div class="border" id="introduction">
                <h1>We're All Stories</h1>
                <h2>In The End</h2>
                <h3>a storytelling website</h3>
                <span class="visible-md visible-lg"><a href="#bookshelf" title="scroll down">scroll down</a></span>
                <div class="arrow animated bouncing"></div>   
           </div>   
    </section>  
    <!-- SECOND PAGE - BOOKSHELF -->
    <section class="section" id="section1">
            <div class="type-wrap">
                <div id="typed-strings">
                	<p>are you <strong>ready?</strong></p>
                    <p>pick a <strong>book</strong> ...</p>
                </div>
                <span id="typed" style="white-space:pre;"></span> 
           </div>
            <div id="bigbookshelf">
                 <div class="row" >
                    <div class="bookshelf one">
                    	<?php echo file_get_contents("./images/books/row1.svg"); ?>     
                    </div>      
                 </div>                
                 <div class="row" >   
                    <div class="bookshelf two">
                    	<?php echo file_get_contents("./images/books/row2.svg"); ?>        
                    </div>            
                 </div>
                 <div class="row" >
                    <div class="bookshelf three">
                    	<?php echo file_get_contents("./images/books/row3.svg"); ?>      
                    </div>
                 </div>
          </div>
    </section>
    <!-- FOOTER -->
    <section class="section" id="section2">
        <?php include("./includes/footer.inc.php"); ?>
    </section>
</div>


<!-- type animation -->       
	 <script>
		$(function() {
			$("#typed").typed({
				stringsElement: $('#typed-strings'),
				typeSpeed: 80,
				startDelay: 3200,
				backDelay: 3000,
				loop: true	,
				contentType: 'html', // or text
				loopCount: true
			});
		});
		function newTyped(){ /* A new typed object */ }
    </script>
