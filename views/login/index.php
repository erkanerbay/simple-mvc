<?php if(($data!=null)){ echo "<div class='container-fluid mt-2'><div class='alert alert-warning text-center'>
<p>$data</p>
</div>
</div>";}; ?>
<div class="container-fluid mt-4 pt-4">
<div class="row justify-content-md-center">



<form action="form" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label> 
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>
</div>
</div>
<!--AJAX CHECK FORM-->
<script>

</script>