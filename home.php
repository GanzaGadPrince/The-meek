<?php 
include("nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Meek Baby - Baby Clothes Store</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        

        #home{
            
            background-color: #e6ffe6;
            height: 100vh;
        }

        h2 {
            font-size: 30px;
            color: black;
            font-weight: bold;
            padding-top: 80px;
            margin-bottom: 20px;
            text-align: center;
            animation: bounceIn 1s ease forwards;
        }

        .maincontent{
            display: flex;
            width: 100%;
            /* border: 1px solid green; */
        }
        .maincontent img{
            /* border: 1px solid green; */
            height: 450px;
            width: 450px;
            animation: bounceIn 1s ease forwards;
        }
        .content {
            margin-top: 10%;
            width: 60%;
            padding: 30px;
            display: flex;
            flex-direction: column;
            /* align-items: center; */
            position: relative;
            animation: bounceIn 1s ease forwards;
        }

        .content p {
            width: 80%;
            font-size: 20px;
            margin-bottom: 20px;
            text-align: justify;
            animation: bounceIn 1s ease forwards;
            opacity: 0;
        }

        .content p b{
            font-size: 23px;
            color: #00CC00;
        }

        .content a{
            width: fit-content;
            text-decoration: none;
            color: black;
            font-size: 18px;
            padding: 10px 20px;
            background-color: #33ff33;
            border-radius: 10px;
            margin-left: 30px;
            transition: background-color 0.3s ease;
        }

        .content a:hover {
            background-color: #625099;
            color: white;
        }

        .content a.animate {
            opacity: 1;
            animation: bounceIn 1s ease forwards; 
            bottom: 20px;
        }
        
        #maincontent2{
            height: 100vh;
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: translateY(-200px);
            }
            80% {
                transform: translateY(20px);
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
<div id="home">
        <h2>Welcome To The Meek Baby</h2>
    <section class="maincontent">
    <div class="content">
        <p>Step into our baby clothes wonderland! With <b>Free Delivery</b>, outfitting your little bundle of joy has never been easier. Explore our adorable collection today!</p>
        <a href="shop.php" class="animate">Shop Now &rarr;</a>
    </div>
        <img src="homecloth.png">
    </section>
</div>

    <section id="maincontent2">
        <div class="content2">
            
        
        <div class="person">
                <div class="description">
                    <img src="homecloth.jpg">
                    <p>Julious</p>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique deleniti amet dolore obcaecati maiores ut natus ab pariatur facere, quia reprehenderit. Vero voluptatem asperiores vel?</p>
            </div>


            <div class="person">
                <div class="description">
                    <img src="homecloth.jpg">
                    <p>Costo</p>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique deleniti amet dolore obcaecati maiores ut natus ab pariatur facere, quia reprehenderit. Vero voluptatem asperiores vel?</p>
            </div>


            <div class="person">
                <div class="description">
                    <img src="homecloth.jpg">
                    <p>Ludvig</p>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique deleniti amet dolore obcaecati maiores ut natus ab pariatur facere, quia reprehenderit. Vero voluptatem asperiores vel?</p>
            </div>

        </div>
    </section>
</body>
</html>
