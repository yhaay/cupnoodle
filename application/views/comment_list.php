<div class="col-md-8">
	<div class="media">
		<div class="media-left media-middle">
			<a href="#"> <img class="media-object" src="..." alt="...">
			</a>
		</div>
		<div class="media-body">
			<h4 class="media-heading">Middle aligned media</h4>
		    <?php foreach ( $comment as $row ) :	?>
    		<?=$row->nickname?>
      		<?=$row->description?>
      		<?php endforeach; ?>
		</div>
	</div>
</div>
</div>
</div>