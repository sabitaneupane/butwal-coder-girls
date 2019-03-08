 <footer>
   <div id="butwalcodergirls_contactus">
      <div id="contactBg"  class="sectionPadding">
        <div class="container">
          <center>  <h1 class="butwalcodergirls_section_head titleFontFormat"><span>  Contact us  </span>  </h1> </center>
          <div class="row sectionTopPadding">
              <div class="col-md-6"> 
                 <div id="addressinfo">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xm-12"> 
                        <div class="contactInfoBox"> 
                          <center> 
                            <p> <i class="fa fa-map-marker facustom" aria-hidden="true"></i> </p>
                            <p>Address </p>
                            <p> Butwal 15, belbas </p> 
                         </center>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12"> 
                        <div class="contactInfoBox"> 
                          <center> 
                            <p> <i class="fa fa-phone facustom" aria-hidden="true"></i> </p>
                            <p> Phone Number </p>
                            <p> 3434346346 </p> 
                         </center>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12"> 
                        <div class="contactInfoBox"> 
                          <center> 
                            <p> <i class="fa fa-mobile facustom" aria-hidden="true"></i> </p>
                            <p> Mobile Number </p>
                            <p> 432323423 </p> 
                         </center>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12"> 
                        <div class="contactInfoBox"> 
                          <center> 
                            <p> <i class="fa fa-envelope facustom" aria-hidden="true"></i> </p>
                            <p>Email </p>
                            <p>butwalcodergirls@gmail.com </p> 
                         </center>
                        </div>
                      </div>

                    </div>
                  </div>
              </div>

              <div class="col-md-6"> 
                  <div class="contactinfo">
                    <form>
                      <div class="form-group">
                           <label class="control-label col-sm-4" for="name">Name:</label>
                           <div class="col-sm-8">
                             <input type="text" class="form-control"  name="name" id="name" placeholder="Enter name">
                           </div>
                      </div>
                       <div class="form-group">
                           <label class="control-label col-sm-4" for="email">Email:</label>
                           <div class="col-sm-8">
                             <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                           </div>
                      </div>
                      <div class="form-group">
                           <label class="control-label col-sm-4" for="message">Message:</label>
                           <div class="col-sm-8">
                             <textarea  class="form-control" id="message" name="message" placeholder="Enter message"> </textarea>
                           </div>
                      </div> 
                     <div class="clearfix"></div>
                     <div class="form-group"> <br>
                        &nbsp;&nbsp;<button type="submit" id="messageSubmit" class="btn btn-primary pull-right">Submit</button>
                      </div>
                       
                    </form>
                  </div>
              </div>
            
          </div>
        </div>
      </div>
   </div>
   <div id="butwalcodergirls_copyright" >
        <div class="container">
          <div class="row sectionTopPadding">
              <div class="col-md-6"> 
                 <div id="copyrightinfo" class="pull-left">
                    <p> Copyright &copy; All reserved - 2017</p>
                  </div>
              </div>

              <div class="col-md-6"> 
                  <div id="developmentinfo" class="pull-right">
                    <p> Developed by: <a href="" target="_blank"> Sabita Neupane </a> </p>
                  </div>
              </div>
          </div>
          <br><br>
        </div>
   </div>
   <div class="clearfix"> </div>
 </footer>
</div>
<!-- ************* wrapper ends ******************* --> 

<script>
  AOS.init({
    easing: 'ease-in-out-sine',
    disable: 'mobile'
  });
  jQuery(function($) {
  	$('.typist').typist({
  		speed: 15,
  		text: 'We are highly focus to encourage innovative, creative and great ideas of girls. '
  	});
  });

</script>

<script>
       $(document).ready(function(){
           $("#navUl .navlink").on('click', function(event) {
             event.preventDefault();
             var hash = this.hash;
             $('html, body').animate({
                scrollTop: $(hash).offset().top
             }, 1600, function(){
                window.location.hash = hash;
             });
           });
         })
   </script>


<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>