    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
      <?php 
      	foreach($cupnoodle as $row)
      ?>
        <div class="col-md-4">
          <h2><?php $row->name?></h2>
          <p><?php $row->rate?></p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      
      <hr>

    </div>