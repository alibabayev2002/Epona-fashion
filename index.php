<?php $page = $_GET['page'] ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <title>E P O N A</title>
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
                                                <li style=""><img  class="logo" src="images/logo.png" width="100" alt=""></li>
                                                <!-- <li style="margin-bottom: 0%;"><button  class="log_button">EXIT</button></li> -->
                                        </menu>
                                
                                
                                <menu>
                                                <li><a <?php if($page == '') { ?> style="border-bottom: 1px black solid;color:black;"<?php } ?> href="index.php">HOME</a></li>
                                                <li><a <?php if($page == 'about') { ?> style="border-bottom: 1px black solid;color:black;"<?php } ?> href="index.php?page=about">ABOUT</a></li>
                                                <li><a <?php if($page == 'world') { ?> style="border-bottom: 1px black solid;color:black;"<?php } ?> href="index.php?page=world">WORLD</a></li>
                                                <li><a <?php if($page == 'sale') { ?> style="border-bottom: 1px black solid;color:black;"<?php } ?> href="index.php?page=sale">SALE</a></li>
                                            </menu>
                                            <div style="display: flex; flex-direction: row;text-align: center;justify-content: center; margin-top: 15%;width: 90%;" class="menu_content">
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

                                                <p style="font:sans-serif;margin-top:10%;font-size:10px;color:silver;">FREE US SHIPPING ON ORDERS OVER $100</p>
                                                <p style="font-family: 'Raleway', sans-serif;margin-top:10%;font-size:16px;">COLLECTIONS</p>
                                                <menu style="">
                                                                <li style="width:30%;"> <img style="flex: 1;" id="img" width="32%" src="images/wallpaper.jpg" alt=""></li>
                                                                 <li style="width:30%"><img style="flex: 1;"  id="img" width="30%" src="images/wallpaper3.jpg" alt=""></li>
                                                 </menu>
                                                 <menu style="">
                                                                <li style="width:30%;"> <img style="flex: 1;" id="img" width="32%" src="images/wallpaper.jpg" alt=""></li>
                                                                 <li style="width:30%"><img style="flex: 1;"  id="img" width="30%" src="images/wallpaper3.jpg" alt=""></li>
                                                 </menu>
                                                <!-- <div style="display: flex;flex-direction: row; width: 100%;">
                                                                <img style="" id="img" width="30%" src="wallpaper2.jpg" alt="">
                                                                <img style="" id="img" width="30%" src="wallpaper3.jpg" alt="">
                                                </div> -->
                        </div>
                        <div id="epona" onclick="stop()">
                                <header>
                                                <!-- <div class="container"> -->
                                                        
                                                        <div class="test"><img style="float: left;" onclick="start()" id="menu" class="search_icon" src="images/menu.png" width="24px" alt=""></div>
                                                        <div class="test1"><img class="logo" src="images/logo.png" width="90" alt=""></div>
                                                        <div class="" style="float:right;flex:1;">
                                                                <img style="margin-right:5%;" class="profile_icon" width="19px" src="images/user.png" alt="">
                                                                <img style="margin-right:8%;"  class="profile_icon" width="18px" src="images/search.svg" alt="">
                                                                <img style="margin-right:0%;"  class="profile_icon" width="18px" src="images/shop.png" alt="">
                                                        </div>
                                                <!-- </div> -->
                                            </header>
                                            <div class="center">
                                            <br>
                                                    <!-- <p class="welcome_text">XOŞ GƏLMİŞSİNİZ !</p> -->
                                                    <?php 
        
        if($page == ''){
                require_once('home.php');
        }elseif($page == 'about'){
                require_once('about.php');
        }
        ?>


                                        <!-- <img id="img2" style="margin-top: 2%;" src="wallpaper4.jpg" width="74%" alt=""> -->


                                        <script>
                                                var x;
                                                var i = 0;
                                                var test = 1;
                                                var y = 9;
                                                var opacity;
                                                // document.getElementById("menu").onc
                                                function start() {

                                                        var interval = setInterval(function () {
                                                                if (test == 1) {
                                                                        x = document.getElementById(
                                                                                "pp").style.left;
                                                                        document.getElementById("pp")
                                                                                .style.left =
                                                                                parseInt(x) + parseInt(
                                                                                        8) + 'px';
                                                                        i = i + 8;
                                                                        if (i == 600) {
                                                                                clearInterval(interval);
                                                                                test = 0;
                                                                                i = 0;
                                                                        }
                                                                }

                                                        }, 1);
                                                        var interval2 = setInterval(function () {
                                                                opacity = document.getElementById(
                                                                                'epona').style
                                                                        .opacity;
                                                                document.getElementById('epona').style
                                                                        .opacity = '.' +
                                                                        y;
                                                                // alert(document.getElementById('epona').style.opacity);
                                                                if (y != 1) {
                                                                        y = y - 1;
                                                                }
                                                                if (y == 1 && test == 0) {
                                                                        y = 9;
                                                                        clearInterval(interval2);
                                                                }
                                                        }, 20);
                                                }

                                                function stop() {
                                                        if (test != 1) {
                                                                i = 300;
                                                                var interval3 = setInterval(function () {
                                                                        x = document.getElementById(
                                                                                "pp").style.left;
                                                                        document.getElementById("pp")
                                                                                .style.left =
                                                                                parseInt(x) - parseInt(
                                                                                        6) + 'px';
                                                                        i = i - 6;
                                                                        if (i == -300) {
                                                                                y = 9;
                                                                                test = 0;
                                                                                clearInterval(
                                                                                        interval3
                                                                                );
                                                                                test = 1;
                                                                                i = 0;


                                                                        }
                                                                }, 1);
                                                                var interval2 = setInterval(function () {
                                                                        opacity = document
                                                                                .getElementById('epona')
                                                                                .style
                                                                                .opacity;
                                                                        document.getElementById('epona')
                                                                                .style.opacity =
                                                                                '.' + y;
                                                                        // alert(document.getElementById('epona').style.opacity);
                                                                        if (y != 10) {
                                                                                y = y + 1;
                                                                                clearInterval(
                                                                                        interval2
                                                                                );
                                                                        }

                                                                }, 80);

                                                        }
                                                }

                                                //         var i = 1;
                                                //         var test =true;

                                                //     var interval = setInterval(function(){
                                                //         if(test==true){


                                                //             document.getElementById("img").style.opacity = '0.'+i;
                                                //             document.getElementById("img1").style.opacity = '0.'+i;
                                                //             document.getElementById("img2").style.opacity = '0.'+i;

                                                //         i = i + 1;
                                                //         if(i == 10){
                                                //             clearInterval(interval);
                                                //         }
                                                //         }else{
                                                //             i =500;
                                                //         }

                                                //    }, 40)
                                        </script>
                                </div>
                        </div>
                </div>
                <footer>

                        <div
                                style="text-align: center;width: 100%;display: flex;align-items: center;justify-content: center;">
                                <p
                                        style="font-family: 'Raleway', sans-serif;font-size:11px;border-top: 1px solid;padding: 1%;width: 15%;">
                                        SIGN UP</p>
                        </div>
                        <p style="font-family: 'Raleway', sans-serif;font-size:9px;margin-top: 3%;">© 2019 AETHER
                                APPAREL</p>
                        <p style="font-family: 'Raleway', sans-serif;font-size:9px;margin-top: 1%;">PRIVACY POLICY</p>

                </footer>
        </div>
</body>

</html>