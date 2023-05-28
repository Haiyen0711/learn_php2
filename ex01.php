<?php
function kiemTraSoChan($number) {
    if ($number % 2 == 0) {
        echo "Số $number là số chẵn.";
    } else {
        echo "Số $number không là số chẵn.";
    }
}


$number = 10; // Thay đổi giá trị số ở đây để kiểm tra


kiemTraSoChan($number);
?>


