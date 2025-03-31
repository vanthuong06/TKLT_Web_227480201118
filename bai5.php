<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h2>Tính USCLN và BSCNN</h2>
    <form method="post">
        Số thứ nhất: <input type="number" name="num1" required><br><br>
        Số thứ hai: <input type="number" name="num2" required><br><br>
        <input type="submit" name="uscln" value="USCLN">
        <input type="submit" name="bscnn" value="BSCNN">
    </form>

    <?php
    function uscln($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }
    function bscnn($a, $b) {
        return ($a * $b) / uscln($a, $b);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = intval($_POST["num1"]);
        $num2 = intval($_POST["num2"]);

        if (isset($_POST["uscln"])) {
            echo "<p>Ước số chung lớn nhất của $num1 và $num2 là: " . uscln($num1, $num2) . "</p>";
        }
        if (isset($_POST["bscnn"])) {
            echo "<p>Bội số chung nhỏ nhất của $num1 và $num2 là: " . bscnn($num1, $num2) . "</p>";
        }
    }
    ?>
</body>
</html>