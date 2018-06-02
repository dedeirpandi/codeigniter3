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

                        <?=$page_number?>
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
                                        <a href="#" class="btn btn-primary">Add to Cart</a>
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
