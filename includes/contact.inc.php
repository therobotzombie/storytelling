<!-- CONTACT MODAL  ----------------------------------------->
<div class="modal modal-fullscreen fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel">Get in touch</h1>
        <h4>I'll get back to you as soon as possible.</h4>
      </div>
      
      <div class="modal-body">
			<div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-md-offset-2">
							
                            <div id="form-messages"></div>

                             <form id="contact-form" class="center-block" action="./includes/mailer.php" method="post">
                                    <div class="field">
                                            <label>
                                                    <span>Name</span>
                                                    <input name="senderName" placeholder="Please enter your name" type="text" class="form-control" maxlength="50" tabindex="1" required autofocus>
                                            </label>
                                    </div>
                                    <div class="field">
                                            <label>
                                                    <span>Email</span>
                                                    <input name="senderEmail" placeholder="Please enter your email address" type="email" class="form-control" tabindex="2" 
                                                    maxlength="100" required>
                                            </label>
                                    </div>
     
                                    <div class="field">
                                            <label>
                                                    <span>Website</span>
                                                    <input name="website" placeholder="Begin with http://" type="url" class="form-control" maxlength="100" tabindex="3">
                                            </label>
                                    </div>
                                    <div class="field">
                                            <label>
                                                    <span>Message</span>
                                                    <textarea name="message" placeholder="Include all the details you can" tabindex="4" class="form-control" maxlength="10000" required></textarea>
                                            </label>
                                    </div>
                                    <div class="field">
                                            <button name="submit" class="btn btn-default" type="submit" id="contact-submit" tabindex="5">Send Email</button>
                                    </div>
                            </form>
                        </div>
                    </div> <!-- / row -->      
          		</div>
          </div>

        <div class="modal-footer">
		
        </div>
         
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

