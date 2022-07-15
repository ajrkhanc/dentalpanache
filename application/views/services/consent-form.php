<script>
   function registerUser() {
         event.preventDefault()
         
         document.getElementById("submitbuttonform").value = "Submitting form...."

         const xhttp = new XMLHttpRequest();
         xhttp.onload = function() {
            // console.log(this.responseText.status);
         }
         xhttp.open("Post", 'https://bmelectrician.com/blanchard/wp-json/contact-form-7/v1/contact-forms/30651/feedback');
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
         xhttp.send("clinic-name=" + event.target.clinicname.value +
            "&your-address=" + event.target.message.value +
            "&checkbox=" + event.target.checkbox1.value +
            "&NAME=" + event.target.name.value +
            "&signaturethumpimpression=" + event.target.signaturethumpimpression.value +
            "&date-=" + event.target.date.value)

      
   }
</script>

<div class="pagebanner">
    <div>
        <img src="<?php echo base_url();?>assets/images/banner/consern-form-bg.jpg" alt="dental implants" >
    </div>
</div>

<section class="contact-area ppt-50 ppb-50">
   <div class="container">      
      <div class="contact-form">
         <form id="contactForm" method="post" onSubmit=registerUser()>
            <div class="row">
            <h3 class="headingh3 text-center ppb-20">Consent Form</h3>
               <div class="col-sm-12">
                  <div class="form-group">
                     <input type="text" name="clinicname" id="clinicname" class="form-control" required="" data-error="Please enter your Clinic Name" placeholder="Clinic Name*">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
                 <div class="col-sm-12">
                  <div class="form-group">
                     <textarea name="message" class="form-control" id="message" cols="30" rows="5" data-error="Write your Address" required="" placeholder="Address*"></textarea>
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               
               <div class="col-sm-12">
                  <div class="form-group textlefta">
                      <p class="formtext"><b>01.</b> I understand the COVID-19 virus has a long incubation period during which carriers of the virus may not show symptoms and still be highly contagious. It is impossible to determine who has it and who does not, given the current limits in virus testing.</p>
                      <p class="formtext"><b>02.</b> If I am an asymptomatic carrier or an undiagnosed patient with COVID 19, I suspect it may endanger doctors and clinic staff. It is my responsibility to take appropriate precautions and to follow the protocols prescribed by them.</p>
                      <p class="formtext"><b>03.</b> I am aware that I may get an infection from the clinic or from a doctor, and I will take every precaution to prevent this from happening, but I will not at all hold doctors and clinic staff accountable if such infection occurs to me or my accompanying persons.</p>
                      <p class="formtext"><b>04.</b> In case I or my attendant get the COVID 19 infection after the visit to the clinic, I will inform the clinic authorities at the earliest, so that appropriate tracking of the patients/attendants and clinic staff present on the day of my visit can be done.</p>
                      <p class="formtext mmb0"><b>05.</b> I confirm that I am not presenting any of the following symptoms of COVOID-19 listed below:</p>
                      
            
                     <input type="checkbox" id="fever" name="checkbox1" value="fever"/>
                     <label for="fever">Fever</label><br/>
                     <input type="checkbox" id="shortness_of_breath" name="checkbox1" value="shortness of breath"/>
                     <label for="shortness_of_breath">Shortness of Breath</label><br/>
                     <input type="checkbox" id="dry_cough" name="checkbox1" value="dry cough"/>
                     <label for="dry_cough">Dry Cough</label><br/>
                     <input type="checkbox" id="loss_of_sense_of_taste_or_smell" name="checkbox1" value="loss of sense of taste or smell"/>
                     <label for="loss_of_sense_of_taste_or_smell">Loss of Sense of Saste or Smell</label><br/>
                     
                     <p class="formtext"><b>06.</b> I understand the government recommends social distancing of at least 6 feet for a period of 14 days to anyone who has shown symptoms or tested positive.</p>
                     <p class="formtext"><b>07.</b> I verify that I have not travelled outside of India in the past 14 days to countries that have been affected by COVID-19.</p>
                     <p class="formtext"><b>08.</b> I verify that I have not travelled domestic within India by commercial airline, bus, or train within the past 14 days.</p>
                     <p class="formtext"><b>09.</b> I verify the information I have provided on this form is truthful and accurate. I knowingly and willingly consent to treatment completed during the COVID-19 pandemic. If I hide my facts and relevant details and because of my knowing or unknowing behaviour or action the clinic staff gets infected, I may be held responsible for appropriate compensation in the court of law.</p>
                     
                  </div>
               </div>
               
               <div class="col-sm-12">
                  <div class="form-group">
                     <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your email" placeholder="Name*">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="form-group">
                     <input type="text" name="signaturethumpimpression" id="signaturethumpimpression" data-error="Please enter your number" class="form-control" placeholder="signature/thump impression">
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="form-group">
                     <input type="date" name="date" id="date" class="form-control" required="" data-error="Please enter your location" placeholder="Date">
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