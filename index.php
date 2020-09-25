<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Calculator</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            margin: 0;
            padding: 0;
            color: white;
        }
        .plate {
            width: 500px;
            padding: 20px 0px;
            background-color: black;
        }
    </style>
</head>
<body>
    <center>
        <div class="plate">
            <h1>PHP CALCULATOR</h1>
            <br>
            <form action="" method="post">
                <input type="number" name="num1" id=""> 
                <input type="number" name="num2" id="">
                <input type="submit" name="calc" value="Results">  
            </form>
            <br>
            <br>
            <?php
            if(isset($_POST['calc'])){
                $number1 = $_POST['num1'];
                $number2 = $_POST['num2'];

                if($_POST['num1']=='' || $_POST['num2']==''){
                    echo "Please Fill up Both Fields";
                }
                else{
                    $number1 = $_POST['num1'];
                    $number2 = $_POST['num2'];

                    echo "First Number is: " .$number1. "<br>";
                    echo "Second Number is: " .$number2. "<br><br>";

                    echo "Sum is : ".($number1+$number2)."<br>";
                    echo "Sub is : ".($number1-$number2)."<br>";
                    echo "Multi is : ".($number1*$number2)."<br>";
                    echo "Divi is : ".($number1/$number2)."<br>";
                }
            }
            ?>
        </div>
    </center>
</body>
</html>