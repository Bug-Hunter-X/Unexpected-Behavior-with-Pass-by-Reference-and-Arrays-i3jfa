```php
<?php
function increment(&$var) {
  if (is_numeric($var)) {
    $var++;
  } elseif (is_array($var)){
    // Handle array case
    foreach ($var as &$val) {
        if(is_numeric($val)){
            $val++;
        }
    }
  } else {
    trigger_error('Unsupported variable type', E_USER_WARNING);
  }
}

$number = 5;
increment($number);
echo $number; // Outputs 6

$array = [1, 2, 3];
increment($array);
echo json_encode($array); // Outputs [2, 3, 4]
?>
```