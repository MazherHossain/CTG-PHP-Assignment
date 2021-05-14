<?php include_once "templates/header.php"; ?>
		<div class="card w-25 mx-auto mt-5">
			<div class="card-body">
				<h2>Create Your Account</h2>
				<div class="msg"></div>
				<form id="user_reg_form" autocomplete="off" method="POST" enctype="multipart/form-data">
					<div class="form-group mt-2">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group mt-2">
						<label for="">User Name</label>
						<input name="username" class="form-control" type="text">
					</div>
					<div class="form-group mt-2">
						<label for="">Email</label>
						<input id="reg_email" name="email" class="form-control" type="text">
						<span style="color:red;" id="reg_email_notice"></span>
					</div>
					<div class="form-group mt-2">
						<label for="">Phone</label>
						<input name="phone" class="form-control" type="text">
					</div>
					<div class="form-group mt-2">
						<label for="">Password</label>
						<input name="pass" class="form-control" type="password">
					</div>
					<div class="form-group mt-2">
						<label for="">Photo</label>
						<input name="photo" class="form-control" type="file">
					</div>
					<div class="form-group mt-2">
						<input class="btn btn-primary" type="submit" value="Register">
					</div>
					<div class="card-footer mt-2">
						<a class="card-link" href="index.php">Log in now</a>
					</div>
				</form>
			</div>
		</div>
<?php include_once "templates/footer.php"; ?>