<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
</head>
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        header {
            width: 100%;
            background-color: #FFF;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .logo {
            font-size: 30px;
            color: black;
            font-weight: 10px;
        }
        
        .links {
            display: flex;
        }
        
        .links a {
            width: 100px;
            text-align: center;
            text-decoration: none;
            color: black;
            font-size: 20px;
            margin-right: 20px;
            border-bottom: 2px solid transparent;
            transition: 0.3s ease;
        }

        .links a:hover, .onright a:hover{
            border-bottom: 2px solid #cc6600;
        }

        .links a.active, .onright a.active{
            border-bottom: 2px solid #cc6600;
        }
        
        .onright {
            display: flex;
            align-items: center;
        }
        
        .onright a{
            text-decoration: none;
            color: black;
            font-size: 20px;
            margin-right: 20px;
            border-bottom: 2px solid transparent;
            transition: 1s ease;
        }

        #logout{
            background-color: red;
            padding: 5px;
            border-radius: 10px;
        }
        i{
            color: black;
            font-size: 20px;
            border-bottom: 2px solid transparent;
            transition: 1s ease;
        }

    </style>
<body>
    <header class="animated shake">
        <p class="logo">The Meek Baby</p>
        <div class="links">
            <a href="#home">Home</a>
            <a href="shop.php">Shop</a>
            <a href="#maincontent2">About Us</a>
            <a href="contact.php">Contact Us</a>
        </div>
        <div class="onright">
        <i class="fas fa-shopping-cart"></i><a href="cart.php">Cart</a>
           <a href="logout.php" id="logout">Logout</a>
            
        </div>
    </header>
</body>
</html>
