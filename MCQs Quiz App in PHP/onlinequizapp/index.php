<body>
<?php
require_once("registration_model.php");
if(isset($_POST["loginuser"])){
    $mobile_no = $_POST["mobile_no"];
    $password = $_POST["password"];
    $registrationObject = new Registration();
    $registrationObject->signin_user($mobile_no, $password);
}
?>


<?php include_once("headers/header_public.php"); ?>


<div class="contents">
<div class="row justify-content-center" style="margin-top: 10rem;">
<div class="card" style="width: 28rem; height:auto;">
  <div class="card-body text-center">
    <h5 class="card-title">Login Form</h5>
    <form action="index.php" method="post">
        <table >
          
            <tr>
                <td><span class="input-group-text" id="basic-addon1"  for="mobile_no">Mobile No: </span></td>
                <td><input class="form-control" type="text" name="mobile_no" size="50"/></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label class="input-group-text" id="basic-addon1" for="password">Password: </label></td>
                <td><input type="password" class="form-control" name="password" size="50"/></td>
            </tr>
            <br><br>
        </table>
        <br><br>
       <button type="submit" name="loginuser" class="btn btn-primary float-end">Login</button>
    </form>
  </div>
</div>
</div>

       
   



</body>
</html>