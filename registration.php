<?php
  include_once "partials/header.php"
?>
<div class="cont0">
    <div class="cont20 d-flex justify-content-center align-items-center t07">
    
        <div class="text-center text-light w-70">
            <h1 class="text-center mt-5" >
               REGISTER HERE
            </h1>
         
        </div>
    </div>
</div>
<!-- END HEADER -->

<!-- BODY -->
<div class=" d-flex justify-content-center align-items-center ">
   <div class="text-center text-dark w-100">
            <h1 class="text-center p-3">
                <span class="p0 px-3">REGISTER </span>YOUR ACCOUNT..
            </h1>
           
        </div>
</div>

<div class="help_form p-5">
<form method="post" action="php/reg.php">
<h3 class="text-center ">Register to an account with us..</h3>
<div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text"name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text"name="lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text"name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email"name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1 mt-3">Password</label>
    <input type="password"name="pass1" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1 mt-3">Confirm Password</label>
    <input type="password"name="pass2" class="form-control" id="exampleInputPassword1" placeholder="Confirm password">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Register As</label>
    <select name="status" class="form-control" >
      <option>Student</option>
      <option>Evaluator</option>
      <option>Investor</option>
     
    </select>
  </div>
  <button type="submit"name="signup" class="btn btn-primary form-control my-4">REGISTER</button>

  <p class="text-center">Already have an account <span><a href="login.php">Login Here!!</a> </span></p>
</form>
</div>
<!-- END BODY -->

<?php include_once "partials/footer.php"?> 