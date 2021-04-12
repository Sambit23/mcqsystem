<?php
require_once("user_model.php");
$userObject = new User();
if(isset($_POST["updateuser"]))
{
    $userObject->update_user();
}
$user = NULL;
if(isset($_GET['mobile_no']))
{
    $user = $userObject->get_user($_GET["mobile_no"]);    
}
?>

<?php include_once("../headers/header_admin.php"); ?>

<div class="container"> 
<div class="row justify-content-center" style="margin-top: 10rem;">
<div class="card" style="width: auto; height:auto;">
<div class="card-body text-center"> 
<caption><h1>Edit User</h1></caption>
<?php
if(count($user) > 0)
{
?>
    <form action="edit_user.php" method="post">
        <table>
            
            <tr>
                <td><label class="input-group-text" for="mobile_number">Mobile No: </label></td>
                <td><input class="form-control" type="text" name="mobile_no" size="50" value="<?php echo $user["mobile_no"]; ?>" readonly /></td>
            </tr>
            <tr>
                <td><label class="input-group-text" for="password">Password: </label></td>
                <td><input class="form-control" type="password" name="password" size="50" value="<?php echo $user["password"]; ?>" /></td>
            </tr>
            <tr>
                <td><label class="input-group-text" for="full_name">Full Name: </label></td>
                <td><input class="form-control" type="text" name="full_name" size="50" value="<?php echo $user["full_name"]; ?>" /></td>
            </tr>
            <tr>
                <td><label class="input-group-text" for="email">Email: </label></td>
                <td><input class="form-control" type="text" name="email" size="50" value="<?php echo $user["email"]; ?>" /></td>
            </tr>
            <tr>
                <td><label class="input-group-text" for="role">Role: </label></td>
                <td><input class="form-control" type="text" name="role" size="50" value="<?php echo $user["role"]; ?>" /></td>
            </tr>
            <br><br>
            <tr>
                <td>&nbsp;</td>
                <td></td>
            </tr>
        </table>    
        <input class="btn btn-primary float-end" type="submit" name="updateuser" value="    Update User    " />
    <?php
    } // end if
    ?>
</form>
</div>
</div>
</div>
</div>

</body>
</html>