<?php include_once "templates/header.php"; ?>
<?php
	include "autoload.php";
	//login process
	if(isset($_POST['login_form'])){
		$access=$_POST['access'];
		$password=$_POST['password'];

		$loginData = connect() -> query("SELECT * FROM users WHERE email='$access' || username='$access' || cell='$access'");

		$login_user_data = $loginData -> fetch_object();

		if(empty($access)||empty($password)){
			$msg=validate('All fields are required!');
		}
		else{
			if($loginData->num_rows==1){
				if(password_verify($password, $login_user_data -> password)){

				}
				else{
					$msg=validate('Password incorrect!');
				}
			}
			else{
				$msg=validate('No user found!');
			}
		}
		
	}
?>
		<div class="card w-25 mx-auto mt-5">
			<div class="card-body">
				<h2>Login Here</h2>
				<?php
					if(isset($msg)){
						echo $msg;
					}
				?>
				<form action="" autocomplete="off" method="POST">
					<div class="form-group">
						<label for="">Name or Email</label>
						<input name="access" class="form-control" type="text">
					</div>
					<div class="form-group mt-2">
						<label for="">Password</label>
						<input name="password" class="form-control" type="password">
					</div>
					<div class="form-group mt-2">
						<input name="login_form" class="btn btn-primary" type="submit" value="Login">
					</div>
					<div class="card-footer mt-2">
						<a class="card-link" href="register.php">Create an account</a>
					</div>
				</form>
			</div>
		</div>
<?php include_once "templates/footer.php"; ?>