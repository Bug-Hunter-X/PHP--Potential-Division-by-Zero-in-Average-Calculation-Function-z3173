# PHP: Potential Division by Zero in Average Calculation Function

This repository demonstrates a potential division by zero error in a PHP function designed to calculate the average of numbers in an array.  The function, `calculate_average`, fails to properly handle an empty input array, leading to a division by zero error.

The `bug.php` file contains the buggy code, while `bugSolution.php` provides a corrected version that addresses the issue.

## Bug Description

The `calculate_average` function does not check if the input array is empty before performing the division. If the array is empty, `count($numbers)` returns 0, resulting in a division by zero.

## Solution

The corrected function in `bugSolution.php` first checks for an empty array and returns 0 in that case. This prevents the division by zero error. 