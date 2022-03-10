<main class="main">
  <img src="<?php echo $good['imgs']; ?>" alt="">
  <div class="tovar d-flex-column">
    <div class="header"><?php echo $good['name']; ?></div>
    <div class="body">
      <?php echo $good['desc']; ?>
      <div class="product-bottom-details d-flex justify-content-between">
        <div class="product-price">
          <small>$300</small> <?php echo $good['price'] . ' $'; ?>
        </div>

        <form id="form1" name="form1" action="add_cart.php" method="post">
          <div class="input-group quantity_goods">
            <input type="button" value="-" id="button_minus">
            <input onchange="location=value" type="number" step="1" min="1" max="10" id="num_count" name="quantity" value="1" title="Qty">
            <input type="button" value="+" id="button_plus">
          </div>
          <input type="hidden" name="product_id" value="<?php echo $good['id'] ?>" />
          <input class='add_to_cart' type="submit" value="В корзину" name="submit">
        </form>

        <script>
          var numCount = document.getElementById('num_count');
          var plusBtn = document.getElementById('button_plus');
          var minusBtn = document.getElementById('button_minus');
          plusBtn.onclick = function() {
            var qty = parseInt(numCount.value);
            qty = qty + 1;
            numCount.value = qty;
          }
          minusBtn.onclick = function() {
            var qty = parseInt(numCount.value);
            if (qty > 1) {
              qty = qty - 1;
            }
            numCount.value = qty;
          }
        </script>
      </div>
    </div>
  </div>
</main>