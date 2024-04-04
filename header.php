<!DOCTYPE html>
<html>
<head>
    <title><?php echo "Registration - " . date("Y"); ?></title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
        }
        h1 {
            margin: 10px;
            padding: 0px;
            text-align: center;
        }
        header {
            background-color: black;
            color: white;
            position: relative;
            width: 100%;
            top: 0;
            font-size: 10px;
            height: 50px;
            overflow: hidden;
            display: flex;

        }
        nav {
            margin-left: auto;
            float: left;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            font-size: 20px;
        }

        nav ul li {
            float: left;
        }

        nav ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        nav ul li a:hover {
            background-color: #ffffff;
            color: black;
        }

    </style>
</head>
<body>

<header>
    <h1><?php echo "The Registration Page for " . date("Y")?></h1>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</header>



</body>
</html>