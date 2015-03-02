<hr>
<div class="container">
    <?php echo validation_errors(); ?>
    <form class="form-signin" action="/auth/register" method="post">
		<div class="control-group">
			<label class="control-label" for="nickname">닉네임</label>
			<div class="controls">
				<input type="text" id="nickname" name="nickname" class="form-control"
					value="<?php echo set_value('nickname'); ?>" placeholder="닉네임">
			</div>
		</div>
		<div>&nbsp;</div>
  		<div class="control-group">
			<label class="control-label" for="inputEmail">이메일</label>
			<div class="controls">
				<input type="email" id="email" name="email" class="form-control"
					value="<?php echo set_value('email'); ?>" placeholder="이메일" required autofocus>
			</div>
		</div>
		<div>&nbsp;</div>
		<div class="control-group">
			<label class="control-label" for="password">비밀번호</label>
			<div class="controls">
				<input type="password" id="password" name="password" class="form-control"
					value="<?php echo set_value('password'); ?>" placeholder="비밀번호">
			</div>
		</div>
		<div>&nbsp;</div>
		<div class="control-group">
			<label class="control-label" for="re_password">비밀번호 확인</label>
			<div class="controls">
				<input type="password" id="re_password" name="re_password" class="form-control"
					value="<?php echo set_value('re_password'); ?>"
					placeholder="비밀번호 확인">
			</div>
		</div>
		<div>&nbsp;</div>
		<div class="control-group">
			<label class="control-label"></label>
			<div class="controls">
				<input type="submit" class="btn btn-primary" value="회원가입" />
			</div>
		</div>
	</form>
</div>