<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
			<a class="navbar-brand text-white" href="#">Irpandi.id</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url("index.php/home")?>">Home</a>
					</li>
					
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="<?=base_url("index.php/post")?>" data-toggle="dropdown">Post</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="<?=base_url("index.php/post")?>">All Post</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Link 2</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Link 3</a>
						</div>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?=base_url("index.php/contact")?>">Contact</a>
					</li>					
				</ul>
			</div>
</nav>