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