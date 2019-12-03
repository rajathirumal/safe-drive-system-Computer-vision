<html>

<head>
    <link rel="stylesheet" href="style.css">
    <script src="jquery.min.js"></script>
    <script>
        function Driver() {
            
            jsfun('Drowsiness');
            var ip = "";
            ip = $("#ip11").val() + "." + $("#ip12").val();
            console.log(ip);
            $.ajax({
                url: "Webcam Cmd.php?ip=" + ip + "&type=driver",
                success: function (result) 
                {
                    
                    console.log(result);
                }
            });
            
        }

        function People() {
            
            jsfun('peopleCount');
            var ip = "";
            ip = $("#ip21").val() + "." + $("#ip22").val();
            console.log(ip);
            $.ajax({

                url: "Webcam Cmd.php?ip=" + ip + "&type=people",
                success: function (result) {
                    
                    console.log(result);
                }
            });
        }
        function jsfun(val2) {

            var today = new Date();
            //Thu Aug 15 2019 00:09:56 GMT 0530 (India Standard Time)
            $.ajax({
                type: "POST",
                url: "function.php",
                data: 'value1=' + today + '&value2=' + val2,
                success: function (res) {
                    console.log(res);
                }
            });

        }
    </script>
    <script type="text/javascript" src="warpspeed.min.js"></script>
</head>

<body>


    <div style="position:fixed; z-index:0; top:0; left:0; width:100%; height:100%;">
        <canvas id="canvas" style="width:100%; height:100%;"></canvas>
        <script type="text/javascript">new WarpSpeed("canvas");</script>
    </div>

    <div style="position:fixed; z-index:1; top:0; left:0; width:100%; height:100%; overflow:auto;">
        <div class="header">
            <h1>S A F E &nbspD R I V E &nbspS Y S T E M </h1>
            <p>Safety matters ...!!! </p>
        </div>
        <div class="row">
            <div class="column">
                <h1>DROWSINESS ALERT</h1>
                http://192.168.<input id="ip11" style="width:30px;" maxlength="3" />.<input id="ip12" style="width:30px;" maxlength="3" />:8080<br>
                <br>
                <button id="WebCam" onclick="Driver()">WebCam On</button><br>

                <div class="instruction">
                    <p style="font-weight: bolder">Description : </p>
                    <p>&nbsp &nbsp Monitoring the face of the driver helps in the detection of the amount of drowsiness of the driver</p>
                    <p style="color: red; font-size: 12px"> <b>*</b>&nbspTo stop the execution switch the window and Press <b>Q</b>..</p>
                </div>
            </div>
            <div class="column" id="empty"></div>
            <div class="column">
                <h1>PEOPLE COUNT</h1>
                http://192.168.<input id="ip21" style="width:30px;" maxlength="3" />.<input id="ip22"
                    style="width:30px;" maxlength="3" />:8080<br>
                <br>
                <button id="WebCam" onclick="People()">WebCam On</button><br>
                <div class="instruction">
                    <p style="font-weight: bolder">Description : </p>
                    <p>&nbsp &nbsp Keeping an eye on the number of people inside the bus helps in hard situations such as accidents</p>
                    <p style="color: red; font-size: 12px"> <b>*</b>&nbspTo stop the execution switch the window and Press <b>Q</b>..</p>
                    
                </div>
            </div>
        </div>
    </div>
</body>

</html>