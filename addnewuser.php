<?php include "header.php"; ?>


<div class="container">
 <div class="row">
  <div class="col-sm-6 col-xs-6">
    <h1>Add New User Form</h1>
  </div>
  <div class="col-sm-6 col-xs-6">
  	<a href="dashboard.php"><button type="button" class="btn btn-success pull-right addNewBtn">Home</button></a>
  	<a href="userlis.php"><button type="button" class="btn btn-success pull-right addNewBtn">Back</button></a>

  </div> 
 </div>



 <!-- New user Form  -->
 <div class="formBody">
 <form action='addnewuser.php' method="POST">	
 <div class="row">
 	<div class="col-sm-3">
  		<div class="form-group">
	        <label for="Firstname">Firstname</label>
	        <input type="text" class="form-control" id="Firstname" placeholder="Enter firstname" name="fname" required>
	     </div>
  	</div>
  	<div class="col-sm-3">
  		 <div class="form-group">
	        <label for="Lastname">Lastname</label>
	        <input type="text" class="form-control" id="Lastname" placeholder="Enter lastname" name="lname" required>
	      </div>
  	</div>
  	<div class="col-sm-3">
  		 <div class="form-group">
    		<label for="exampleInputEmail1">Email address</label>
    		<input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" require>
       </div>
  	</div>
  	<div class="col-sm-3">
  		<div class="form-group">
	        <label for="Contact">Contact</label>
	        <input type="number" class="form-control" id="Contact" placeholder="Enter contact" name="Contact" required>
	    </div>
  	</div>
  </div>
  <hr>
  <div class="row">
  	<div class="col-sm-4">
  		<div class="form-group">
	        <label for="Dob">Date of Birth:</label>
	        <input type="date" class="form-control" id="Date" placeholder="Enter DoB" name="dateofbirth" required>
	    </div>
  	</div>

  	 <div class="col-sm-4">
  		<div class="form-group">
	    	<label for="city">Choose a City:</label>
	        <select name="city" id="city" class="form-control">
			  <option value="">Select</option>
			  <option value="mumbai">Mumbai</option>
			  <option value="banglore">Banglore</option>
			  <option value="chennai">Chennai</option>
			  <option value="gujrat">Gujrat</option>
			  <option value="goa">Goa</option>
			  <option value="kashmir">Kashmir</option>
			</select>
	    </div>
  	</div>
  	<div class="col-sm-4">
  		<label for="Active">Active</label><br>
  		<label class="radio-inline">
	      <input type="radio" name="active" value='1' checked>Yes
	    </label>
	    <label class="radio-inline">
	      <input type="radio" value='0' name="active">No
	    </label>
	</div>
</div>
<hr>

<div class="row">
	<div class="col-sm-3">
  		<div class="form-group">
	    	<label for="Username">Username</label>
	        <input type="username" class="form-control" id="Username" placeholder="Enter username" name="Username" required>
	    </div>
  	</div>
  	<div class="col-sm-3">
  		<div class="form-group">
	    	<label for="Password">Password</label>
	        <input type="password" class="form-control" id="password" placeholder="Enter password" name="Password" required>
	    </div>
  	</div>
</div>

<hr>
 <div class="row">
 	<div class="col-sm-12">
 		 <button type="submit" class="btn btn-success" name="submit_form">Submit</button>
 		 <button type="reset" class="btn btn-warning" name="">Reset</button>
 	</div>
 </div>

 </form>
</div>
</div>
<!-- add data into database -->
<?php 

 if(isset($_POST['submit_form'])){

 		$firstName = (!empty($_POST['fname'])) ? $_POST['fname'] : '';
 		$lastName = (!empty($_POST['lname'])) ? $_POST['lname'] : '';
 		$email = (!empty($_POST['email'])) ? $_POST['email'] : '';
 		$Contact = (!empty($_POST['Contact'])) ? $_POST['Contact'] : '';
 		$dateofbirth = (!empty($_POST['dateofbirth'])) ? $_POST['dateofbirth'] : '';
 		$city = (!empty($_POST['city'])) ? $_POST['city'] : '';
 		$active  = (!empty($_POST['active'])) ? $_POST['active'] : '';
 		$Username  = (!empty($_POST['Username'])) ? $_POST['Username'] : '';
 		$Password = (!empty($_POST['Password'])) ? $_POST['Password'] : '';

 		// echo $active;

 		$insert = "INSERT INTO users (first_name, last_name, email, username, password, contact_number, dob, city, active) VALUES ('$firstName','$lastName','$email','$Username','$Password', $Contact,'$dateofbirth','$city',$active)";

 		
 		if(mysqli_query($conn, $insert)){  
		    $msg = "Data stored Successfully";
		    header("Location:userlis.php");
		  }
 }
?>                                                                               
