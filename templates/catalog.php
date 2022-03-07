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
			
			<section class="main-content">
				
				<div class="container">
					<div class="row">
						<?php
						foreach ($sql as $good):

						?>
						<div class="col-lg-4 col-sm-4 mb-4">
							<div class="product-card">
								<div class="product-thumb"><a href="index.php?page=tovarCart&id=<?php echo $good['id']?>"><img src="<?php echo $good['imgs']; ?>" alt=""></a>
								</div>
								<div class="product-details">
									<h4><a href="index.php?page=tovarCart&id=<?php echo $good['id']?>"><?php echo $good['name']; ?></a></h4>
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
						<?php endforeach;?>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>