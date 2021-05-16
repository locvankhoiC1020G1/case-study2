<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

    #header {
        width: 100%;

    }

    #logo {
        margin-left: auto;
        margin-right: auto;
    }

    #login {
        text-align: right;
        margin-right: auto;
    }

    #join {
        text-align: left;
        margin-right:;
    }

    #searchCol {
        margin-left: auto;
    }

    #head {
        border-bottom: outset;
    }

    #header2 {
        width: 100%;
    }

    #backgroundImg {
        width: 100%;
        height: 550px;
    }

    .dropbtn {
        background-color: white;
        color: black;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: white;
    }

    #textinside {
/*
        chuyển thành rgb
*/
        background-image: linear-gradient(to left, violet, indigo, blue, green, yellow, orange, red);
        font-size: 30px;
        position: absolute;
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);

    }
    .centered {
        position: absolute;
        top: 25%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    #footer{
        color: white;
        background-color: black;
        width: 100%;
        text-align: center;
    }
</style>
<body>
<div id="head">
    <table id="header">
        <tr>
            <td id="searchCol">
                <form action="">
                    <input type="text">
                    <button type="submit"><img src="iconsearch.png" alt="" style="width: 12px"></button>
                </form>

            </td>
            <td id="logo"><img src="img/corsair-logo.svg" width="150px" alt=""> </td>
            <td id="login"><b><a href="">Sign In</a></b></td>
            <td id="join">|<b><a href="">Join Us</a></b></td>
        </tr>
    </table>
</div>
<table id="header2">
    <th>
        <div class="dropdown">
            <button class="dropbtn"><b>STREAMING GEAR</b></button>
            <div class="dropdown-content">
                <a href="#">Keyboards</a>
                <a href="#">Mouse</a>
                <a href="#">Head Phone</a>
                <a href="#">Mice</a>
                <a href="#">Mouse Pad</a>
                <a href="#">Chair</a>
                <a href="#">Accessories</a>
                <a href="#">Ambient Lightning</a>
                <a href="#">FPS</a>
            </div>
        </div>
    </th>
    <th>
        <div class="dropdown">
            <button class="dropbtn"><b>STREAMING GEAR</b></button>
            <div class="dropdown-content">
                <a href="#">Capture</a>
                <a href="#">Stream Deck</a>
                <a href="#">Audio</a>
                <a href="#">Lightning</a>
                <a href="#">Green Creen</a>
                <a href="#">Multi Mount</a>
            </div>
        </div>
    <th>
        <div class="dropdown">
            <button class="dropbtn"><b>PC COMPONETS</b></button>
            <div class="dropdown-content">
                <a href="#">Cases</a>
                <a href="#">CPU Coolers</a>
                <a href="#">Fans</a>
                <a href="#">Memory</a>
                <a href="#">Storage</a>
                <a href="#">Custom Cooling</a>
            </div>
        </div>
    </th>
    <th>
        <div class="dropdown">
            <button class="dropbtn"><b>GAMING PCS</b></button>
            <div class="dropdown-content">
                <a href="#">Corsair AIO PC</a>
                <a href="#">Corsair Workstation</a>
                <a href="#">Extremely PC Gaming</a>
            </div>
        </div>
    </th>
    <th>
        <div class="dropdown">
            <button class="dropbtn"><b>SOFTWARE</b></button>
            <div class="dropdown-content">
                <a href="#">Keyboard</a>
                <a href="#">Mouse</a>
                <a href="#">Head Phone</a>
            </div>
        </div>
    </th>
    <th>
        <div class="dropdown">
            <button class="dropbtn"><b>COMUNITY</b></button>
            <div class="dropdown-content">
                <a href="#">Forum</a>
                <a href="#">Blog</a>
                <a href="#">Wall Paper</a>
                <a href="#">Streamers</a>
                <a href="#">Esports</a>
                <a href="#">Corsair Gaming</a>
            </div>
        </div>
    </th>

    <th>
        <div class="dropdown">
            <button class="dropbtn"><b>SUPPORT</b></button>
            <div class="dropdown-content">
                <a href="#">Download Software</a>
                <a href="#">FAQs</a>
                <a href="#">Warranty</a>
                <a href="#">Customer Support</a>
            </div>
        </div>
    </th>
</table>
<div>
    <img src="corsairbackground.jpg" style="width: 100%" id="backgroundImg">
    <div id="textinside"> BUILD IT BEAUTIFUL</div>
    <div class="centered">
        <button>SHOP NOW</button></div>

</div>
<!--footer
-->
<table id="footer">
    <tr>
        <th>WHERE TO BUY</th>
        <th>SUPPORT</th>
        <th>CORSAIR</th>
        <th>BE THE FIRST TO KNOWN</th>
    </tr>
    <tr>
        <td></td>
        <td style="font-size: 15px">Downloads</td>
        <td style="font-size: 15px">About</td>
        <td>GET SPECIAL OFFERS,
            EXCLUSIVE PRODUCT NEWS,<br>
            AND EVENT INFO STRAIGHT TO YOUR INBOX<br>
        </td>
    </tr>
    <tr>
        <td></td>
        <td style="font-size: 15px">Customer Support</td>
        <td style="font-size: 15px">Investor Relations</td>
        <td></td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>
            <button><img src="facebook.png" alt="" style="width: 15px"></button>
            <button><img src="youtube.jpg" alt="" style="width: 15px"></button>
            <button><img src="twitter.png" alt="" style="width: 15px"></button>
            <button><img src="instagram.png" alt="" style="width: 15px"></button>
        </td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
</body>
</html>