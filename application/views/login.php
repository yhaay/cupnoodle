<hr>
<div class="container">

	<form class="form-signin" action="/auth/authentication" method="post">
		<h2 class="form-signin-heading">로그인</h2>
		<label for="inputEmail" class="sr-only">이메일</label> <input
			type="email" id="email" name="email" class="form-control"
			placeholder="이메일" required autofocus required> <label
			for="inputPassword" class="sr-only">비밀번호</label> <input
			type="password" id="password" name="password" class="form-control"
			placeholder="비밀번호" required>
		<div class="checkbox">
			<label> <input type="checkbox" value="remember-me"> 로그인 유지
			</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">로그인</button>
	</form>

</div>
