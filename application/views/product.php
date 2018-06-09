<!DOCTYPE html>
<html>
	<head>
		<?php $this->load->view("head")?>
	</head>
	
	<body>
		<?php $this->load->view("nav")?>
		
		<section id="post"> 
			<div class="container">
				<div class="row">
					<div class="col-md-9">

                       
						<nav class="navbar navbar-light bg-light">
							<?=$page_number?>													
							<form action="<?=base_url("index.php/product/search")?>" method="post" class="form-inline">								
								<input value="<?=$keyword = isset($keyword) ? $keyword:""?>" name="keyword" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
								<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
							</form>
						</nav> 

                        <div class='clearfix'></div>

						<div class="row">
                        <?php
                            foreach($product as $row)
                            {
                        ?>        
                            
							<div class="col-md-4">
								<div class="card">
									<img class="card-img-top" src="<?=base_url("assets/img/wd.jpg")?>">
									<div class="card-body">                                    
										<h4 class="card-title"><?=$row["product_title"]?></h4>
										<p class="card-text"><?=$row["price"]?></p>
                                        <a href="<?=base_url("index.php/cart/add/$row[product_id]")?>" class="btn btn-primary">Add to Cart</a>
									</div>					
								</div>
							</div>
                        <?php
                            }
                            
                        ?>    
					    </div>
						<span class="clearfix"></span>
					</div>
				
					<div class="col-md-3 right">
						<div class="container">
						<ul class="list-group">
							<li class="list-group-item active">
								Category
							</li>	
							<li class="list-group-item">
								<a>HTML</a>							
							</li>
							
							<li class="list-group-item">
								<a>PHP</a>							
							</li>
							<li class="list-group-item">
								<a>Laravel</a>							
							</li>
						</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>		
		</section>
      		
	</body>
</html>
