<?php include(APPROOT.'\App\Views\Includes\header.php'); ?>

<body>

    <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-10">
            <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
							<h1 class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Adult-Patient Login</h1>
                            <form class="mx-1 mx-md-4" action="<?php echo URLROOT?>/adult-patient/login" method='POST'>
                                <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fa fa-envelope fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <input class="form-control" type="email" name="email" value="<?php echo $data['email']?>" placeholder="Email" required autofocus>
                                        <span style="color:red"><?php echo $data['email_err']?></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fa fa-key fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <input class="form-control" type="password" name="password" value="<?php echo $data['password']?>" placeholder="Password" required>
                                        <span style="color:red"><?php echo $data['password_err']?></span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                    <input type="submit" class="btn btn-primary" value="Log-in">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                            <img src="https://i.pinimg.com/originals/ce/ce/88/cece88244f0eec936f250ba1dc67be67.jpg" width=700 height=700 class="img-fluid" alt="Sample image"> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 text-muted">
				Copyright &copy; Code Devours 
			</div>
        </div>
        </div>
    </div>
    </section>
</body>
</html>
