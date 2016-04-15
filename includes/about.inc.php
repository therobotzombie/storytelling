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
                                <p>
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
									  $book[] = "The Book of Lost Things";
									  $book[] = "The Shadow of The Wind";
									  $book[] = "Jane Eyre";
									  $book[] = "The Shadow of The Wind";
  									  $random_number = rand(0,count($quotes)-1);
								?>
                                <blockquote>
                                    "<?php echo ($quotes[$random_number]); ?>"
                                </blockquote>
                                <span class="author"><?php echo ($book[$random_number]); ?></span>
                                <p>

                                
                            </div>
                        </div> <!-- / row -->      
                    </div>
              </div>
        <div class="modal-footer">
        </div>
         
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->