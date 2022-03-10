<div class="container content">
	<div class="sort-block mb-4 mt-4">
	<form action="">
            <select onchange="location=value">
                <option value="" selected="selected">Сорторовка по имени</option>
                <option value="index.php?page=sort&id_sort=1">A-Z</option>
                <option value="index.php?page=sort&id_sort=2">Z-A</option>
            </select>

            <select onchange="location=value">
                <option value="" selected="selected">Сорторовка по цене</option>
                <option value="index.php?page=sort&id_sort=3">по возрастанию</option>
                <option value="index.php?page=sort&id_sort=4">по убыванию</option>
            </select>

        </form>
	</div>
	<div class="row">
		<div class="col-lg-3">
			<ul class="list-group">
				<?php
				$sql_cat = $link->query("select * from `category`");
				foreach ($sql_cat as $cat) :
				?>
				<a href="index.php?page=product_cat&id_cat=<?php echo $cat['id_category']; ?>">
					<li class="list-group-item"><?php echo $cat['name']; ?></li>
				</a>
				<?php endforeach; ?>
				<a href="index.php?page=product_cat&id_cat=0">
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
						<div class="col-lg-4 col-sm-4 mb-4 mt-4">
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