<?php
require_once("mcq_model.php");
$mcqObject = new MCQ();
if(isset($_POST["updatemcq"]))
{
    $mcqObject->update_mcq();
}
$mcq = NULL;
if(isset($_GET['mcqid']))
{
    $mcq = $mcqObject->get_mcq($_GET["mcqid"]);    
}
?>

<?php include_once("../headers/header_admin.php"); ?>

<div class="container">
<div class="row justify-content-center" style="margin-top: 10rem;">
<div class="card" style="width: auto; height:auto;">
<div class="card-body text-center">
<?php
if(count($mcq) > 0)
{
?>
    <h1>Edit MCQ</h1>
    <br><br>
    <form action="edit_mcq.php" method="post">
        <input type="hidden" name="mcqid" value="<?php echo $mcq["mcqid"]; ?>" />
        <label class="input-group-text" for="statement">Statement:</label>
        <input name="statement" class="form-control" cols="100" rows="5" value="<?php echo $mcq["statement"];?>"/>
        <br/>
        <br/>
        <label class="input-group-text" for="answer1">Answer1: </label>
        <input type="text" class="form-control" name="answer1" size="50" value="<?php echo $mcq["answer1"]; ?>" />
        <span class="float-start"> IsCorrect?</span> <input class="form-check-input float-start" type="radio" name="correctanswer" value="1" <?php echo $mcq["correctanswer"] == "1" ? "checked" : "" ; ?> />
        <br/>
        <br/>
        <label class="input-group-text" for="answer2">Answer2: </label>
        <input type="text" class="form-control" name="answer2" size="50" value="<?php echo $mcq["answer2"]; ?>" />
        <span class="float-start"> IsCorrect?</span> <input class="form-check-input float-start" type="radio" name="correctanswer" value="2" <?php echo $mcq["correctanswer"] == "2" ? "checked" : "" ; ?> />
        <br/>
        <br/>
        <label class="input-group-text" for="answer3">Answer3: </label>
        <input type="text" class="form-control" name="answer3" size="50" value="<?php echo $mcq["answer3"]; ?>" />
        <span class="float-start"> IsCorrect?</span> <input class="form-check-input float-start" type="radio" name="correctanswer" value="3" <?php echo $mcq["correctanswer"] == "3" ? "checked" : "" ; ?> />
        <br/>
        <br/>
        <label class="input-group-text" for="answer4">Answer4: </label>
        <input type="text" class="form-control" name="answer4" size="50" value="<?php echo $mcq["answer4"]; ?>" />
        <span class="float-start"> IsCorrect?</span> <input class="form-check-input float-start" type="radio" name="correctanswer" value="4" <?php echo $mcq["correctanswer"] == "4" ? "checked" : "" ; ?> />
        <br/>
        <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input class="btn btn-primary float-end" type="submit" name="updatemcq" value="    Update MCQ    " />
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