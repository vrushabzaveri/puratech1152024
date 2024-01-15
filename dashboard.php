<?php include "header.php"?>

<div class="dashboard-container">
	<a href="userlis.php"><b><div class="dashboard-heading">DASHBOARD</div></b></a>
	<hr>
<div class="container">
	<div class="row">
		<?php 
			// $query = 'SELECT * FROM users';
			// $result = $conn->query($query);;
			
			$sql = "SELECT COUNT(*) AS Users FROM users";
			$result = $conn->query($sql);

			$row = $result->fetch_assoc();

			$count = $row['Users'];

			// print_r($row);
		
		?>
		<div class="col-md-3">
			<a href="userlis.php">
			<div class="card2">
				<div class="card-body">
					<span>Total Users</span><br>
					<span>(<?php echo $count; ?>)</span>
				</div>
			</div>
			</a>	
		</div>

		<div class="col-md-3">
			<a href="userlis.php">
			<div class="card1">
				<div class="card-body">
				  <span>Total Count</span><br>
				  <span>(0)</span>	    
				</div>
			</div>
			</a>
		</div>

		

		<div class="col-md-3">
			<a href="<a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Ficonspng.com%2Fimage%2F38734%2Ftest-1&psig=AOvVaw1iF13Myzl0v9eBGcMV8FuJ&ust=1705401814988000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCKi_lP6a34MDFQAAAAAdAAAAABAD>
			<div class="card3">
				<div class="card-body">
					 <span>Test 1</span>
					
				</div>
			</div>
			</a>
		</div>	

		<div class="col-md-3">
			<a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.adorn-india.com%2Fbuy-Test-469&psig=AOvVaw1iF13Myzl0v9eBGcMV8FuJ&ust=1705401814988000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCKi_lP6a34MDFQAAAAAdAAAAABAJ">
			<div class="card4">
				<div class="card-body">
					<span>Test 2</span>
				</div>
			</div>	
		</a>
		</div>	

<?php include "footer.php" ?>
