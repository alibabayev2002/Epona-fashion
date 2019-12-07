<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <title><?=$title?></title>
    <style>

    </style>
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <div id="pp"
                style="position: fixed; left: -600px; display: flex;flex-direction: column;text-align: center;align-items: center;">
                <menu style="display:block;">
                    <!-- <li><button class="log_button">LOGIN</button></li> -->
                    <li style=""><img class="logo" src="images/logo.png" width="100" alt=""></li>
                    <!-- <li style="margin-bottom: 0%;"><button  class="log_button">EXIT</button></li> -->
                </menu>


                <menu>
                    <li><a <?php if($page == '') { ?> style="border-bottom: 1px black solid;color:black;" <?php } ?>
                            href="index.php">HOME</a></li>
                    <li><a <?php if($page == 'about') { ?> style="border-bottom: 1px black solid;color:black;"
                            <?php } ?> href="index.php?page=about">ABOUT</a></li>
                    <li><a <?php if($page == 'world') { ?> style="border-bottom: 1px black solid;color:black;"
                            <?php } ?> href="index.php?page=world">WORLD</a></li>
                    <li><a <?php if($page == 'sale') { ?> style="border-bottom: 1px black solid;color:black;" <?php } ?>
                            href="index.php?page=sale">SALE</a></li>
                </menu>
                <div style="display: flex; flex-direction: row;text-align: center;justify-content: center; margin-top: 15%;width: 90%;"
                    class="menu_content">
                    <ul style="flex: 1;">
                        <li>New Style</li>
                        <li>Base Layers</li>
                        <li>Shorts</li>
                        <li>Accesiors</li>

                    </ul>
                    <ul style=" flex: 1;">
                        <li>New Style</li>
                        <li>Base Layers</li>
                        <li>Shorts</li>
                        <li>Accesiors</li>
                    </ul>
                </div>

                <p style="font:sans-serif;margin-top:10%;font-size:10px;color:silver;">FREE US SHIPPING ON ORDERS OVER
                    $100</p>
                <p style="font-family: 'Raleway', sans-serif;margin-top:10%;font-size:16px;">COLLECTIONS</p>
                <menu style="">
                    <li style="width:30%;"> <img style="flex: 1;" id="img" width="32%" src="images/wallpaper.jpg"
                            alt=""></li>
                    <li style="width:30%"><img style="flex: 1;" id="img" width="30%" src="images/wallpaper3.jpg" alt="">
                    </li>
                </menu>
                <menu style="">
                    <li style="width:30%;"> <img style="flex: 1;" id="img" width="32%" src="images/wallpaper.jpg"
                            alt=""></li>
                    <li style="width:30%"><img style="flex: 1;" id="img" width="30%" src="images/wallpaper3.jpg" alt="">
                    </li>
                </menu>
                <!-- <div style="display: flex;flex-direction: row; width: 100%;">
                                                                <img style="" id="img" width="30%" src="wallpaper2.jpg" alt="">
                                                                <img style="" id="img" width="30%" src="wallpaper3.jpg" alt="">
                                                </div> -->
            </div>
            <div id="epona" onclick="stop()">
                <?php require 'header.php'?>
                <div class="center">
                    <br>
                    <?php echo $content;?>
                    <script src='./Js/main.js' ></script>
                </div>
            </div>
        </div>
        <?php require 'footer.php'?>