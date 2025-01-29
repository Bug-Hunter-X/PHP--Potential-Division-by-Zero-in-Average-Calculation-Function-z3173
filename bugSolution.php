```php
function calculate_average($numbers) {
  if (empty($numbers)) {
    return 0; // Handle empty array
  }
  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count; // No longer a potential division by zero
}

$numbers = [];
$average = calculate_average($numbers);
echo "Average: " . $average;
```