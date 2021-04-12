<body>
<?php
require_once("registration_model.php");
if(isset($_POST["registeruser"])){
    $registrationObject = new Registration();
    $registrationObject->register_user();
}
?>


<?php include_once("headers/header_public.php"); ?>


<!--  -->
<div class="contents">
<div class="row justify-content-center" style="margin-top: 7rem;">
<div class="card" style="width: 28rem; height:auto;">
  <div class="card-body text-center">
    <h5 class="card-title">User Registration Form</h5>
    <form action="#" method="post">
            <table>
               
                <tr>
                    <td><label class="input-group-text" id="basic-addon1" for="mobile_no">Mobile No: </label></td>
                    <td><input class="form-control" type="text" name="mobile_no" size="50"/></td>
                </tr>
                <tr>
                    <td><label class="input-group-text" id="basic-addon1" for="password">Password: </label></td>
                    <td><input class="form-control" type="password" name="password" size="50"/></td>
                </tr>
                <tr>
                    <td><label class="input-group-text" id="basic-addon1" for="full_name">Full_Name: </label></td>
                    <td><input class="form-control" type="text" name="full_name" size="50"/></td>
                </tr>
                <tr>
                    <td><label class="input-group-text" id="basic-addon1" for="email">Email: </label></td>
                    <td><input class="form-control" type="text" name="email" size="50"/></td>
                </tr>
               
            </table>
            <br><br>
            <button type="submit" class="btn btn-primary float-end" name="registeruser" value="Register User">Register User</button>
        </form>  
  </div>
</div>
</div>
</div>


</body>
</html>