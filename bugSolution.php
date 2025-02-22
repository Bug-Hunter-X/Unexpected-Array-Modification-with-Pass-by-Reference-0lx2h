```php
function increment_array_values(array $arr) {
  $newArray = [];
  foreach ($arr as $value) {
    $newArray[] = $value + 1;
  }
  return $newArray;
}

$my_array = [1, 2, 3];
$another_array = increment_array_values($my_array);
print_r($my_array); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 )
print_r($another_array); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )
```