<?php
    include './header.php';
    session_start();
?>

  <meta charset="UTF-8">
  <title>Tourist Assistance</title>
  <style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>

<div class="container">
  <div class="login-form">
    <form action="indVal.php" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input name="uname" id="uname" type="text" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input name="passwd" id="passwd" type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="register.php">Create an Account</a></p>
</div>
</div>
</body>
</html>

<?php
    include './footer.php'
?>
