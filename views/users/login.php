LOGIN
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Login</h3>
  </div>
  <div class="panel-body">
    <form class="" action="<?php $_SERVER['PHP_SELF']?>" method="post">
      <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" value="">
      </div>
      <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control" value="">
      </div>
      <a class="btn btn-danger" href="<?php echo ROOT_URL; ?>">Cancel</a>
      <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
    </form>
  </div>
</div>
