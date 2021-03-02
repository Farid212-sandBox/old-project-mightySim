
<?php

if (isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['simID']) && isset($_POST['purchaseDatePart1']) && isset($_POST['purchasePlanPart2']) && isset($_POST['purchasePlanPart3']) && isset($_POST['submit']))
{
 if(!empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['simID']) && !empty($_POST['purchaseDatePart1']) && !empty($_POST['purchasePlanPart2']) && !empty($_POST['purchasePlanPart3']) 
    && !empty($_POST['submit'])){
    $name = htmlspecialchars($_POST['lastName'], ENT_NOQUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_NOQUOTES);
    $simID = htmlspecialchars($_POST['simID'], ENT_NOQUOTES);
    $purchaseDatePart1 = htmlspecialchars($_POST['purchaseDatePart1'], ENT_NOQUOTES);
    $purchasePlanPart2 = htmlspecialchars($_POST['purchasePlanPart2'], ENT_NOQUOTES);
    $purchasePlanPart3 = htmlspecialchars($_POST['purchasePlanPart3'], ENT_NOQUOTES);
    //body

    echo $name;
    echo $email;
    echo $simID;

    $to = "vocamabupe@nickrizos.com";
    $subject = "MightySIM receipt issue request: $simID";
    $body = "You have received a new message. ".
        " Here are the details:\n 
        Name: $lastName \n 
        email: $email \n 
        SIM ID: $simID \n 
        Purchase Date: $purchaseDatePart1 \n 
        Purchase Plan: $purchasePlanPart2 \n
        Plan: $purchasePlanPart3"; 
    //headers
    $headers = "From: " . $name . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Mime-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset-utf-8";

    //send email

    $send = mail($to, $subject, $body, $headers);
        if($send){
            echo '<br>';
            echo 'We will solve your issues as soon as possible';
        } else {
            echo 'error';
        }
    }
    else{
        echo 'Missing element';
    }
} else {
    echo 'element not existing';
}

?>

<!doctype html>
<html lang="jp">

<head>
    <title>test</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <style>
            .question{
                margin:20px;
            }

            small{
                color:gray;
            }
            span{
                color:red;
            }
            .container{
                margin:10px;
                padding:5%;
                -webkit-box-shadow: 0px 0px 20px 5px rgba(0,0,0,0.75);
                -moz-box-shadow: 0px 0px 20px 5px rgba(0,0,0,0.75);
                box-shadow: 0px 0px 20px 5px rgba(0,0,0,0.75);
            }
        </style>
</head>

<body>
    <div class="bg d-flex justify-content-center">
                <div class="container">
        <div class="row" class="header">
            <h1>
                MightySIM領収書発行リクエスト
            </h1>
        </div>
        <span>
            *Mandatory
        </span>
        <div class="row">
            <form action="" method="POST">
                <div class="question">
                    宛 名
                    <span>*</span>
                    <br>
                    <input type="text" name="lastName" value="" placeholder=" Jon Sow">
                </div>
                <div class="question">
                    領 収 書 (PDF) 送信 先 メ ー ル ア ド レ ス
                    <br>
                    <input type="email" name="email" value="">
                </div>
                <div class="question">
                    SIM ID
                    <span>*</span>
                    <br>
                    <small>13 桁</small>
                    <br>
                    <input type="text" name="simID" value="">
                </div>
                <div class="question">
                    対 象 の ご 購入 プ ラ ン 購入 日 そ の 1
                    <span>*</span>
                    <br>
                    <small>領 収 書 発 行 が 必要 な プ ラ ン を 購入 さ れ た 日 付</small>
                    <br>
                    <input type="date" name="purchaseDatePart1" value="">
                </div>
                <div class="question">
                    対 象 の ご 購入 プ ラ ン 購入 日 そ の 2
                    <br>
                    <small>領 収 書 発 行 が 必要 な プ ラ ン が 2 つ あ る 場合</small>
                    <br>
                    <input type="date" name="purchasePlanPart2" value="">
                </div>
                <div class="question">
                    対 象 の ご 購入 プ ラ ン 購入 日 そ の 3
                    <br>
                    <small>領 収 書 発 行 が 必要 な プ ラ ン が 3 つ あ る 場合</small>
                    <br>
                    <input type="date" name="purchasePlanPart3" value="">
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

            <script src="../js/gen_validatorv31.js"></script>
</body>

</html>