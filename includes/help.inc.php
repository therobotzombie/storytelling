<!-- ABOUT MODAL  ----------------------------------------->
<div class="modal modal-fullscreen fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h1 class="modal-title" id="myModalLabel">How do I navigate?</h1>
          </div>
          
          <div class="modal-body">
                <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="info">                                            
                                    <div class="col-xs-12 col-sm-4">
                                        <div class="img"><?php echo file_get_contents("./img/mouse.svg"); ?></div>
                                        <h5>Mouse</h5>
                                        You can either scroll on your own with your <strong>mouse wheel</strong> or <strong>drag the scrollbar</strong> on the right.
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <div class="img"><?php echo file_get_contents("./img/autoplay.svg"); ?></div>
                                        <h5>Autoscroll</h5>
                                        <ul>
                                            <li>Open the side menu  <i class="fa fa-navicon"></i>, click <em>autoplay on</em></li>
                                            <li>.. or press the <strong>right arrow-key</strong> on your keyboard! To stop the autoplay, just press the left arrow-key.</li> 
                                        </ul>
                                    </div>                                 
                                     <div class="col-xs-12 col-sm-4">
                                        <div class="img"><?php echo file_get_contents("./img/keyboard.svg"); ?></div>
                                        <h5>Keyboard</h5>
                                        You can also use the <strong>up/down arrowkeys</strong> on your keyboard to scroll up and down the page. 
                                    </div>                                    
                              
                                </div>
                            </div>
                        </div> <!-- / row -->      
                    </div>
              </div>
        <div class="modal-footer">
        </div>
         
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->