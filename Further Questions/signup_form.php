<?php
	include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./main.css">
</head>

<body>
	<?php
		generateLinks();
	?>

    <form method="POST" action="signup.php" class="contact-form">
        <div class="form-item">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-input" id="username" name="username">
        </div>

        <div class="form-item">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-input" id="password" name="password">
        </div>

        <div class="form-item">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-input" id="name" name="name">
        </div>

        <div class="form-item">
          <label for="day" class="form-label">Day of birth</label>
          <select name="day">
              <?php
                for($i=1; $i <= 31; $i++){
                    echo "<option>$i<option>";
                }
              ?>
              
          </select>
        </div>
        
        <div class="form-item">
          <label for="month" class="form-label">Month of birth</label>

          <select name="month">
              <?php
              $months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                foreach($months as $month){
                    echo "<option>$month<option>";
                }
              ?>
              
          </select>
        </div>
        
        <div class="form-item">
          <label for="year" class="form-label">Year of birth</label>
          <select name="year">
            <?php
                $currentYear = date("Y");
                foreach (range(1890, $currentYear-18) as $year) {
                    echo "<option>" . $year . "</option> ";
                }
            ?>
          </select>
        </div>

        <div class="form-item">
            <button class="form-btn" type="submit">Submit</button>
        </div>
	</form>
	<?php
		if($_GET["fields"] == "empty"){
			echo "<p>There are empty fields in the form. please try again</p>";
		}
	?>
</body>

</html>