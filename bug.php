```php
function increment_array_values(array &$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$my_array = [1, 2, 3];
increment_array_values($my_array);
print_r($my_array); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

$my_array = [1, 2, 3];
$another_array = $my_array; // Creating a copy
increment_array_values($another_array);
print_r($my_array); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 ) // Unexpected!
```