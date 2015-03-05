<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/static/lib/bootstrap/css/bootstrap.min.css"
	rel="stylesheet" media="screen">
<style>
body {
	padding-top: 50px;
	padding-bottom: 20px;
}

img {
	max-width: 100%;
}
</style>
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">컵라면 뭐먹지</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="/">Home</a></li>
					<li><a href="/best">Best</a></li>
					<li><a href="/new">New</a></li>
				</ul>
				<form class="navbar-form navbar-right">
				<?php if ($this->session->useradata['is_login'] == TRUE) {?>
					<?php echo $this->session->userdata['nickname']?>님 환영합니다.
					<a href="/auth/logout" class="btn btn-info">로그아웃</a>
				<?php } else {?>
					<a href="/auth/login" class="btn btn-info">로그인</a>
					<a href="/auth/register" class="btn btn-primary">회원가입</a>
				<?php }?>
				</form>
			</div>
			<!--/.navbar-collapse -->
		</div>
	</nav>