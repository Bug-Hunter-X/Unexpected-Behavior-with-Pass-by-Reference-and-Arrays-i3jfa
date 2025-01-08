```php
<?php
function increment(&$var) {
  $var++;
}

$number = 5;
increment($number);
echo $number; // Outputs 6

$array = [1, 2, 3];
increment($array); // This will cause a warning
echo $array[0]; // Outputs 1, as the function does not actually increment array elements 
?>
```