<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Funtion</title>
</head>
<body>
    <h1>ทดสอบการสร้าง Funtion ทร่สร้างโดยผู้พัฒนาโปรแกรม</h1>
    <?php
    $name = "Natthaphon";
    Hello($name)
    //-----------------------------------------
    echo "<h3>ทดสอบการใช้ Function</h3>";
    $a = 5;
    $b = 8;
    $c = sum($a,$b);
    echo "$a + $b = $c <br>";
    echo "<h3>ทดสอบการใช้ Function แบบฦึกำารามิเอตอร์เป็น Reference</h3>";
    $num = 2;
    echo "Before ===> \$num = $num <br>"
    add_5($num);
    echo "After ===> \$num = $num"
    echo "<hr>"
    //-----------------------------------------
    bye();

    function add_5(&$value){
        $value += 5;
    }

    function Hello($yourname){
        echo "<h3>ผู้พัฒนาโปรแกรม</h3>";
        echo "<h3>" .$yourname. "</h3>";
        echo "<hr>"
    }
    function sum($x,$y){
        $z = $x + $y;
        return $z;
    }
    function bye(){
        echo "<hr>"
        echo "<h4>หลักสูตรวิทยาศาสตร์บันฑิต เทคโนโลยีสารสนเทศ</h4>"
        echo "<h4>คณะวิทยาศาสตร์ มหาวิทยาลัยราชภัฏอุดรธานี</h4>"
        echo "<hr>"
    }
    ?>
</body>
</html>