<?php

if (isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['simID']) && isset($_POST['purchaseDatePart1']) && isset($_POST['purchasePlanPart2']) && isset($_POST['purchasePlanPart3']) && isset($_POST['submit']))
{
 if(!empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['simID']) && !empty($_POST['purchaseDatePart1']) && !empty($_POST['purchasePlanPart2']) && !empty($_POST['purchasePlanPart3']) && !empty($_POST['submit'])){
    $name = htmlspecialchars($_POST['lastName'], ENT_NOQUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_NOQUOTES);
    $simID = htmlspecialchars($_POST['simID'], ENT_NOQUOTES);
    $purchaseDatePart1 = htmlspecialchars($_POST['purchaseDatePart1'], ENT_NOQUOTES);
    $purchasePlanPart2 = htmlspecialchars($_POST['purchasePlanPart2'], ENT_NOQUOTES);
    $purchasePlanPart3 = htmlspecialchars($_POST['purchasePlanPart3'], ENT_NOQUOTES);
    //body

    $testMessage = '<!DOCTYPE html>
                    <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <meta http-equiv="X-UA-Compatible" content="ie=edge">
                            <title>Document</title>
                        </head>
                        <body>
                            <p>'.$name.'</p>
                            <p>'.$email.'</p>
                            <p>'.$simID.'</p>
                            <p>'.$purchaseDatePart1.'</p>
                            <p>'.$purchasePlanPart2.'</p>
                            <p>'.$purchasePlanPart3.'</p>
                        </body>
                    </html>';

    echo $testMessage;
    }
}

?>

