<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
	<title>Halaman Login Admin</title>
	<!-- Bootstrap CSS -->
	<link href="<?php echo base_url('backend/admin/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />

	<!-- Font Awesome CSS -->
	<link href="<?php echo base_url('backend/admin/assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('backend/admin/assets/css/login_style.css') ?>">

	<script src="<?php echo base_url('backend/admin/assets/js/jquery.min.js'); ?>"></script>

	<script src="<?php echo base_url('backend/admin/assets/js/bootstrap.min.js'); ?>"></script>
</head>

<body>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Login admin</h3>
					<div class="d-flex justify-content-end social_icon">
					</div>
				</div>
				<div class="card-body">

					<?php
                    if(!empty($success_msg)){
						echo '<div class="alert alert-success" role="alert">'.$success_msg.'</div>';
                    }elseif(!empty($error_msg)){
                        echo '<div class="alert alert-danger" role="alert">'.$error_msg.'</div>';
                    }
                ?>
					<form action="" method="post">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-envelope"></i></span>
							</div>
							<input type="text" name='email' required='' class="form-control" placeholder="Email">
							<?php echo form_error('email','<span class="help-block">','</span>'); ?>
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-key"></i></span>
							</div>
							<input type="password" name='password' required='' class="form-control" placeholder="Password">
							<?php echo form_error('password','<span class="help-block">','</span>'); ?>
						</div>
						<div class="form-group">
							<input type="submit" value="Login" name='loginSubmit' class="btn float-right login_btn">
						</div>
					</form>
				</div>
				<div class="card-footer">
					<!-- <div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div> -->
				</div>
			</div>
		</div>
	</div>
</body>

</html>
