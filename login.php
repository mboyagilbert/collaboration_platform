<?php
  include_once "partials/header.php"
?>
<div class="cont0">
    <div class="cont20 d-flex justify-content-center align-items-center t07">
    
        <div class="text-center text-light w-70">
            <h1 class="text-center mt-5" >
               LOGIN HERE
            </h1>
         
        </div>
    </div>
</div>
<!-- END HEADER -->

<!-- BODY -->
<div class=" d-flex justify-content-center align-items-center ">
   <div class="text-center text-dark w-100">
            <h1 class="text-center p-3">
                <span class="p0 px-3">LOGIN TO</span>YOUR ACCOUNT..
            </h1>
           
        </div>
</div>

<div class="help_form p-5">
<form action="php/login.php" method="post">
<h3 class="text-center ">Login to your account to get access to our..</h3>
<div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text"name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
  </div>

 
  <div class="form-group">
    <label for="exampleInputPassword1 mt-3">Password</label>
    <input type="password"name="pass" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
  </div>
 
  <button type="submit"name="login" class="btn btn-primary form-control my-4">LOGIN</button>

  <p class="text-center">Don't have an account <span><a href="registration.php">Register Here!!</a> </span></p>
</form>
</div>
<!-- END BODY -->

<?php include_once "partials/footer.php"?> 