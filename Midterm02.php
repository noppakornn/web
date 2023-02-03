<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณค่าโดยสาร</title>
</head>
<body>
    <h2>คำนวณค่าโดยสาร</h2>

    <form action="Midterm02.php" method="post">

        การเดินทาง <input type="radio" name="operator" value="fareCalculate_1">ในเมือง <input type="radio" name="operator" value="fareCalculate_2">ต่างจังหวัด<br><br>
        ค่าโดยสารรอบแรก <input type="text" name="numberX" value=""><br><br>
        ระยะทาง <input type="text" name="numberY" value=""><br><br>

        <input type="submit" name="submit" value="คำนวณ"> <input type="reset" name="reset" value="ล้างข้อมูล"><br><br>

    </form>

    <?php
    // function
    function fareCalculate_1($numberX) {
        return $numberX;
    }

    function fareCalculate_2($numberX) {
        return $numberX;
    }

    function fareCalculate_3($numberY) {
        return ($numberY - 1) * 5;
    }

    function fareCalculate_4($numberY) {
        return ($numberY - 1) * 10;
    }

        if(isset($_POST['submit'])) {
            // input
            $numberX = $_POST['numberX'];
            $numberY = $_POST['numberY'];
            // operator
            $operator = $_POST['operator'];

            echo "<p>";
            echo "<br> <i> ผลลัพธ์ <br>";
            echo "<br>*****************************<br>";

            // if check
            if($operator == "fareCalculate_1") {
                $a = fareCalculate_1($numberX);
                $b = fareCalculate_1($numberY);
                $c = fareCalculate_3($numberY);
                $d = $a + $c;
                echo "<br> การเดินทางในเมือง <br>";
                echo "<br> ค่าโดยสารในเมือง 5 บ./กม.<br>";
                echo "<br>*****************************<br>";
                echo "<br> ค่าโดยสารรอบแรก : <b> $a </b><br>";
                echo "<br> ระยะทาง : <b> $b </b><br>";
                echo "<br>*****************************<br>";
                echo "<br> ค่าบริการ 1 กม.แรก : <b> $a </b><br>";
                echo "<br> ค่าบริการ 2 กม.ขึ้นไป : <b> $c </b><br>";
                echo "<br>--------------------------------------------------<br>";
                echo "<br> ค่าใช้จ่ายทั้งหมด : <b> $d </b><br>";
            }

            if($operator == "fareCalculate_2") {
                $a = fareCalculate_2($numberX);
                $b = fareCalculate_2($numberY);
                $c = fareCalculate_4($numberY);
                $d = $a + $c;
                echo "<br> การเดินทางต่างจังหวัด <br>";
                echo "<br> ค่าโดยสารในเมือง 10 บ./กม.<br>";
                echo "<br>*****************************<br>";
                echo "<br> ค่าโดยสารรอบแรก : <b> $a </b><br>";
                echo "<br> ระยะทาง : <b> $b </b><br>";
                echo "<br>*****************************<br>";
                echo "<br> ค่าบริการ 1 กม.แรก : <b> $a </b><br>";
                echo "<br> ค่าบริการ 2 กม.ขึ้นไป : <b> $c </b><br>";
                echo "<br>--------------------------------------------------<br>";
                echo "<br> ค่าใช้จ่ายทั้งหมด : <b> $d </b><br>";
            }

        }
    ?>
    
</body>
</html>