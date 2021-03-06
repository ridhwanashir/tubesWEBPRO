<!DOCTYPE html>
<html>
    <head>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css'); ?>"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Login</title>
	</head>
	
	<body>
		<form action="<?= site_url('login/login') ?>" method="post">
			<h2>Login</h2>
			<?php if(isset($_SESSION['error_message'])) { ?>
			<div class="alert alert-danger" role="alert">
				<?= $_SESSION['error_message'] ?>
			</div>
			<?php } ?>
			<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="Username" required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Password" required>
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
			<p>Don't have an account? Register <a href="<?= site_url('register/index') ?>">here</a></p>
		</form>
	</body>
</html>