<?php 
	include 'dd.php';
	
	$query = "SELECT * FROM ".$_COOKIE['tablename']." ORDER BY id DESC";
	$run = $con->query($query);
	
	while($row=mysqli_fetch_assoc($run)):
	
		?>
			<div id="chatdata">
<span style="color:#ff3366;font-size:14px;width:50px;font-family:Verdana, Geneva, sans-serif;"><?php echo $row['name']; ?></span> :
<span style="color:#399;background-color:#F1F1F1;border-radius:1px 15px;padding:5px;font-size:16px;"><?php echo $row['msg'];  ?></span>
<span style="float:right;font-size:10px;padding-top:10px;"><?php echo $row['date']; ?></span>
</div>

			<?php endwhile;
			
			?>