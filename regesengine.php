<!DOCTYPE html>
<html>
<head>
	<title></title><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
	.flex-container {
  width: 60%;
  height: 450px;
  background-color: rgba(100, 0, 0, .5);
  text-align: center;
  margin-left: 20%;
  margin-top: 8%;

 	}
 	.card-title{
 	color: rgba(0, 150, 0, .9);	
 	}
  </style>



</head>
<body>
<div class="flex-container">
  <div class="card-body">
    <h5 class="card-title">Regular Expression Engine</h5>   
  </div>

<form action="" method="POST">
    
  <label for="exampleInputName1">Chose What you want to test for:</label>
  <div class=" align-items-center">
    <div class="col-auto my-1">
      
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="agent_id">

        <option selected name="Selectany" value="NotSelected" required="">Select Here</option>
        <option name="pat1" value="1">Email</option>
        <option name="pat2" value="2">Phone NO</option>
        <option name="pat3" value="3">Name</option>
      </select>
    </div>

		<div class="col-auto my-1">
		    <label for="exampleInputName1">String to check:</label>
		    <input type="test" class="form-control" id="string" placeholder="" autocomplete="off" name="string" required value="<?php  if(isset($_POST['string'])) echo($_POST['string'])?>">
		  </div>
		    
		  
		 
		  	<button type="submit" class="btn btn-primary" name="submit" value="Submit">Check</button>
        </form>
		  
  

<?php
if(isset($_POST['submit'])) {
 $id = $_POST['agent_id'];
$string=$_POST['string'];

if ($id==1) {
    if(preg_match('/^([a-z]+)([a-z\d]+)([\.])*([a-z\d]+)[\@{1}]([a-z]+)[\.]([a-z]+)/',$string)){
      ?>
      <h4>Status:Matched</h4>
      <?php

    }
    else{
      ?>
      <h4>Status:Not Matched</h4>
      <?php
    }
    echo"Input string:".$string."<br>";
    echo"Validation Check for:Email<br>";
    echo "Pattern Used:/^([a-z\d]+)[\@{1}]([a-z]+)[\.]([a-z]+)/"; echo '<br>';
}

else if ($id==2) {
    if(preg_match('/^([\+]{0,1}977){0,1}9[0-9]{9}+$/',$string)){
      ?>
      <h4>Status:Matched</h4>
      <?php

    }
    else{
      ?>
      <h4>Status:Not Matched</h4>
      <?php
    }
    echo"Input string:".$string."<br>";
    echo"Validation Check for:Phone Number(Nepal)<br>";
    echo "Pattern Used:/^([\+]{0,1}977){0,1}9[0-9]{9}+$/"; echo '<br>';
}


else if ($id==3) {
    if(preg_match('/^(([A-Z]{1})([a-z]+)([\ ]{0,1}))+$/',$string)){
      ?>
      <h4>Status:Matched</h4>
      <?php

    }
    else{
      ?>
      <h4>Status:Not Matched</h4>
      <?php
    }
    echo"Input string:".$string."<br>";
    echo"Validation Check for:Name of a person<br>";
    echo "Pattern Used:/^([\+]{0,1}977){0,1}9[0-9]{9}+$/"; echo '<br>';
}

else if ($id=="NotSelected") {
    ?>
      <h3>Error</h3>
      <?php
    echo"Input string:".$string."<br>";
    echo"Validation Check for:Not Selected<br>";
    echo "Click \"Select Here\" TO Select Type"; echo '<br>';
}


}
?>
 </div>
</body>
</html>
