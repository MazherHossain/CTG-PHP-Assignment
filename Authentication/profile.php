<?php 
	include_once "templates/header.php"; 
	include "autoload.php";
	//get login user data
	$login_user_data = loginUserInfo($_SESSION['id']);
	//Logout Process
	if(isset($_GET['logout']) AND $_GET['logout']=='user_logout'){
		
		
		if(isset($_COOKIE['recent_logged_in_users'])){
			$oldData=json_decode($_COOKIE['recent_logged_in_users']);
			array_push($oldData,$login_user_data -> id);
			$logout_json=json_encode($oldData);
		}
		else{
		$logout_data[]=$login_user_data -> id;
		$logout_json=json_encode($logout_data);
		}
		setcookie('recent_logged_in_users',$logout_json, time()+(60*60*24*7));
		session_destroy();
		setcookie('user_logged_in_id',$login_user_data -> id, time()-(60*60*24*7));
		header('location:index.php');
	}
	//check user login status
	if(!isset($_SESSION['login_status'])){
		header('location:index.php');
	}


?>
		<div class="card w-25 mx-auto mt-5">
			<div class="card-body">		
			  <img style="width: 200px; height: 200px; border-radius: 50%; display: block; margin: 20px auto;" src="photos/users/<?php echo $login_user_data-> photo; ?>" alt="">
				<h1><?php echo $login_user_data-> name; ?></h1>
				<hr>
				<table>
					<tr>
						<td>Phone : </td>
						<td><?php echo $login_user_data-> phone; ?></td>
					</tr>
					<tr>
						<td>Email : </td>
						<td><?php echo $login_user_data-> email; ?></td>
					</tr>
					<tr>
						<td>User Name : </td>
						<td><?php echo $login_user_data-> username; ?></td>
					</tr>
				</table>
				<div class="card-footer mt-2">
					<a class="card-link" href="?logout=user_logout">Log Out</a>
				</div>
			</div>
		</div>
<?php include_once "templates/footer.php"; ?>