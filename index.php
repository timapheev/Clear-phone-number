<?php
function removeNonDigits($input) {
    return preg_replace('/\D/', '', $input);
}

$phone = "+7 (987) 123 1212";
$cleanPhone = removeNonDigits($phone);
echo $cleanPhone; // Выведет: 79871231212
?>
