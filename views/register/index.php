<?php if(($data!=null)){ echo "<div class='container-fluid mt-2'><div class='alert alert-warning text-center'>
<p>$data</p>
</div>
</div>";}; ?>
<div class="container-fluid mt-4 pt-4">
<div class="row justify-content-md-center">
<form action="#" method="post">
<div class="form-group">
    <h3 class="text-center text-light p-2 bg-success">Register</h3>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enter your password</label> 
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-danger mt-2">Register</button>
</form>
</div>
</div>