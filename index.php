<!DOCTYPE HTML>
<?php

include_once('calculation.php');
?>
<html>
<head>
    <title>LuckyNumbers</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="main.css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ie8.css"/><![endif]-->
</head>
<body>
<div id="screen">
    <?php for ($i = 0; $i < 5; $i++) { ?>
        <div class="number<?php echo $i + 1 ?>">
            <div class="numbers">
                <div class="number" id="<?php echo $i + 1 ?>" style="display:none;"><?php echo $listofnum[$i] ?></div>
                <div class="hours">3 sata</div>
            </div>
        </div>
    <?php } ?>
</div>
</body>

<script language=javascript>
    var numOfCalls = 1;
    var int;
    var realtime;
    var redirecttime = new Date();

    function checktime() {
        var time = new Date();
        if (time.getHours() > 12) {
            realtime = new Date();
            realtime.setHours(15, 0, 0, 0);
        } else {
            realtime = new Date();
            realtime.setHours(12, 0, 0, 0);
        }


        if (time > realtime) {


            if (numOfCalls > 5) {
                console.log(numOfCalls);
                clearTimeout(checktime);
                window.clearInterval(int);
            } else {
                 int = self.setInterval("display()", 3000);
            }

    } else {
            window.setTimeout(checktime, 1000);
        }
    }

    checktime();


//    var numOfCalls = 1;
//    var int = self.setInterval("display()", 3000);

    function display() {
        var t = numOfCalls;
        console.log(numOfCalls);
        document.getElementById(numOfCalls).style.display = "block";
        numOfCalls++;

        if (numOfCalls > 5) {
            window.clearInterval(int);
            var val = realtime.getHours();
            redirecttime.setHours(val, 5);
            redirect();
        }
        console.log(numOfCalls);
    }


    function redirect(){
        var time = new Date();

        if(time > redirecttime){
            window.location ="http://www.google.com";
        }else {
            window.setTimeout(redirect, 1000);
            console.log(redirecttime, time);
        }
    }

</script>