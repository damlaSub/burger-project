<?php require_once 'head.php'; ?> 
<?php require_once 'connect.php' ; ?>

<?php



$sql = "SELECT * FROM `products` WHERE `category` ='burger'  AND `note`>= '7' LIMIT 4";
$requete = $db->prepare($sql);
$requete->execute();
$products = $requete->fetchAll(); 


?>


<body style="background-image: url('../images/bg.png')" >




<h1 class="text-center" style="color:beige"> Our Best Sellers </h1>

<div class="container">
 
<? foreach($products as $product):   ?>


<div class='card' style="width: 18rem;">  

<img class='card-img-top'  src=<?= $product["img_url"]; ?> alt="<?=$product['name'];?>"> 


<div class='card-body'>
       <h5 class='card-title'> <?= $product["name"]; ?> </h5>
       <p class='card-text'> <?=$product["description"]; ?></p>
       <p class='card-text'> <?=$product["price"]; ?> € </p>
       <a href='#' class='btn btn-primary'> Regardez </a>
</div>

</div>
<? endforeach; ?>

</div> 


<div>
<?php require_once 'form.php'; ?>

</div>

</body>
</html>

