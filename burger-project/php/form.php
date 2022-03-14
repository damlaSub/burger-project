<?php 
    require_once './form-processing.php' ;
    if($_SERVER["REQUEST_METHOD"] === "POST"){
         $email = validate_data($_POST['email']);
       
    }
?> 



<form method="POST" action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>"  style="margin: 2rem;" >
        
    <div class="mb-3">
        <label for="email" class="form-label" style="color:beige" > Abonnez-vous à notre newsletter </label>
        <input value="<?=$email['data']?>" type="email" class="form-control" id="email" name="email" placeholder="name@example.com" style="width:50%">
        <p class="text-danger" >
            <?php echo $email['error'] ?>
        </p>
    </div>
   

    <button type="submit" class="btn btn-success" >Envoyer</button>
   
    <?php 
        if( $email['success']) {
            echo "<p class='alert alert-success' > Merci pour votre subscription ! </p>";
        }
    ?>
</form>



