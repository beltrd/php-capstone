<form method="post"
      action="?page=register"
      id="contact_info"
      name="contact_info"
      autocomplete="on"
      novalidate="novalidate"
      >

  <fieldset><!--first fieldset-->
    <legend><?=$title?></legend>
    <p><!--First name text type-->
    <label for="first_name" class="beforeit">First Name</label>
    <input type="text"
         id="first_name"
         name="first_name"
         placeholder="Your First Name"
         value="<?=(!empty($_POST['first_name'])) ? $v->esc($_POST['first_name']) : ''; ?>"/>
         <?=((!empty($errors['first_name'])) ? $v->esc($errors['first_name']) :  ' ') ?>

    </p>
    <p><!--last name text type-->
      <label for="last_name" class="beforeit">Last Name</label>
      <input type="text"
             id="last_name"
             name="last_name"
             placeholder="Your Last Name"
             value="<?=(!empty($_POST['last_name'])) ? $v->esc($_POST['last_name']) : ''; ?>"/>
             <?=((!empty($errors['last_name'])) ? $v->esc($errors['last_name']) :  ' ') ?>
    </p>
    <p><!--email address this is good-->
      <label for="street_name" class="beforeit">Street Name</label>
      <input type="text"
             name="street_name"
             placeholder="Street Name"
             id="street_name"
             value="<?=(!empty($_POST['street_name'])) ? $v->esc($_POST['street_name']) : ''; ?>"/>
             <?=((!empty($errors['street_name'])) ? $v->esc($errors['street_name']) :  ' ') ?>
    </p>
    <p><!--email address this is good-->
      <label for="city_name" class="beforeit">City Name</label>
      <input type="text"
             name="city_name"
             id="city_name"
             placeholder="City Name"
             value="<?=(!empty($_POST['city_name'])) ? $v->esc($_POST['city_name']) : ''; ?>"/>
             <?=((!empty($errors['city_name'])) ? $v->esc($errors['city_name']) :  ' ') ?>
    </p>

    <!--tel number-->
    <p><!--email address this is good-->
      <label for="postal_code" class="beforeit">Postal Code</label>
      <input type="text"
             name="postal_code"
             id="postal_code"
             placeholder="K2Y 0K3"
             value="<?=(!empty($_POST['postal_code'])) ? $v->esc_attc($_POST['postal_code']) : ''; ?>"/>
             <?=((!empty($errors['postal_code'])) ? $v->esc($errors['postal_code']) :  ' ') ?>
    </p>
    <p><!--email address this is good-->
      <label for="province_name" class="beforeit">Province Name</label>
      <input type="text"
             name="province_name"
             id="province_name"
             placeholder="Province Name"
             value="<?=(!empty($_POST['province_name'])) ? $v->esc_attc($_POST['province_name']) : ''; ?>"/>
             <?=((!empty($errors['province_name'])) ? $v->esc($errors['province_name']) :  ' ') ?>
    </p>
    <!--tel number end-->

    <!--text-input thing-->
    <p><!--email address this is good-->
      <label for="country_name" class="beforeit">Country Name</label>
      <input type="text"
             name="country_name"
             id="country_name"
             placeholder="Country Name"
             value="<?=(!empty($_POST['country_name'])) ? $v->esc_attc($_POST['country_name']) : ''; ?>"/>
             <?=((!empty($errors['country_name'])) ? $v->esc($errors['country_name']) :  ' ') ?>
    </p>

    <p><!--email address this is good-->
      <label for="phone_num" class="beforeit">Phone Number</label>
      <input type="text"
             name="phone_num"
             id="phone_num"
             placeholder="Phone Number"
             value="<?=(!empty($_POST['phone_num'])) ? $v->esc_attc($_POST['phone_num']) : ''; ?>"/>
             <?=((!empty($errors['phone_num'])) ? $v->esc($errors['phone_num']) :  ' ') ?>
    </p>
    <p><!--email address this is good-->
      <label for="email" class="beforeit">Email</label>
      <input type="email"
             name="email"
             id="email"
             placeholder="name@host.ca"
             value="<?=(!empty($_POST['email'])) ? $v->esc_attc($_POST['email']) : ''; ?>"/>
             <?=((!empty($errors['email'])) ? $v->esc($errors['email']) :  ' ') ?>
    </p>
    <p><!--email address this is good-->
      <label for="password" class="beforeit">Password</label>
      <input type="password"
             name="password"
             id="password"
             placeholder="Password"
             value="<?=(!empty($_POST['password'])) ? '' : '';?>"/>
             <?=((!empty($errors['password'])) ? $errors['password'] :  '')?>
    </p>
    <p><!--email address this is good-->
      <label for="con_password" class="beforeit">Confirm Password</label>
      <input type="password"
             name="con_password"
             id="con_password"
             placeholder="Password"
             value="<?=(!empty($_POST['con_password'])) ? '' : ''; ?>"/>
             <?=((!empty($errors['con_password'])) ? ($errors['con_password']):  '') ?>
    </p>
  </fieldset>

  <!--buttons-->
  <p><!--submit  button-->
    <input type="submit"
           value="Register"
           id="register_btn"
           />

    <input type="reset"
           value="clear form" />
  </p><!--reset-->
</form>
