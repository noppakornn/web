<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter participants score</title>
</head>
<body>

    <h2>Enter participants score</h2>

    <form action="Midterm01.php" method="post">
        
        P1 <input type="text" name="operator[]" value=""><br><br>
        P2 <input type="text" name="operator[]" value=""><br><br>
        P3 <input type="text" name="operator[]" value=""><br><br>
        P4 <input type="text" name="operator[]" value=""><br><br>
        P5 <input type="text" name="operator[]" value=""><br><br>
        P6 <input type="text" name="operator[]" value=""><br><br>
        P7 <input type="text" name="operator[]" value=""><br><br>
        P8 <input type="text" name="operator[]" value=""><br><br>
        P9 <input type="text" name="operator[]" value=""><br><br>
        P10 <input type="text" name="operator[]" value=""><br><br>

        <input type="submit" name="submit"> <input type="reset" name="reset">

    </form>
    
    <?php

        if(isset($_POST['submit'])) {

            $xxx = $_POST['operator'];
            $count = count($xxx);
            $sum = 0;

            sort($xxx); // min to max
            echo "<br> Min to Max : ";
            
            for ($i = 0; $i < $count; $i++) { 
                if($i == ($count - 1)) {
                    echo $xxx[$i];
                } else
                echo $xxx[$i] . ",";
            }

            echo "<br><br> Three Max : ";

            if($i == ($count - 1)) {
                echo $xxx[$i];
            } else
            echo $xxx[$count - 3] . ",";

            if($i == ($count - 1)) {
                echo $xxx[$i];
            } else
            echo $xxx[$count - 2] . ",";

            if($i == ($count - 1)) {
                echo $xxx[$i];
            } else
            echo $xxx[$count - 1];

            // Avg
            for ($i=0; $i < $count; $i++) {
                $sum += $xxx[$i];
            }

            $str = $sum / 10;
            echo "<br><br> Avg : " . $str;
        }
    ?>

</body>
</html>