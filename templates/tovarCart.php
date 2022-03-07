<main class="main">
  <img src="<?php echo $good['imgs']; ?>" alt="">
  <div class="tovar d-flex-column">
    <div class="header"><?php echo $good['name']; ?></div>
    <div class="body">
        <?php echo $good['desc']; ?>
      <div class="product-bottom-details d-flex justify-content-between">
        <div class="product-price">
          <small>$300</small> <?php echo $good['price'].' $'; ?>
        </div>
        <div class="product-links">
          <a href="#"><i class="fas fa-shopping-basket"></i><span>Add to cart</span></a>
          <a href="#"><i class="fas fa-heart"></i></a>
        </div>
      </div>
    </div>
  </div>
</main>