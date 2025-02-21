<?php
// Khai báo biến weight và height
$weight = 70;  // Cân nặng (kg)
$height = 1.75; // Chiều cao (m)

// Tính BMI
$bmi = $weight / ($height * $height);

// Xếp loại BMI
if ($bmi < 18.5) {
    $category = "Thiếu cân";
} elseif ($bmi >= 18.5 && $bmi < 24.9) {
    $category = "Bình thường";
} elseif ($bmi >= 25 && $bmi < 29.9) {
    $category = "Thừa cân";
} else {
    $category = "Béo phì";
}

// In kết quả
echo "Chỉ số BMI: " . number_format($bmi, 2) . "<br>";
echo "Xếp loại: $category";
?>
