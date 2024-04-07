<?php
  // if(isset($_SERVER["POST"])){
    include("upload.php");
    $name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirm = $password;
    $email = $_POST['email'];
    $phone = isset($_POST['phone']) ? $_POST['phone'] : null; // set $phone to null if the key is not defined
    $address = $_POST['address'];
    $birthday = $_POST['birthdate'];
    $user_image = $_FILES['user_image'];
    $image = $user_image["name"];

    // Database connection
    $conn = new mysqli('localhost','root','','web_based');
    if($conn->connect_error){
        echo "$conn->connect_error";
        echo json_encode(["success"=>false,"error"=>"Connection Failed : ". $conn->connect_error]);
    } else {
        $stmt = $conn->prepare("insert into assignment1(name, username,email, password,password_confirm,phone, address, birthday, image) values(?,?,? ,?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $name, $username, $email, $password,$password_confirm, $phone, $address, $birthday,   $image);
        
        $execval = $stmt->execute();
        if ($execval === false) {
          echo json_encode(["success"=>false,"error"=>'Error inserting data into database: ' . $conn->error]);
        }        
        $stmt->close();
        $conn->close();
        echo json_encode(["success"=>true,"message"=>'Done']);
    }
  
?>
