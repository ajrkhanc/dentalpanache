<script>
   function registerUser() {
         event.preventDefault()
         
         document.getElementById("submitbuttonform").value = "Submitting form...."

         const xhttp = new XMLHttpRequest();
         xhttp.onload = function() {
            // console.log(this.responseText.status);
         }
         xhttp.open("Post", 'https://bmelectrician.com/blanchard/wp-json/contact-form-7/v1/contact-forms/30650/feedback');
         xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;");
         xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4) {
               var res = JSON.parse(xhttp.responseText);
               console.log(res)
               if (res.status == "mail_sent") {
                  document.getElementById("contactForm").reset();

                  document.getElementById("showlabel").innerHTML = "Thank you for submitting your details. Our subject matter experts will connect you within 24 working hours.";

                  document.getElementById("showlabel").style.display = "block";
                  window.setTimeout(function() {
                     window.location.href = "<?php echo base_url();?>thank-you"
                  }, 3000);

               } else {
                  document.getElementById("showlabel").innerHTML = "There was a problem with the request.";
                  document.getElementById("showlabel").style.display = "block";

               }
            }
         };
         xhttp.send("your-name=" + event.target.name.value +
            "&your-email=" + event.target.email.value +
            "&phoneno=" + event.target.phone_number.value +
            "&location=" + event.target.location.value +
            "&organisation=" + event.target.organisation.value +
            "&your-message=" + event.target.message.value)

      
   }
</script>


<div class="pagebanner">
    <div>
        <img src="<?php echo base_url();?>assets/images/banner/contact-1.png" alt="dental implants" >
    </div>
</div>

<section class="contact-area ppt-50">
   <div class="container">      
      <div class="contact-form">
         <form id="contactForm" method="post" onSubmit=registerUser()>
            <div class="row">
            <h3 class="headingh3 text-center ppb-20">Book Your Appointment</h3>
               <div class="col-sm-6">
                  <div class="form-group">
                     <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name*">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="form-group">
                     <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email*">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="form-group">
                     <input type="text" name="phone_number" id="phone_number" required maxlength="10" minlength="10" data-error="Please enter your number" class="form-control" placeholder="Phone*">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="form-group">
                     <input type="text" name="location" id="location" class="form-control" required data-error="Please enter your location" placeholder="Location*">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>

               <div class="col-sm-12">
                  <div class="form-group">
                     <input type="text" name="organisation" id="organisation" class="form-control" required data-error="Please enter your Organisation" placeholder="Organisation*">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>

               <div class="col-sm-6-12">
                  <div class="form-group">
                     <textarea name="message" class="form-control" id="message" cols="30" rows="5" data-error="Write your message" placeholder="Your Message"></textarea>
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-sm-12">                  
                  <input id="submitbuttonform" class="default-btn btn-bg1 disabled" type="submit" value="Send Message" />
                  <div class="clearfix"></div>
                  <p id="showlabel" style="display:none"></p>
               </div>
            </div>
         </form>
      </div>
       
   </div>
</section>

<section class="features-area-two ppt-50 ppb-40">
   <div class="container conticon">
      <div class="row">
      <h3 class="headingh3 text-center ppb-20">Contact Us</h3>
         <div class="col-lg-3 col-sm-6">
            <div class="single-features-box">
               <div class="content">
                  <div class="icon">
                  <img src="<?php echo base_url();?>assets/images/icon/address.png" alt="dental implants" >
                  </div>
                  <h3>
                     <a href="#">Address</a>
                  </h3>
                  <p>398, SECTOR 40 GURUGRAM-122002</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="single-features-box">
               <div class="content">
                  <div class="icon">
                  <img src="<?php echo base_url();?>assets/images/icon/address.png" alt="dental implants" >
                  </div>
                  <h3>
                     <a href="#">Phone No.</a>
                  </h3>
                  <a href="tel:+917290073613">+917290073613,</a> <a href="tel:+911244284746">+911244284746</a> 
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="single-features-box">
               <div class="content">
                  <div class="icon">
                  <img src="<?php echo base_url();?>assets/images/icon/email.png" alt="dental implants" >
                  </div>
                  <h3>
                     <a href="#">E-mail</a>
                  </h3>
                  <a href="mailto:smile@dentalpanache.com">smile@dentalpanache.com</a>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="single-features-box">
               <div class="content">
                  <div class="icon">
                  <img src="<?php echo base_url();?>assets/images/icon/clock.png" alt="dental implants" >
                  </div>
                  <h3>
                     <a href="#">Opening hours</a>
                  </h3>
                  <p>Monday –Saturday: 9:00am–1:30pm, 3:30pm-6:30pm Sunday: By Appointment Only</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>



<div class="eye-care-about-area ppt-10 ppb-20">
   <div class="container">
      <div class="row row-eq-height">
      <div class="col-sm-6 boxshd">
            <div class="paddingalign">               
               <h5 class="headingh5 lineheioght">To ensure the most efficient consultation process, provide us with the following for initial assessment and guidance :</h5>
               <div class="eye-care-about-content ppl-0">
                    <ul class="list">
                        <li><i class="bx bx-check"></i> 01. Photos of your teeth (Minimum 4 photographs)</li>
                        <li><i class="bx bx-check"></i> 02. A copy of your OPG x-ray.</li>                                               
                    </ul>                    
                </div>                
                
               <p class="ppt-30">
               This can be inexpensively obtained from your local dentist and then forwarded to us.
               </p>
               <p>Please email the above as attachments to <a href="mailto:smile@dentalpanache.com">smile@dentalpanache.com</a></p>
            </div>
         </div>
         <div class="col-sm-6 border5px">
            <div class="eye-care-about-image">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d449013.6873280154!2d77.054696!3d28.451845!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x14720741f8afebfb!2sDental%20Panache!5e0!3m2!1sen!2sus!4v1646292761968!5m2!1sen!2sus" width="100%" height="370" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
         </div>
                  
      </div>
   </div>
</div>