<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Share something</h3>
  </div>
  <div class="panel-body">
    <form class="" action="<?php $_SERVER['PHP_SELF']?>" method="post">
      <div class="form-group">
        <label for="">Share Title</label>
        <input type="text" name="title" class="form-control" value="">
      </div>
      <div class="form-group">
        <label for="">Body</label>
        <textarea name="body" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="">Link</label>
        <input type="text" name="link" class="form-control" value="">
      </div>
      <a class="btn btn-danger" href="<?php echo ROOT_URL; ?>shares">Cancel</a>
      <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
    </form>
  </div>
</div>
