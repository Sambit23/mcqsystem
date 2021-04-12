<?php

session_start();

if(isset($_POST['submitLogout'])){
	unset($_SESSION['mobile_no']);
	header("Location: ../index.php");
	exit;
}

if (!isset($_SESSION['mobile_no']) || $_SESSION["role"] != "admin") {
	header("Location: ../index.php.php");
	exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin functions</title>
	<link rel="stylesheet" href="../styles/styles.css" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
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
	  <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../mcq/add_mcq.php">Add MCQ</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../mcq/view_mcqs.php">View MCQs</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../user/view_users.php">View Users</a>
        </li>
      </ul>
	  <form action="#" method="post">
			<input class="btn btn-primary" type="submit" name="submitLogout" value="Logout" style="float: right; text-align: center; margin-right: 20px;"></input>
		</form>
    </div>
  </div>
</nav>
	<!--  -->
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>