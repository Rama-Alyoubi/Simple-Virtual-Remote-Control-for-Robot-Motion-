<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Remote Control</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #9AA698;
        }
        .container {
            position: relative; 
            width: 100%;
            height: 10vh; 
            display: flex; 
            justify-content: center;
            align-items: center;
        }

        .title {
            font-family: Arial, sans-serif;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            text-align: center;
            color: #24272C;
            font-size: 48px;
            font-weight: bold;
        }
        .remote {
            display: flex;
            flex-wrap: wrap;
            margin: 50px auto;
            padding: 20px;
            background-color: #24272C;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
            border-radius: 40px;
            max-width: 683px;
            max-height: 360px;
            width: 683px;
            height: 360px;
            border: 5px solid #000000;
        }

        .button {
            display: flex;
            justify-content: center;
            border: none;
            align-items: center;
            margin-right: 20px;
            margin-bottom: 20px;
            background-color: #24272C;
            text-shadow: 0px 0px 5px rgba(0,0,0,0.5);
            cursor: pointer;
            transition: all 0.2s ease-in-out;
            box-shadow: -10px -10px 15px rgba(0, 0, 0, 0.4), 10px 10px 15px rgba(70, 70, 70, 0.12);
            color: #9AA698;
        }

            .button:hover {
                box-shadow: inset -10px -10px 15px rgba(0, 0, 0, 0.1), inset 10px 10px 15px rgba(70, 70, 70, 0.12);
                transform: translateY(4px);
            }

        #power {
            width: 100px;
            height: 100px;
            border-radius: 50px;
            font-size: 35px;
            position: absolute;
            transform: translate(480%, 70%);
        }

        #left {
            width: 100px;
            height: 100px;
            border-radius: 20px;
            font-size: 50px;
            position: absolute;
            transform: translate(30%, 135%);
        }

        #right {
            width: 100px;
            height: 100px;
            border-radius: 20px;
            font-size: 50px;
            position: absolute;
            transform: translate(220%, 135%);
        }

        #forward {
            width: 100px;
            height: 100px;
            border-radius: 20px;
            font-size: 45px;
            position: absolute;
            transform: translate(125%, 20%);
        }

        #backward {
            width: 100px;
            height: 100px;
            border-radius: 20px;
            font-size: 45px;
            position: absolute;
            transform: translate(125%, 250%);
        }

        #stop {
            font-family: Arial, sans-serif;
            width: 230px;
            height: 100px;
            border-radius: 20px;
            font-size: 40px;
            position: absolute;
            transform: translate(180%, 230%);
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1 class="title">Virtual Remote Control</h1>
    </div>
    <div class="remote">
        <button id="power" class="button"><i class="fa fa-power-off"></i></button>
        <button id="left" class="button">&#60;</button>
        <button id="right" class="button">&#62;</button>
        <button id="forward" class="button">&#8743;</button>
        <button id="backward" class="button">&#8744;</button>
        <button id="stop" class="button">stop</button>
    </div>

    <script>
        const powerButton = document.getElementById('power');
        const leftButton = document.getElementById('left');
        const rightButton = document.getElementById('right');
        const forwardButton = document.getElementById('forward');
        const backwardButton = document.getElementById('backward');
        const stopButton = document.getElementById('stop');

        powerButton.addEventListener('click', function () {
            var letter = "p";
            sendDataToDatabase(letter);
        });

        leftButton.addEventListener('click', function () {
            var letter = "l";
            sendDataToDatabase(letter);
        });

        rightButton.addEventListener('click', function () {
            var letter = "r";
            sendDataToDatabase(letter);
        });

        forwardButton.addEventListener('click', function () {
            var letter = "f";
            sendDataToDatabase(letter);
        });

        backwardButton.addEventListener('click', function () {
            var letter = "b";
            sendDataToDatabase(letter);
        });

        stopButton.addEventListener('click', function () {
            var letter = "s";
            sendDataToDatabase(letter);
        });

        function sendDataToDatabase(letter) {
        
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "connect.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("letter=" + letter);
        }
    </script>
</body>


</html>