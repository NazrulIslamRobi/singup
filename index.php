<?php
include_once('register_core.php');

$fruits=['mango','banana','apple','orange','lemon','jackfuit','Pine-apple'];

if(isset($_POST['fname'])){

	$filtered= filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
	echo $filtered;

}




if(isset($_POST['fruits'])){

	$filteredFruits= filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);

	$selectedFruits= join(', ',$filteredFruits);
echo "selected value is:".  $selectedFruits;
	
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>


<div class="row">
	<div class="col-md-6 m-auto">
		
	<div class="card mt-5">
			<div class="card-header">
				<h4 class="text-center">Sign Up</h4>
			</div>
			<div class="card-body">
				<form  method="POST">
					
					<label for="fname">First Name</label>
					<input type="text" name="fname" class="form-control" id="">
					
					
					<label for="lname">Last Name</label>
					<input type="text" name="lname" class="form-control" id=""><br>

			
						<select name="fruits[]" id="" class="form-control" multiple>
							<option  value="">-Select Fruits-</option>
							<?php echo item($fruits,$filteredFruits); ?>
							
						</select><br>

						<button type="submit" class="btn btn-primary form-control">Sign Up</button>

					
					
				</form>
			</div>
		</div>
	</div>
</div>

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>