<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
</head>
<body>
    <?php include("header.php"); ?>
    <div class="home  bg-light  -">
        <div class="container pt-5 pt-5">
            <h1 class="basecolor text-center py-3   px-3 ">Registration Form</h1>
            <form method="POST" action="DB_Ops.php" id="form" enctype="multipart/form-data" name="my-form"  onsubmit="return validateForm()" >
                    <div class="row d-flex flex-wrap justify-content-center ">
                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                            <label for="fname_id">Full Name</label>
                            <br>
                            <br>
                                <input type="text" required class="form-control" id="fname_id" name="full_name" oninput="ValidateName()"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Example: John doe">
                                    <p class="errors" id="nameerror"></p>
                                    
                            </div>
                        </div>
                        

                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                            <label for="uname_id">username</label>
                            <br>
                            <br>
                                <input required type="text" class="form-control" id="uname_id" name="username" oninput="ValidateUserName()"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Must Be Unique">
                                   
                                    <p class="errors" id="usererror"></p>
                                <div id="uname_response"></div>
                            </div>
                        </div>

                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                            <label for="email_id">Email</label>
                            <br>
                            <br>
                                <input required class="form-control" id="email_id" name="email" data-bs-toggle="tooltip" oninput="ValidateEmail()"
                                    data-bs-placement="bottom" title="Must Contain @ , .com">
                                  
                                    <p class="errors" id="emailerror"></p>

                            </div>
                        </div>

                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                            <label for="password_id">Password</label>
                            <br>
                            <br>
                                <input type="password" required class="form-control" id="password_id" name="password"
                                    data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                    title="Must contain : <ul><li>Eight characters or more</li><li>Number & Special char</li><li>Upper/lower case chars</li></ul>" oninput="ValidatePassword()"/>
                                    
                                    <p class="errors" id="passworderror"></p>
                            </div>
                        </div>


                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                            <label for="password2_id">Confirm Password</label>
                            <br>
                            <br>
                                <input type="password" required  class="form-control" id="password2_id" name="repassword"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="Must Match previous password" oninput="ConfirmPassword()">
                                    
                                    <p class="errors" id="confirmerror"></p>
                            </div>
                        </div>

                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                            <label for="phone">Phone Number</label>
                            <br>
                            <br>
                                <input type="tel"  required class="form-control" id="phone" name="phone" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Only accept Egyptian Numbers without +20" oninput="ValidatePhone()">
                                   
                                    <p class="errors" id="PhoneError"></p>
                            </div>
                        </div>

                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                            <label for="address_id">Address</label>
                            <br>
                            <br>
                                <input type="text" required class="form-control" id="address_id" name="address"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Example : 29 cairo st" oninput="ValidateAddress()">
                                   
                                    <p class="errors" id="AddressError"></p>
                            </div>
                        </div>

                        <div class="col-md-6 mt-3 ">

                            <div class="form-floating mb-3">
                            <label for="bd_id">birthdate</label>
                            <br>
                            <br>
                                <input type="date" required class="form-control" id="bd_id" name="birthdate"
                                    data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                    title="Valid date between : <br> 1900-2024">   
                            </div>
                        </div>

                        
                        <div class="col-md-6 mt-3">
                        <button type="button" id="getActorBirthdaysBtn" class="mb-3">Get Actors Born on Your Birthday</button> 
                        </div>
                        <br><br>
                        <div class="birthdays">
                       <div class="Bheader" style="background-color:aliceblue;">
                       <div >Actors Born at your birthday:</div>
                       </div>
                       <br>
                      <div class="Bbody">
                     <div id="names" style="display: flex; flex-wrap: nowrap; overflow-x: auto;">
                    </div>
                </div>
              </div>
             </div>
                        

                        <div class="input-group my-3">
                            <input type="file" required class="form-control" name="user_image" accept="image/*" id="img_id"
                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="Only Image Extensions Available">
                        </div>

                    </div>
                    <div class="text-center">
                    <button class="mb-3" type="submit" id="submitBtn">Submit</button>
                    </div>
                  
                </form>
        </div>
        <?php include("footer.php"); ?>
        

    <script src="bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="main.js"></script>
    <script src="Validate.js"></script>
    <script src="main3.js"></script>

    
</body>
</html>

