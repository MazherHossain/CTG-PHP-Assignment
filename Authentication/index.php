<?php include_once "templates/header.php"; ?>
<?php
	include "autoload.php";
	if(isset($_COOKIE['user_logged_in_id'])){
		$id=$_COOKIE['user_logged_in_id'];
		$_SESSION['id']= $id;
		$_SESSION['login_status']=true;
		header('location:profile.php');
	}

	//check user login
	if(isset($_SESSION['login_status']) AND $_SESSION['login_status']==true){
		header('location:profile.php');
	}

	//login process
	if(isset($_POST['login_form'])){
		$access=$_POST['access'];
		$password=$_POST['password'];

		$loginData = connect() -> query("SELECT * FROM users WHERE email='$access' || username='$access' || phone='$access'");

		$login_user_data = $loginData -> fetch_object();

		if(empty($access)||empty($password)){
			$msg=validate('All fields are required!');
		}
		else{
			if($loginData->num_rows==1){
				if(password_verify($password, $login_user_data -> password) || md5($password)==($login_user_data -> password)){

					$_SESSION['id']= $login_user_data -> id;
					$_SESSION['login_status']=true;
					setcookie('user_logged_in_id',$login_user_data -> id, time()+(60*60*24*7));
					header('location:profile.php');
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

<div class="row">
	<?php
		$recent_logout_id=json_decode($_COOKIE['recent_logged_in_users']); 
		$user_id = implode(',',$recent_logout_id);
		$data= connect() -> query("SELECT * FROM users WHERE id IN ($user_id)");

		while($user_data=$data->fetch_object()):
	?>
	<div class="col-md-4 my-3">
		<div class="card">
			<div class="card-body" style="padding:4px;">
				<img style="width:100%;height:80px;" src="photos/users/<?php echo $user_data->photo ?>" alt="">
			</div>
			<div class="card-footer">
				<h6><?php echo $user_data->name ?></h6>
			</div>
		</div>
	</div>
	<?php endwhile; ?>


</div></>
<?php include_once "templates/footer.php"; ?>