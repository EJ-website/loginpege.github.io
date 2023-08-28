<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampilan</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            text-decoration: none;
            list-style: none;
            border: none;
            outline: none;
            scroll-behavior: smooth;
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --h1-font: 5rem;
            --h2-font: 2.9rem;
            --p-font: 1.1rem;

            --bg-color: #121b25;
            --text-color: #ffffff;
            --main-color: #1aa090;
            --other-color: #d6d6d6;
        }



        .navbar {
            width: 100%;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #0c1d24;
            padding: 18px 7%;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .logo {
            width: 390px;
            height: 100px;
        }

        .who h1 {
            font-size: 2.8rem;
            color: #48676b;
        }

        .user {
            width: 100%;
            height: 70vh;
            margin-top: 80px;
            align-items: center;
        }

        .who {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .who img {
            width: 200px;
            height: 200px;
            margin-bottom: 2rem
        }

        .who h1 {
            font-size: 3.5rem;
        }
    </style>

</head>
<body>
    <nav class="navbar">
        <a href="#" class="logo">
            <img src="tutel wel.png" alt="">
        </a>
    </nav>


    <section class="user">
        <div class="who">
            <img src="user.512x512.png" alt="">
            <h1><?= $_SESSION['username'] ?></h1>
        </div>
    </section>
</body>

</html>