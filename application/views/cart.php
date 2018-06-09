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
						

                        <div class='clearfix'></div>

						<div class="row">
                            <h3>Cart</h3>
							
							<div class="col-md-12">
                            <form class="form" action="<?=base_url("index.php/cart/update")?>" method="post">
                            <table class="table table-bordered">
                                <thead>
                                    <th>Image</th>
                                    <th>Product title</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </thead>  

                                <tbody>
									<?php foreach($this->cart->contents() as $item){ ?>
                                    <tr>
                                        <td></td>
										<td><?=$item["name"]?></td>
										<td><?=$item["price"]?></td>
										<td>
											<div class="input-group">
												<input type="hidden" name="rowid[]" value="<?=$item["rowid"]?>">
												<input type="number" name="qty[]" class="form-control input-number" value="<?=$item["qty"]?>" min="1">
												
											</div>
										
										</td>
										<td><?=$item["subtotal"]?></td>
										<td><a class="btn btn-danger" href="<?=base_url("index.php/cart/delete/$item[rowid]")?>">Delete</a></td>
                                    </tr>
									<?php } ?>
                                <tbody>  
                            </table>
							<button class="float-left btn btn-success" type="submit">Update Cart</button>
							<a href="<?=base_url("index.php/cart/checkout")?>" class="float-right btn btn-primary" type="submit">CheckOut</a>
							</form>
							

                            
					    </div>
						<span class="clearfix"></span>
					</div>
					
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
