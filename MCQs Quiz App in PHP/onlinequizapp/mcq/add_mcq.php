<?php
require_once("mcq_model.php");
if(isset($_POST["addmcq"])){
    $mcqObject = new MCQ();
    $mcqObject->add_mcq();
}
?>

<?php include_once("../headers/header_admin.php"); ?>

<div class="container">
<div class="row justify-content-center" style="margin-top: 10rem;">
<div class="card" style="width: auto; height:auto;">
  <div class="card-body text-center">
<h1>Add MCQ Form</h1>
<form action="#" method="post">
    <label class="input-group-text" for="statement">Question:</label>
    <input class="form-control" type="text" autocomplete="off" name="statement"><?php echo isset($_POST["statement"]) ? $_POST["statement"] : ""; ?>
    <br><br>
    
    <label class="input-group-text" for="answer1">Answer1: </label>
    <input class="form-control" type="text" name="answer1" autocomplete="off" size="50"/>
    <span class="float-start"> IsCorrect?</span> <input class="form-check-input float-start" type="radio" name="correctanswer" value="1" />
    <br><br>
    
    <label class="input-group-text" for="answer2">Answer2: </label>
    <input class="form-control" type="text" name="answer2" autocomplete="off" size="50"/>
   <span class="float-start"> IsCorrect?</span> <input class="form-check-input float-start" type="radio" name="correctanswer" value="2"/>
    <br><br>
    
    <label class="input-group-text" for="answer3">Answer3: </label>
    <input class="form-control" type="text" name="answer3" autocomplete="off" size="50"/>
    <span class="float-start"> IsCorrect?</span><input class="form-check-input float-start" type="radio" name="correctanswer" value="3"/>
    
    <br><br>
    <label class="input-group-text" for="answer4">Answer4: </label>
    <input class="form-control" type="text" name="answer4" autocomplete="off" size="50"/>
    <span class="float-start"> IsCorrect?</span> <input class="form-check-input float-start" type="radio" name="correctanswer" value="4"/>
    
    
    <br><br>
    <input class="btn btn-primary float-end" type="submit" name="addmcq" value="    Add MCQ    " />
</form>
<br><br><br><br><br>
</div>
</div>
</div>
</div>
</body>
</html>