<?php
require_once("mcq_model.php");
$mcqObject = new MCQ();
if(isset($_GET["mcqid"]))
{
    $mcqObject->delete_mcq();    
}
$mcqs = $mcqObject->get_mcqs();
?>

<?php include_once("../headers/header_admin.php"); ?>

<div class="contents">
<div class="row justify-content-center" style="margin-top: 10rem;">
<div class="card" style="width: auto; height:auto;">
  <div class="card-body">
  <h1 class="card-title text-center">Multiple Choice Questions</h1>
  <br><br><br>
<table cellpadding='10px'  width="100%">
    
    <?php
    if(isset($mcqs))
    {
        foreach($mcqs as $mcq)
        {
        ?>

            <tr style="background: aqua;">
                <td colspan="9"><?php echo $mcq["mcqid"]; ?>
                    <strong><?php echo $mcq["statement"]; ?></strong>
                </td>   
            </tr>
            <tr style="background: white;">
                <td>1. <?php echo $mcq["answer1"]; ?></td>
                <td>2. <?php echo $mcq["answer2"]; ?></td>
                <td>3. <?php echo $mcq["answer3"]; ?></td>
                <td>4. <?php echo $mcq["answer4"]; ?></td>
                <td>Correct Answer: <?php echo $mcq["correctanswer"]; ?></td>
                <td><a href="edit_mcq.php?mcqid=<?php echo $mcq["mcqid"]; ?>">Edit</a></td>
                <td><a href="view_mcqs.php?mcqid=<?php echo $mcq["mcqid"]; ?>">Delete</a></td>
            </tr>
            <tr><td colspan="7"></td></tr>
        <?php 
        } // end foreach
    } // end if
    ?>
</table>  
</div>
</div>
</div>
</div>
        
</body>
</html>