    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
      <?php 
      	foreach($cupnoodle as $row):
      ?>
        <div class="col-md-4">
          <a href="/cup/info/<?=$row->cupnoodleidx?>">
          	<img src="<?=$row->filepath?>">
          	<h2><?=$row->name?></h2>
          	<p><?=$row->rate?></p>
          </a>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      <?php endforeach; ?>
      <hr>

    </div>