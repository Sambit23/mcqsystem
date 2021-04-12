<?php

session_start();

if(isset($_POST['submitLogout'])){
	unset($_SESSION['mobile_no']);
	header("Location: ../index.php");
	exit;
}

if (!isset($_SESSION['mobile_no'])) {
	header("Location: ../index.php.php");
	exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User functions</title>
	<link rel="stylesheet" href="../styles/styles.css" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark  fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Online Quiz Application</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
	  
      </ul>
	  <form action="#" method="post">
			<button type="submit" class="btn btn-primary" name="submitLogout" value="Logout" style="float: right; text-align: center; margin-right: 20px;">Logout</button>
		</form>
    </div>
  </div>
</nav>
	<!--  -->
	
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>