<div class="">
  <p>
    <a class="btn btn-success btn-share" href="<?php echo ROOT_URL; ?>shares/add">Share Something</a>
  </p>


  <?php foreach($viewmodel as $item) : ?>
    <div class="well">
      <h3><?php echo $item['title']; ?></h3>
      <small><?php echo $item['create_date']; ?></small>
      <p>
        <?php echo $item['body']; ?>
      </p>
      <p>
        <a class="btn btn-default" href="<?php echo $item['link']; ?>" target="_blank">Go to website</a>
      </p>
    </div>
  <?php endforeach; ?>
</div>
