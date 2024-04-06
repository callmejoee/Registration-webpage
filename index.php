<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .form {
            margin: 20px auto;
            width: 50%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;

        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        textarea,
        input[type="date"] {
            width: 95%;
            padding: 8px;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #04AA6D;
            color: white;
            border: none;
            width: 100%;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }
        input[type="submit"]:hover {
            background-color: #039c5a;
        }
        .errors {
          display: inline;
          color: red;
          margin: auto;
          font-weight: bold;
        }
    </style>
</head>
<body>
<div class="form">
    <h2>Registration Form</h2>

    <form method="post" enctype="multipart/form-data"  onsubmit="return validateForm()">
        <label for="full_name">Full Name:</label><br>
        <input type="text" id="full_name" name="full_name" placeholder="Enter your full name" oninput="ValidateName()" required><br><br>
        <p class="errors" id="nameerror"></p>



        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" placeholder="Enter a username" required><br><br>

        <label for="birthdate">Birthdate:</label><br>
        <input type="text" id="birthdate" name="birthdate" placeholder="Enter your birthdate" required oninput="ValidateDate()"><br><br>
        <p class="errors" id="birtherror"></p>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required><br><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address" placeholder="Enter your address" required></textarea><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" placeholder="Enter a password" oninput="ValidatePassword()" required><br><br>
        <p class="errors" id="passworderror"></p>

        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" oninput="ConfirmPassword()" required><br><br>
        <p class="errors" id="confirmerror"></p>

        <label for="user_image">User Image:</label><br>
        <input type="file" id="user_image" name="user_image"  ><br><br>

        <p class="errors" id="emailerror"></p>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" placeholder="Enter your email" oninput="ValidateEmail()" required ><br><br>

        <input type="submit" value="Submit">
        <p class="errors" id="emptyerror"></p>
    </form>
</div>


<script src="index.js"></script>
</body>
</html>

<?php include 'footer.php'; ?>

