<form method="post"
      action="http://www.scott-media.com/test/form_display.php"
      id="contact_info"
      name="contact_info"
      autocomplete="on"
      >

  <fieldset><!--first fieldset-->
    <legend>Personal Info</legend>
    <p><!--First name text type-->
    <label for="first_name" class="beforeit">First Name</label>
    <input type="text"
         id="first_name"
         name="first_name"
         placeholder="Your First Name"
         required/>
    </p>
    <p><!--last name text type-->
      <label for="last_name">Last Name</label>
      <input type="text"
             id="last_name"
             name="last_name"
             placeholder="Your Last Name"
             />
    </p>
    <p><!--email address this is good-->
      <label for="subject_text" class="beforeit">Subject</label>
      <input type="text"
             name="subject_text"
             placeholder="Subject"
             id="subject_text"
             required/>
    </p>
    <p><!--email address this is good-->
      <label for="email_address" class="beforeit">Email Address</label>
      <input type="email"
             name="email_address"
             id="email_address"
             placeholder="name@domain.com"
             required/>
    </p>

    <!--tel number-->
    <p><!--email address this is good-->
      <label for="tel_number">Tel. Number</label>
      <input type="tel"
             name="tel_number"
             id="tel_number"
             placeholder="(204) 555-1234"
             />
    </p>
    <p><!--email address this is good-->
      <label for="cel_number">Cell Number</label>
      <input type="tel"
             name="cel_number"
             id="cel_number"
             placeholder="Ex. (204) 555-1234"/>
    </p>
    <!--tel number end-->

    <!--text-input thing-->
    <p><!--send me comments-->
    <label for="comments" class="beforeit">Message</label><br />
    <textarea name="comments"
              id="comments"
              rows="5"
              cols="45"
              accesskey="s"
              title="Use Accesskey 's'"
              placeholder="Message"
              required></textarea>
    </p>
  </fieldset>

  <!--buttons-->
  <p><!--submit  button-->
    <input type="submit"
           value="Send form"
           id="send_button"
           />

    <input type="reset"
           value="clear form" />
  </p><!--reset-->
</form>
