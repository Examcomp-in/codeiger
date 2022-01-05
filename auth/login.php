<?php include'../components/header.php'; ?>
<title> Login</title>
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



<p class="font-600 gb oa ch ob oc od du oe of og dy oh ht hu hv hw bp " style="font-weight: 500;  font-family: Helvetica, Arial, Sans-Serif; font-weight:600; font-size:24px">Log in now</p>
<form class="pl-2 pr-2 pb-5 " method="post" action="login_check.php">
  
  <?php echo "<p style='color:red'>$_GET[error]</p>"; ?>
  <div class="form-group">
    <label for="inputAddress">Phone</label>
    <input type="text"name="phone" class="form-control" id="inputAddress" placeholder="1234567890">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Password</label>
    <input type="password" name="password" class="form-control" id="inputAddress2" placeholder="**************">
  </div>
<p>Don't remember your password? <u><a class="text-black">Forgot Password</a></u> or having another issue, feel free to contact us at <u> codeiger@gmail.com</u></p>

<div class="p-3">
<div class="row" style="height:50px">
<button class="btn btn-dark bg-dark pt-2 pb-2 pr-4 pl-4">Signup</button>
<p class= "pt-2 pb-2 pr-4 pl-4">Don't have an account? <u><a class="text-black" style="color:black" href="https://www.codeiger.in/auth/signup.php">Signup</a></u></p>
</div>
</div>
</div>
<div class="hidden">
<img src="https://www.codeiger.in/assets/images/5.jpg" style="margin-top:-10%;overflow-x:hidden !important;height:500px">
</div>

</div>
</div>
<?php include'../components/footer.php'; ?>