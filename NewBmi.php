<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมคำนวณค่า BMI</title>
    <style>
        /* Add your existing styles here */
    </style>
</head>
<body>
<div class="container">
    <h1>โปรแกรมคำนวณค่า BMI</h1>
    <form action="BMItest.php" method="POST">
        <label for="first_name">ชื่อ:</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">นามสกุล:</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="age">อายุ:</label>
        <input type="number" id="age" name="age" required>

        <label for="weight">น้ำหนัก (กก.):</label>
        <input type="number" id="weight" name="weight" required step="0.1">

        <label for="height">ส่วนสูง (ซม.):</label>
        <input type="number" id="height" name="height" required step="0.1">

        <button type="submit">คำนวณ BMI</button>
    </form>
</div>
</body>
</html>
