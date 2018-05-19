<!DOCTYPE html>
<html>
	<head>
		<?php $this->load->view("head")?>
	</head>
	
	<body>
		<?php $this->load->view("nav")?>
		
		
						
		<section id="contact"> 
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="card-header bg-info">
							<h1 class="text-white text-center">Contact</h1>
						</div>
						
						<div class="card">					
							<form role="form">
								<div class="card-body">
									<div class="form-group">
										<label>Name</label>
										<input type="text" name="name" class="form-control">
									</div>
									
									<div class="form-group">
										<label>Subject</label>
										<input type="text" name="subject" class="form-control">
									</div>
									
									<div class="form-group">
										<label>Email</label>
										<input type="email" name="email" class="form-control">
									</div>
									
									<div class="form-group">
										<label>Message</label>
										<textarea rows=10px class="form-control" name="message"></textarea>
									</div>
								</div>	
								
								<div class="card-footer">
									<button class=" btn btn-success" type="submit">Submit</button>
									<button class="btn btn-secondary" type="reset">Reset</button>
								</div>
							</form>
						</div>
					</div>
					
					<div class="col-md-8">
						<div id="map"></div>
					</div>
				</div>				
			</div>		
		</section>
		
		

		
		<script>
            function initMap() {
                // -6.216517, 106.769968
              var uluru = {lat: -6.216517, lng: 106.769968};
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                center: uluru
              });
              var marker = new google.maps.Marker({
                position: uluru,
                map: map
              });
            }
        </script>
		<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuCx1p8ra6uK8T9sFrGJCOODEGgQG_-fo&callback=initMap"> 
		</script>

        <?php $this->load->view("footer")?>    
		
	</body>
</html>
