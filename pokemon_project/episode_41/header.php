<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Episode 41 </title>
</head>
<body>
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>        
    </div>
    <div class="progress-container">
        <div class="progress-bar"></div>
    </div>
    <header>
    <div class="sidebar">
        <?php
            $hour = date("H");
            if ($hour < 12) {
                echo "Good morning!";
            } elseif ($hour < 18) {
                echo "Good afternoon!";
            } else {
                echo "Good evening!";
            }
        ?>
          <?php
            $day = date("l");
            if ($day == "Monday") {
                echo "Happy Monday!";
            } elseif ($day == "Friday") {
                echo "TGIF!";
            } else {
                echo "Have a nice day!";
            }
          ?>
      </div>
    </header>