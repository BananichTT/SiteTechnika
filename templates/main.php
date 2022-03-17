<!-- Карусель изображений -->

<div class="container-fluid my-carousel">
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<section class="main-content">
  <div class="container">
    <div class="row">
      <?php foreach ($sql as $good) : ?>
        <div class="col-lg-4 col-sm-4 mb-4">
          <div class="product-card">
            <div class="product-thumb"><a href="index.php?page=tovarCart&id=<?php echo $good['id'] ?>"><img src="<?php echo $good['imgs']; ?>" alt=""></a>
            </div>
            <div class="product-details">
              <h4><a href="index.php?page=tovarCart&id=<?php echo $good['id'] ?>"><?php echo $good['name']; ?></a></h4>
              <p><?php echo $good['desc']; ?></p>
              <div class="product-bottom-details d-flex justify-content-between">
                <div class="product-price">
                  <?php echo $good['price'] . " $"; ?>
                </div>
                <div class="product-links">
                  <a href="#"><i class="fas fa-shopping-basket"></i></a>
                  <a href="#"><i class="fas fa-heart"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>