<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณหาพื้นที่</title>
</head>
<body>
    <h2>คำนวณหาพื้นที่</h2>

    <form action="EX01.php" method="post">
        
        <br> <input type="text" name="num1" value=""> <br>
        <br> <input type="text" name="num2" value=""> <br><br>

        <input type="radio" name="operator" value="Square"> สี่เหลี่ยมจตุรัส <br>
        <input type="radio" name="operator" value="Rectangle"> สี่เหลี่ยมผืนผ้า <br>
        <input type="radio" name="operator" value="Rhombus"> สี่เหลี่ยมคางหมู <br>
        <input type="radio" name="operator" value="Trinagle"> สามเหลี่ยม <br>

        <br> <input type="submit" name="submit"> <input type="reset" name="reset"> <br> <br>

    </form>

    <?php
        if(isset($_POST['submit'])) {

            // input
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            // input operator
            $operator = $_POST['operator'];

            // switch case
            switch ($operator) {
                case "Square" : $result = $num1 * $num1; $str = "Square"; break;
                case "Rectangle" : $result = $num1 * $num2; $str = "Rectangle"; break;
                case "Rhombus" : $result = (1/2) * $num1 * $num2; $str = "Rhombus"; break;
                case "Trinagle" : $result = (1/2) * $num1 * $num2; $str = "Triangle"; break;
            }
            echo $str . " Area is : " . $result;
        }
    ?>

</body>
</html>