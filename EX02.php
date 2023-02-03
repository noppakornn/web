<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter participants scores</title>
</head>
<body>
    <h2>Enter participants scores</h2>
    <form action="EX02.php" method="post">
        <br> P1 : <input type="text" name="operater[]" value=""> <br> 
        <br> P2 : <input type="text" name="operater[]" value=""> <br> 
        <br> P3 : <input type="text" name="operater[]" value=""> <br> 
        <br> P4 : <input type="text" name="operater[]" value=""> <br> 
        <br> P5 : <input type="text" name="operater[]" value=""> <br> <br> 
        <br> <input type="submit" name="submit"> <input type="reset" name="reset">
    </form> 
    <?php
        if(isset($_POST['submit'])) {
            $num = $_POST['operater'];
            $count = count($num);
            $sum = 0;
            
            sort($num); //เรียงน้อยไปมาก
            echo "<br> Min to Max : ";

            for($i = 0; $i < $count; $i++) {
                if($i == ($count - 1)) {
                    echo $num[$i];
                } else
                echo $num[$i].",";
            }
            echo "<br>";
            rsort($num); //เรียงมากไปน้อย
            echo "<br> Max to Min : ";

            for($i = 0; $i < $count; $i++) {
                if($i == ($count - 1)) {
                    echo $num[$i];
                } else
                echo $num[$i].",";
            }

            echo "<br><br> Min : " . max($num); //แสดงค่าน้อยที่สุด
            echo "<br><br> Max : " . min($num); //แสดงค่ามากที่สุด

            for ($i=0; $i < $count; $i++) {
                $sum += $num[$i];
            }           
            echo "<br><br> Sum : " . $sum; //ผลรวม 
        }
    ?>
</body>
</html>