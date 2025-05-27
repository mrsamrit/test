<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>สูตรคูณด้วย PHP</title>
</head>
<body>
    <h2>โปรแกรมสูตรคูณ</h2>
    <form method="post">
        <label>กรอกแม่สูตรคูณ: </label>
        <input type="number" name="number" required>
        <button type="submit">แสดงสูตรคูณ</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = intval($_POST["number"]);
        echo "<h3>สูตรคูณแม่ $num</h3>";
        for ($i = 1; $i <= 12; $i++) {
            $result = $num * $i;
            echo "$num x $i = $result<br>";
        }
    }
    ?>
</body>
</html>
