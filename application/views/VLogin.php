<!doctype html>
<html lang="en">
  <head>
  	<title>Login 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login #04</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(<?php echo base_url();?>asset/images/bg-1.jpg);">
			        </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
			      	</div>
					<form action="<?php echo base_url('prosesLogin');?>" method="post" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" name="username" class="form-control" placeholder="Username" required>
			      		</div>
		                <div class="form-group mb-3">
                            <label class="label" for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
		                </div>
		                <div class="form-group">
		            	    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		                </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

  <script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>asset/js/popper.js"></script>
  <script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>asset/js/main.js"></script>

	</body>
</html>

