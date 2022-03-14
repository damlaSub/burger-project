<?php require_once 'head.php'; ?>
<?php  require_once 'connect.php'; ?>


<?php 
function connect($servername = "localhost", $dbname = "db_burger", )

$db_connection = connect();

function findUser($username){
$query= "SELECT * FROM  `users` WHERE 'username' = ? ";
$request = $GLOBALS["db_connection"]->prepare($querry);
$request->execute([]);
$request->setFetchMode(PDO::FETCH_ASSOC);
return $request->fetchAll();
}



?>


<?php
function secure_data($data){
$data_tr = trim($data);
$data_str = stripslashes($data_tr);
$data_secure = htmlspecialchars($data_str);
return $data_secure;
}


if($SERVER["REQUEST_METHOD"] === "POST"){
   $error_username= ''; 
   $error_password;
if(isset($_POST["username"])){
$username = secure_data($_POST["username"]) ; 
$result =findUser($username);
if(count($result)>0){

if(password_verify($password, $result[0]["password"])){

} else {
   $error_username = 'Ce nom d\'utilisateur n\existe pas';
}

} else {
   $error_username= 'Veuillez  fournir un nom d\'utilisateur';
}

?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">




<body style="background-image: url('../images/bg.png')" >
    <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Login</h1>
						 </div>
					</div>
                   <form action="<?=htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" name="login">
                           <div class="form-group">
                              <label for="username">User name</label>
                              <input value="<?= $username['data'] ?>" type="text" class="form-control" id="username" name='username' placeholder="Enter user name">
                           <p class="text-danger" >
                           <?php echo $error_username ?>
                           </p>
                           </div>
                           <div class="form-group">
                              <label for="password">Password</label>
                              <input value="<?= $email['data'] ?>" type="password" name="password" id="password"  class="form-control" placeholder="Enter Password">
                              <p class="text-danger" >
                              <?php echo $email['error'] ?>
                              </p>
                           
                              </div>
                          
                           <div class="col-md-12 text-center ">
                              <button type="submit" class=" btn btn-succes">Log in</button>
                           </div>
                           
                         
                        </form>
                 
				</div>
			</div>
			
                        </form>
                     </div>
			</div>
		</div>
      </div> 

