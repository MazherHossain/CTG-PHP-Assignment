<?php
  $connection = new mysqli('localhost','root','','ajax');
  $data=$connection-> query("SELECT * FROM students");
  $i=1;
  while($stu=$data->fetch_object()):
?>
<tr>
	<td><?php echo $i; $i++; ?></td>
	<td><?php echo $stu->name ?></td>
	<td><?php echo $stu->email ?></td>
	<td><?php echo $stu->cell ?></td>
	<td><img src="photos/<?php echo $stu->photo ?>" alt=""></td>
	<td>
		<a id="profile" profile_id="<?php echo $stu->id ?>" class="btn btn-sm btn-info col-sm-3.5" href="#">View</a>
		<a class="btn btn-sm btn-warning col-sm-3.5" href="#">Edit</a>
		<a delete_id="<?php echo $stu->id ?>" class="btn btn-sm btn-danger delete-btn col-sm-3.5" href="#">Delete</a>
	</td>
</tr>
<?php
  endwhile;
?>