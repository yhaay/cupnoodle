<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/static/lib/bootstrap/css/bootstrap.min.css"
	rel="stylesheet" media="screen">
<style>
body {
	padding-top: 50px;
	padding-bottom: 20px;
}
</style>
</head>
<body>

   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
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
            <div class="form-group">
              <input type="text" placeholder="이메일" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="비밀번호" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">로그인</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>