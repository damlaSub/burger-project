
<?php 
   require_once 'head.php';
  require_once 'connect.php'; 
 
 
$sql = "SELECT * FROM `products` ORDER BY `ID_product` ASC";
$requete = $db->query($sql);
$products = $requete->fetchAll(); 
$requete->execute();

?>
 



<body style="background-image: url('../images/bg.png')">
    <h1 class="text-center" style="color:beige"> Notre Carte </h1>
   
    <div class="container" class="mx-auto" style="width: 800px;">


  <?php foreach($products as $product): ?>
  
  <div class="card" style='width:28rem;'>

    <figure >
  
  <img style='width:100%;' style='height:auto;' src=<?= $product["img_url"]; ?> alt="<?=$product['name'];?>"> 
 
    </figure>

<article class="card-article">
    <h2 class="card-art-title"> <?= $product["name"]; ?> </h2>
    <p class="card-art-description"> <?= $product["description"]; ?> </p>
    <div class="card-art-price">
      <p class="prix-actuel">  <?=$product["price"]; ?> €</p>
       <button type="submit" > <i class="bi bi-cart-plus"></i> ajouter</button>  

    </div>
</article>

</div>


<?php endforeach; ?>


</div>


