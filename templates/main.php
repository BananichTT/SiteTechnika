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

<!-- Карточка товара -->

<section class="main-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-6 mb-3">
       <div class="product-card">
        <div class="product-thumb"><a href="tovarcart.html"><img src="img/product/1.jpg" alt=""></a>
        </div>
        <div class="product-details">
          <h4><a href="#">Washer</a></h4>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur et reprehenderit nisi eius impedit corrupti voluptatem quas omnis necessitatibus culpa dolores at accusantium quaerat eaque, molestias suscipit incidunt inventore accusamus!</p>
          <div class="product-bottom-details d-flex justify-content-between">
            <div class="product-price">
              <small>$600</small> $499.99
            </div>
            <div class="product-links">
              <a href="#"><i class="fas fa-shopping-basket"></i></a>
              <a href="#"><i class="fas fa-heart"></i></a>
            </div>
          </div>
        </div>         
      </div> 
    </div>

    <div class="col-lg-4 col-sm-6 mb-3">
     <div class="product-card">
      <div class="product-thumb"><a href="#"><img src="img/product/2.jpg" alt=""></a>
      </div>
      <div class="product-details">
        <h4><a href="#">Toaster</a></h4>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur et reprehenderit nisi eius impedit corrupti voluptatem quas omnis necessitatibus culpa dolores at accusantium quaerat eaque, molestias suscipit incidunt inventore accusamus!</p>
        <div class="product-bottom-details d-flex justify-content-between">
          <div class="product-price">
            <small>$300</small> $289.89
          </div>
          <div class="product-links">
            <a href="#"><i class="fas fa-shopping-basket"></i></a>
            <a href="#"><i class="fas fa-heart"></i></a>
          </div>
        </div>
      </div>         
    </div> 
  </div>

  <div class="col-lg-4 col-sm-6 mb-3">
   <div class="product-card">
    <div class="product-thumb"><a href="#"><img src="img/product/3.jpg" alt=""></a>
    </div>
    <div class="product-details">
      <h4><a href="#">Mixer</a></h4>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur et reprehenderit nisi eius impedit corrupti voluptatem quas omnis necessitatibus culpa dolores at accusantium quaerat eaque, molestias suscipit incidunt inventore accusamus!</p>
      <div class="product-bottom-details d-flex justify-content-between">
        <div class="product-price">
          <small>$220</small> $150.90
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