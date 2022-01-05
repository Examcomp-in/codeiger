<title>Signup</title>
<?php include'../components/header.php'; ?>

<style>

@media only screen and (min-width:978px) and  (max-width: 1199px) {
 .c978{
     max-width:30% !important
 }
 .cp{
        width:70% !important;
        margin-left:200px
    }
    .bp{
        padding-left:10px
    }
}
</style>

<style>
@media only screen  and (min-width:830px) and  (max-width: 978px) {
 .c978{
     display:none
 }
 .cp{
        min-width:100% !important;
        padding-left:10%;
        padding-right:10%;
        
        align:center
    }
    .bp{
        padding-left:10px
    }
    .hidden{
        display:none
    }
}
</style>
<style>
@media only screen  and  (max-width: 830px) {
 .c978{
     display:none !important
 }
 .cp{
        min-width:100% !important;
        padding-left:10px;
        padding-right:10px;
        
        align:center
    }
    .bp{
        padding-left:10px
    }
    .hidden{
        display:none
    }
    .g40{
        min-width:100%
    }
    .mt-5{
        padding-top:0px !important
    }
}
</style>
<div class="main" style="overflow-x:hidden !important">
<div class="container col-10 mt-5">
<div class="row  c878">
<div class="col-6 mt-5 c978">
<h1 class="font-600 gb oa ch ob oc od du oe of og dy oh ht hu hv hw bp" style="font-weight: 500;">Learn with Codeiger</h1>
<p class="mt-4">Creating the world of tommorow</p>
</div>

<div class="col-5 mt-5 cp" style="background:white">



<p class="font-600 gb oa ch ob oc od du oe of og dy oh ht hu hv hw bp " style="font-weight: 500;  font-family: Helvetica, Arial, Sans-Serif; font-weight:600; font-size:24px">Sign up now</p>
<?php echo "<p style='color:red;'>$_GET[error]</p>"; ?>
<form class="pl-2 pr-2 pb-5 " method="post" action="signup_check.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Phone</label>
      <input type="phone" name="phone" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" name="city" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" name="state" class="form-control">
          <option>...</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
    
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input name="pin" type="text" class="form-control" id="inputZip">
    </div>
  </div>
<p>By proceeding, I agree to Codeiger's <u>Terms of Use</u> and acknowledge that I have read the <u>Privacy Policy</u>.</p>
<div class="p-3">
<div class="row" style="height:50px">
<button class="btn btn-dark bg-dark pt-2 pb-2 pr-4 pl-4">Signup</button>
<p class= "pt-2 pb-2 pr-4 pl-4">already have an account? <u><a class="text-dark" href="https://www.codeiger.in/auth/login.php">Login</a></u></p>
</div>
</div>
</div>
<div class="hidden">
<img src="https://www.codeiger.in/assets/images/5.jpg" style="margin-top:-20%;overflow-x:hidden !important;height:400px">
</div>

<div class="pl-3 pr-3 pt-5 pb-5 container col-12">
<h3>Learn when you want</h3>
<div class="row pt-5">
<div class="col-4 g40">
<h5><b>World Class Support</b></h5>
<p class="pt-3">Our story begins when we sign the papers with you and we are successful only when students succeed. No data means no analytics and we truly understand. Thats why our Customer Happiness team is deployed in your institute to work along with you and wor..</p>
</div>

<div class="col-4 g40">
<h5><b>Industry Standard Content</b></h5>
<p class="pt-3">Our tests and learning materials are continuously evolving. They are researched, built, recycled and recreated periodically with industry trend in mind. Our content creators are industry experts who focus on quality because we understand students doe..</p>
</div>

<div class="col-4 g40">
<h5><b>White Labelled & Mobile Ready</b></h5>
<p class="pt-3">We build and provide customized web and mobile app to complement & enhance your brand. Mobile app removes the dependency on computer labs and enables students to take the tests anytime, anywhere..</p>
</div>



<div>
</div>
</div>
</div>
</div>
</div>
<?php include'../components/footer.php'; ?>

