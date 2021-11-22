<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Welcome! </h1>
    <a href="<?php echo URLROOT;?>/PHI/logout">Logout</a> 
    <h2>Add Patient Account </h2>
    <h3>Select Patient Type</h3>

    <form action="<?php echo URLROOT?>/PHI/addpatient" method='POST'>

        <label class="container">Child 
        <input type="radio"  name="Patient_type" value="child" required>
     
        </label>
        <label class="container">Adult
        <input type="radio" name="Patient_type" value="adult">
    
        </label>
        <input type="submit" name="Submit" value="submit">

    </form>

    <a href="<?php echo URLROOT;?>/PHI/addpatient"> Add Patient </a>     


  

</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>



<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
 
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-10">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <h2 class="text-center h3 fw-bold mb-5 mx-1 mx-md-4 mt-4">ADD NEW ACCOUNT</h2>
                <form action="<?php echo URLROOT?>/PHI/addpatient" method='POST'>
                  
                  <div class=" h6 text-center form-check col-md-10">
                      <label class="form-check-label" for="flexRadioDefault1"><input class="form-check-input" type="radio"  name="Patient_type"  value="child" required>Child Account</label>
                  </div>
                  <div class=" h6 text-center  form-check col-md-10">
                      <label class="form-check-label" for="flexRadioDefault1"><input class="form-check-input" type="radio" name="Patient_type" value="adult">Adult Account</label>
                  </div>
                 

                  <div class="text-center mt-4 col-md-10" >
                      <button type="Submit" class="btn btn-primary ">Submit</button>
                      <!-- <input type="submit" name="Submit" value="submit"> -->
                  </div>
                    

                </form>
                

              </div>
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

              <!-- <button type="Submit" class="btn btn-primary">Submit</button> -->
              <!-- <div class="col-md-10 col-lg-6 col-xl-1 d-flex align-items-center order-1 order-lg-2"> -->
              <div class="text-center h3 fw-bold mb-5 mx-1 mx-md-4 mt-4">
              <a href="<?php echo URLROOT;?>/PHI/logout">
              <button type="Submit" class="btn btn-danger">Log Out</button>
              </a> 
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>