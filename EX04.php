<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> การสร้างฟอร์ม </title>
</head>
<body>
    <h2>การสร้างฟอร์ม</h2>
    <form action="EX04.php" method="post" name="form1" id="form1">
        Username : <br/>
        <input type="text" name="username" maxlength="25" /><br />
        <br />
        Password : <br/>
        <input type="password" name="password" maxlength="15" /><br />
        <br />
        Gender : 
        <select name="sex" >
            <option value="Male" > ชาย </option>
            <option value="Female"> หญิง </option>
        </select><br />
        <br />
        Education : 
        <select name="std">
            <option value="Not study"> - </option>
            <option value="Pratom"> ประถมศึกษา </option>
            <option value="Mattayom"> มัธยมศึกษา </option>
            <option value="Parinya"> ปริญญาบัตร </option>
            <option value="Successfull"> จบการศึกษา </option>
        </select><br />
        <br />
            
        <input type="submit" name="submit"/> <input type="reset" name="reset"/>

    </form>

    <?php
    
    function account($username, $sex, $std) {
        echo " Username : $username <br />";
        echo " Gender : $sex <br/>";
        echo " Education : $std <br/>";
    }
        if(isset($_POST['submit'])) {

            echo "<p>";
            echo "<b> ข้อมูลผู้ใช้ </b> <br /> <br />";
            
            $username = $_POST['username'];
            $sex = $_POST['sex'];
            $std = $_POST['std'];

            account($username, $sex, $std);
        }
    ?>

</body>
</html>