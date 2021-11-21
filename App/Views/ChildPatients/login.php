<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Login - Child Patients</title>
</head>
<body>

    <section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="https://www.tenethealth.com/images/global/newsroom-ccb/cardiology-heart-care-technology-doctor.jpg?sfvrsn=befe083e_1" alt="logo" width="100">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Child-Patient Login</h1>
                            <form action="<?php echo URLROOT?>/child-patient/login" method='POST'>
                                <div class="mb-3">
                                    <div class="mb-2 w-100">
                                        <label class="m2-2 text-muted" for="email">Email</label>
                                    </div>
                                    <input class="form-control" type="text" name="email" value="<?php echo $data['email']?>">
                                    <span><?php echo $data['email_err']?></span>
                                </div>
                                <div class="mb-3">
                                    <div class="mb-2 w-100">
                                        <label class="m2-2 text-muted" for="password">Password</label>
                                    </div>
                                    <input class="form-control" type="password" name="password" value="<?php echo $data['password']?>">
                                    <span><?php echo $data['password_err']?></span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <input type="submit" class="btn btn-primary ms-auto" value="Log-in">
                                </div>
                            </form>
                        </div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account? <a href="<?php echo URLROOT; ?>/adPatient/register" class="text-dark">Create One</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; Team19 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/login.js"></script>

</body>
</html>