
<?php


function isRoman(string $number): bool {
    return preg_match('/^[IVXLCDM]+$/i', $number) === 1;
}
//true if num is roman

function isBinary(string|int $number): bool {
    for ($i = 0; $i < strlen($number); $i++) {
        if ($number[$i] !== '0' && $number[$i] !== '1') {
            return false;
        }
        else return true;
    }
}
//true if num is binary

function isValidDecimal(string|int $number): bool|string {
    $hasSign = $number[0] === '+' || $number[0] === '-';
    $startIdx = $hasSign ? 1 : 0;

    if ($hasSign && strlen($number) > 1 && $number[$startIdx] === '0') {
        return "Error: Invalid decimal format";
    }

    for ($i = $startIdx; $i < strlen($number); $i++) {
        if ($number[$i] < '0' || $number[$i] > '9') {
            return false;
        }
    }

    return true;
}
//true if num is decimal


function checkNumberType(string|int $number): string {
    if (isRoman($number)) {
        return "Roman";
    } elseif (isBinary($number)) {
        return "Binary";
    } else {
        $decimalCheck = isValidDecimal($number);
        if ($decimalCheck === true) {
            return "Decimal";
        } elseif ($decimalCheck === "Error: Invalid decimal format") {
            return $decimalCheck;
        }
    }
    return "Invalid number format"; 
}
//checks num type and returns type


$numbers = ["+10", "-20", "001", "545", "IV", "101", "MFM", "+0123", "10", "VIII"];


foreach ($numbers as $num) {
    echo $num.": " . checkNumberType($num) . "<br>";
}
?>
