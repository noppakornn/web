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

    // function calculate
    function square($num1) {
        return $num1 * $num1;
    }

    function rectangle($num1, $num2) {
        return $num1 * $num2;
    }

    function rhombus($num1, $num2) {
        return (1/2) * $num1 * $num1;
    }

    function triangle($num1, $num2) {
        return (1/2) * $num1 * $num1;
    }

        if(isset($_POST['submit'])) {

            // input
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            // input operator
            $operator = $_POST['operator'];

            if($operator == "Square") {
                $result = square($num1, $num2);
                echo "Square Area is <b> $result </b><br>";
            }

            if($operator == "Square") {
                $result = rectangle($num1, $num2);
                echo "Rectangle Area is <b> $result </b><br>";
            }

            if($operator == "Square") {
                $result = rhombus($num1, $num2);
                echo "Rhombus Area is <b> $result </b><br>";
            }

            if($operator == "Square") {
                $result = triangle($num1, $num2);
                echo "Triangle Area is <b> $result </b><br>";
            }
        }
    ?>

</body>
</html>