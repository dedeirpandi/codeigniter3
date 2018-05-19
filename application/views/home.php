<!DOCTYPE html>
<html>
	<head>
		<?php $this->load->view("head")?>		
	</head>
	
	<body>
    <?php $this->load->view("nav")?>		
		
		<section id="header">
			<div class="container" style="height:100%; display:table; padding:0">
				<div style="height:100%; display:table-cell; vertical-align:middle">
					<center>
						<h1>Irpandi.id</h1>	
						<p>the easiest way to learn something new</p>	
					</center>
				</div>
			</div>
		</section>
		
		<section id="post"> 
			<div class="container">
				<center>
					<h1>Latest Post</h1>
					<p>most upload post</p>
				</center>	
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<img class="card-img-top" src="<?=base_url('assets/img/wd.jpg')?>">
							<div class="card-body">
								<h4 class="card-title">My title post</h4>
								<p class="card-text">Lorem ipsum sit dolor amet puerto roco adios</p>
							</div>					
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="card">
							<img class="card-img-top" src="<?=base_url('assets/img/wd.jpg')?>">
							<div class="card-body">
								<h4 class="card-title">My title post</h4>
								<p class="card-text">Lorem ipsum sit dolor amet puerto roco adios</p>
							</div>						
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="card">
							<img class="card-img-top" src="<?=base_url('assets/img/wd.jpg')?>">
							<div class="card-body">
								<h4 class="card-title">My title post</h4>
								<p class="card-text">Lorem ipsum sit dolor amet puerto roco adios</p>
							</div>					
						</div>
					</div>
				</div>
			</div>
			
		</section>
		
		<section id="service" class="bg-secondary">
			<div class="container">
				<center class="text-white">
					<h2>Our Service</h2>
					<p>the technology we use</p>
				</center>
				
				<div class="row">
					<div class="col-md-4">
						<center>
							<img class="rounded" src="<?=base_url('assets/img/php.png')?>" height="200" width="200">
						</center>	
					</div>
					
					<div class="col-md-4">
						<center>
							<img class="rounded-circle" src="<?=base_url('assets/img/html.jpg')?>" height="200" width="200">
						</center>	
					</div>
					
					<div class="col-md-4">
						<center>
							<img class="img-thumbnail" src="<?=base_url('assets/img/css.jpg')?>" height="200" width="200">
						</center>	
					</div>
				</div>
			</div>
		</section>

			<?php $this->load->view("footer")?>	
		
	</body>
</html>
