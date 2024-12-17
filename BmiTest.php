<?php
// Function คำนวณ BMI
function calculateBMI($weight, $height) {
    if ($height <= 0) {
        return null;
    }
    return $weight / ($height * $height);
}

// Function แปลผล BMI
function interpretBMI($bmi) {
    if ($bmi < 18.5) {
        return [
            "status" => "น้ำหนักน้อยกว่ามาตรฐาน (ผอม)",
            "advice" => "คุณควรรับประทานอาหารที่มีพลังงานเพิ่มขึ้น และออกกำลังกายให้พอเหมาะ"
        ];
    } elseif ($bmi < 24.9) {
        return [
            "status" => "น้ำหนักอยู่ในเกณฑ์มาตรฐาน",
            "advice" => "คุณมีสุขภาพดี! รักษาน้ำหนักนี้ไว้ด้วยการออกกำลังกายและกินอาหารให้สมดุล"
        ];
    } elseif ($bmi < 29.9) {
        return [
            "status" => "น้ำหนักเกินมาตรฐาน (ท้วม)",
            "advice" => "ควรลดอาหารที่มีไขมันและน้ำตาล และออกกำลังกายสม่ำเสมอ"
        ];
    } else {
        return [
            "status" => "อ้วน (เกินมาตรฐานมาก)",
            "advice" => "ควรปรึกษาแพทย์และวางแผนการลดน้ำหนักอย่างเหมาะสม"
        ];
    }
}

// รับข้อมูลจากฟอร์ม
$first_name = htmlspecialchars($_POST['first_name']);
$last_name = htmlspecialchars($_POST['last_name']);
$age = (int)$_POST['age'];
$weight = (float)$_POST['weight'];
$height = (float)$_POST['height'] / 100; // แปลงเป็นเมตร

$bmi = calculateBMI($weight, $height);

if ($bmi !== null) {
    $result = interpretBMI($bmi);
} else {
    $result = [
        "status" => "ข้อผิดพลาด",
        "advice" => "กรุณากรอกส่วนสูงให้ถูกต้อง"
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการคำนวณ BMI</title>
    <style>
        /* Add your existing styles here */
    </style>
</head>
<body>
<div class="container">
    <h1>ผลการคำนวณ BMI</h1>
    <?php if ($bmi !== null): ?>
        <div class="result">
            <p><strong>ชื่อ:</strong> <?= $first_name . " " . $last_name; ?></p>
            <p><strong>อายุ:</strong> <?= $age; ?> ปี</p>
            <p><strong>ค่า BMI:</strong> <?= number_format($bmi, 2); ?> (<?= $result['status']; ?>)</p>
            <p><strong>คำแนะนำ:</strong> <?= $result['advice']; ?></p>
        </div>
    <?php else: ?>
        <div class="result">
            <p><?= $result['advice']; ?></p>
        </div>
    <?php endif; ?>
    <a href="BMI.php" style="display: inline-block; margin-top: 20px; padding: 10px; background: #ff7f50; color: white; text-decoration: none; border-radius: 8px;">กลับไปหน้าหลัก</a>
</div>
</body>
</html>
