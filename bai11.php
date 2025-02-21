<?php
// Khai báo số kWh tiêu thụ
$consumption = 120; // Bạn có thể thay đổi giá trị này để kiểm tra các trường hợp khác

// Khai báo mức giá
$price1 = 1678; // VNĐ/kWh cho 0-50 kWh
$price2 = 1734; // VNĐ/kWh cho 51-100 kWh
$price3 = 2014; // VNĐ/kWh cho trên 100 kWh

// Tính tiền điện phải trả
if ($consumption <= 50) {
    $total_price = $consumption * $price1;
} elseif ($consumption <= 100) {
    $total_price = 50 * $price1 + ($consumption - 50) * $price2;
} else {
    $total_price = 50 * $price1 + 50 * $price2 + ($consumption - 100) * $price3;
}

// In kết quả ra màn hình
echo "Số tiền điện phải trả cho {$consumption} kWh là: " . number_format($total_price, 0, ',', '.') . " VNĐ";
?>
