
<?php

include_once('opendb.php');

if(isset($_POST['btnlogin'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	 $password =md5($password);
	//$password=password_hash($_POST['password']);
	$sql="select * from signup where email=:email and password=:password";

	$stmt=$conn->prepare($sql);
	$stmt->bindParam(':email',$email);
	$stmt->bindParam(':password',$password);

	try{
		$result=$stmt->execute();
		$count=$stmt->rowCount();

		if($count>0){
			while ($row=$stmt->fetch()) {
				session_start();
				$_SESSION['email'] = $row[1];
				echo "<script>window.location.href='loop.php'</script>";
			}
		}
		else {
			echo '<script>alert("Wrong email and password");</script>';
		}
	}
	catch(Exception $e){
		$e -> getMessage();
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form in css</title>
	<link  rel="stylesheet" href="./css/css/bootstrap.css">

</head>
<body>
<div class="container">
   	<div class="row">
   		<div class="col-sm-6 offset-sm-2">
   			<h1 class=" text-success text-center">Login Page</h1>
   			<form action="" method="POST">
   				<div class="form-group">
   					 <label>Email</label>
   					 <input type="text" required class="form-control" name="email">
   				</div>

   				<div class="form-group">
   					 <label>Password</label>
   					 <input type="password" required class="form-control" name="password">
   				</div><br>
				   <div class="form-group">
				   <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="pr_image">
                        
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
   				</div><br>

   				<input type="submit" class="btn btn-success" name="btnlogin">

   			</form>
   		</div>
   	</div>
   </div>

</body>
</html>