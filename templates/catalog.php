<div class="container content">
  <div class="row">
    <div class="col-lg-3">
      <ul class="list-group">
        <?php
        $sql_cat = $link->query("select * from `category`");
        foreach ($sql_cat as $cat) :
        ?>
          <a href="ndex.php?page=product_cat&id_cat=<?php echo $cat['id_category']; ?>">
            <li class="list-group-item"><?php echo $cat['name']; ?></li>
          </a>
        <?php endforeach; ?>
        <a href="ndex.php?page=product_cat&id_cat=0">
          <li class="list-group-item">Всё</li>
        </a>
      </ul>
    </div>
    <div class="col-md-9">
    <?php
    foreach ($sql as $good):

     ?>
      <section class="main-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-6 mb-3">
              <div class="product-card">
                <div class="product-thumb"><a href="tovarcart.html"><img src="<?php echo $good['imgs']; ?>" alt=""></a>
                </div>
                <div class="product-details">
                  <h4><a href="#"><?php echo $good['name']; ?></a></h4>
                  <p><?php echo $good['desc']; ?></p>
                  <div class="product-bottom-details d-flex justify-content-between">
                    <div class="product-price">
                      <small>$600</small> <?php echo $good['price']." $"; ?>
                    </div>
                    <div class="product-links">
                      <a href="#"><i class="fas fa-shopping-basket"></i></a>
                      <a href="#"><i class="fas fa-heart"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php endforeach;?>
    </div>
  </div>
</div>