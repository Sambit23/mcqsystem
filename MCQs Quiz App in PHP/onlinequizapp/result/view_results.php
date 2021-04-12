<?php include_once("../headers/header_user.php"); ?>

<?php
require_once("../quiz/quiz_model.php");
if(isset($_POST["startQuizBtn"]))
{
    $quizObject = new Quiz();
    $mcq_ids = $quizObject->get_mcq_ids();
    shuffle($mcq_ids);
    $min = 0;
    $max = (count($mcq_ids)-1)-10;
    $random_index = rand($min, $max);
    $mcq_ids = array_slice($mcq_ids, $random_index, 10);
    $mcq_ids = implode(",",$mcq_ids);
    $mcqs = $quizObject->get_mcqs($mcq_ids);
    shuffle($mcqs);

    $_SESSION["quiz"] = $mcqs;
    $_SESSION["current_mcq_no"] = 0; // array index starts from 0;
    header("location: ../quiz/quiz.php");
    exit;
}
require_once("result_model.php");
$resultObject = new Result();
$results = $resultObject->get_results_by_user($_SESSION["mobile_no"]);

?>


<div class="contents">
    <br><br><br><br><br>
    <div class="row justify-content-center">
    <div class="card" style="width: auto; height:auto;">
  <div class="card-body text-center">
    <h5 class="card-title">Results for <?php echo $_SESSION["mobile_no"]; ?></h5>
    <br>
    <table cellpadding='10px' class="text-center"  width="100%">
   
       
    <?php
    if(isset($results))
    {
        foreach($results as $result)
        {
        ?>
            <tr>
            <td><span class="input-group-text" id="basic-addon1">Date Submitted </span></td>
                <td><?php echo  $result["date"]; ?></td>
                
            </tr>
            <tr>
            <td><span class="input-group-text" id="basic-addon1" >Marks Obtained</span></td>
                <td><?php echo $result["marks_obtained"]; ?></td>
            </tr>
        <?php 
        } // end foreach
    } // end if
    ?>
</table>
<br><br>
<form method="post" action="#">
 <button type="submit" name="startQuizBtn" value="Start New Quiz"  class="btn btn-primary float-end">Start New Quiz</button>
</form>
  </div>
</div>


    </div>
<br>


</div>
        
</body>
</html>