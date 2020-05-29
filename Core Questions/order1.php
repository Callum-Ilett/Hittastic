<?php
$songID = $_GET["songID"];
?>


<form method="POST" action="order2.php" class="contact-form">
    <div class="form-item">
        <label for="quantity" class="form-label">Number of copies</label>
        <input type="text" class="form-input" id="quantity" name="quantity">
        <input type="hidden" value="<?php echo $songID;?>" name="songID">
    </div>
    
    <div class="form-item">
        <button class="form-btn" type="submit">Submit</button>
    </div>
        
</form>
