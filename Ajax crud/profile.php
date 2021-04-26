	<?php
		$id=$_POST['id'];
		$connection = new mysqli('localhost','root','','ajax');
  $data=$connection-> query("SELECT * FROM students WHERE id='$id'");
	$profile_data=$data->fetch_object();
	?>
	<div class="wrap w-25 mx-auto mt-5 mb-5">
		<div class="card">
			<div class="card-body">
				<h2>User Profile : <?php echo $profile_data->name; ?></h2>
				<img style="width:300px; height:300px; border-radius:50%; margin: 50px auto" src="photos/<?php echo $profile_data->photo; ?>" alt="">
        <h1><?php echo $profile_data->username; ?></h1>
				<h3><?php echo $profile_data->cell; ?></h3>
				<table class="table">
					<tr>
						<td>Email</td>
						<td><?php echo $profile_data->email; ?></td>
					</tr>
				</table>
				<a id="back" class="btn btn-primary btn-sm" href="">Back</a>
			</div>
		</div>
	</div>
	
