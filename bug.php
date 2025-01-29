```php
function calculate_average($numbers) {
  if (empty($numbers)) {
    return 0; // Handle empty array
  }
  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count; // Potential division by zero if $count is 0
}

$numbers = [];
$average = calculate_average($numbers);
echo "Average: " . $average;
```