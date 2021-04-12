<?php
require_once("user_model.php");
$userObject = new User();
if(isset($_GET["mobile_no"]))
{
    $userObject->delete_user();    
}
$users = $userObject->get_users();
?>

<?php include_once("../headers/header_admin.php"); ?>

<div class="container"> 
<div class="row justify-content-center" style="margin-top: 10rem;">
<div class="card" style="width: auto; height:auto;">
<div class="card-body text-center">  
<div class="table-responsive">  
<caption><h1>Users</h1></caption>
<table class="table">
   
        <tr style="background: aqua;">
            <th>Mobile No.</th>
            <th>Password</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Role</th>
            <th colspan="2">Action</th>
        </tr>
    <?php
    if(isset($users))
    {
        foreach($users as $user)
        {
        ?>
            <tr style="background: white;">
                <td><?php echo $user["mobile_no"]; ?></td>
                <td><?php echo $user["password"]; ?></td>
                <td><?php echo $user["full_name"]; ?></td>
                <td><?php echo $user["email"]; ?></td>
                <td><?php echo $user["role"]; ?></td>
                <td><a href="edit_user.php?mobile_no=<?php echo $user["mobile_no"]; ?>">Edit</a></td>
                <td><a href="view_users.php?mobile_no=<?php echo $user["mobile_no"]; ?>">Delete</a></td>
            </tr>
        <?php 
        } // end foreach
    } // end if
    ?>
</table>
</div>
</div>
</div>
</div>
</div>
</body>
</html>