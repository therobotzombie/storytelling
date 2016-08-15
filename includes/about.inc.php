<!-- ABOUT MODAL  ----------------------------------------->
<div class="modal modal-fullscreen fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="logo_small"><?php echo file_get_contents("./img/logo.svg"); ?></div>
            <h1 class="modal-title" id="myModalLabel">What is this all about?</h1>
          </div>
          
          <div class="modal-body">
                <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="leadtext">
                                <span class="firstletter">D</span>o you know that feeling when you're so captured by a book that you forget you're actually reading? 
                                Well I do and I think it's probably the best feeling in the world. 
                                </p>
                                <p>
                                On your way into the depths of this site, you will discover illustrated scenes and quotes from selected books. 
                                Just pick any book you like from the <a href="./index.php?page=home#bookshelf">bookshelf</a> or 
                                start right <a href="./index.php?page=canyon">here</a> and then just 
                                keep on <em>scrolling*</em> to see the magic happen! If you want to find out more about the books, check out this 
                                <a href="#booklist" data-toggle="modal" data-target="#booklistModal" data-index="">list</a>.<br/>
                                </p>
                                <p>                               
                                 * Need <a href="#help" data-toggle="modal" data-target="#helpModal" data-index="6">help</a> with the navigation?<br/>
                                </p>
                                
								<?php 
									// random quotes
									  $quotes[] = "But reading, and particularly the reading of fiction, encourages us to view the world in new and challenging ways...";
									  $quotes[] = "It's up to you how you waste your time and money. <br/>I'm staying here to read: life's too short.";
									  $quotes[] = "I remembered that the real world was wide, and that a varied field of hopes and fears, of sensations and excitments, 
									   awaited those who had the courage to go forth into it's expanse, to seek real knowledge of life amidst it's perils";
									  $quotes[] = "Books are mirrors: <br/>You only see in them what you already have inside you.";
									  $book[] = "The Book of Lost Things by John Connolly";
									  $book[] = "The Shadow of The Wind by Carlos Ruiz Zafón";
									  $book[] = "Jane Eyre by Charlotte Brontë";
									  $book[] = "The Shadow of The Wind by Carlos Ruiz Zafón";
  									  $random_number = rand(0,count($quotes)-1);
								?>
                                <blockquote>
                                    "<?php echo ($quotes[$random_number]); ?>"
                                </blockquote>
                                <span class="author"><?php echo ($book[$random_number]); ?></span><br/>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                            <a href="#moreinformation" role="button" title="read more about this project" class="btnlink" data-toggle="collapse" data-target="#moreinformation" 
                            aria-expanded="false" aria-controls="moreinformation">about this project <i class="fa fa-angle-down"></i></a><br/>  <br/>  

							<div class="collapse" id="moreinformation">
                               <p>
                                    <em> <span class="firstletter">W</span>e‘re All Stories</em> is an interactive website, merging modern web technologies 
                                    with the art of storytelling and a passion for books. 
                                    The combination of various multimedia contents, such as animation, illustration, typography, music and sound effects, allow selected book 
                                    scenes to come to life and offer an unique visual and auditory experience. A world of fairy tales and fiction, which can be explored 
                                    according to the user’s own wishes. </p>
                                    
                                    <p>From classic books like Charlotte Brontë’s <em>Jane Eyre</em> to contemporary fantasy novels like <em>The Book of Lost Things</em> &ndash; 
                                    this small online library offers everyone a glimpse into the fascinating world of fiction and, ideally, encourages the viewer to find out more about the books. 
                                    <br/><br/>
                                    <a href="downloads/wereallstories_by_lauraredeker.pdf" title="download exposé (en/de)" target="_blank"><i class="fa fa-download"></i> 
                                    download exposé (en/de)</a><br/><br/>  
                                    </p>
                                    </div>
                               </div> 
                        </div>

                    </div>
              </div>
              
          
        <div class="modal-footer">
        </div>

         
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->