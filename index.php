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
    </style>
</head>
<body>
<div class="form">
    <h2>Registration Form</h2>

    <form method="post" enctype="multipart/form-data">
        <label for="full_name">Full Name:</label><br>
        <input type="text" id="full_name" name="full_name" placeholder="Enter your full name"><br><br>

        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" placeholder="Enter a username"><br><br>

        <label for="birthdate">Birthdate:</label><br>
        <input type="date" id="birthdate" name="birthdate" placeholder="Enter your birthdate"><br><br>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" placeholder="Enter your phone number"><br><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address" placeholder="Enter your address"></textarea><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" placeholder="Enter a password"><br><br>

        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password"><br><br>

        <label for="user_image">User Image:</label><br>
        <input type="file" id="user_image" name="user_image"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" placeholder="Enter your email"><br><br>

        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>

<?php include 'footer.php'; ?>

