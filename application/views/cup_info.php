<hr>
<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-md-4">
			<img src="/static/img/1.jpg">
			<h2><?=$idx?></h2>
			<p></p>
			<p>
				<a class="btn btn-default" href="#" role="button">View details
					&raquo;</a>
			</p>
		</div>
		<div class="col-md-8">
			<div class="input-group">
				<form action="/comment/write" method="post">
					<input type="hidden" id="cupnoodleidx" name="cupnoodleidx"
						value="<?=$idx?>">
					<textarea id="description" name="description" rows="3"
						class="form-control" placeholder="comments"></textarea>
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit">입력</button>
					</span>
				</form>
			</div>
			<div class="media">
				<div class="media-left media-middle">
					<a href="#"> <img class="media-object" src="..." alt="...">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Middle aligned media</h4>
					...
				</div>
			</div>
		</div>

	</div>