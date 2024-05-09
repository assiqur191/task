<?php

function searchInsert($nums, $target) {
    // Sorting the array
    sort($nums);
    
    $left = 0;
    $right = count($nums) - 1;
    
    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);
        
        if ($nums[$mid] == $target) {
            return $mid;
        } elseif ($nums[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
    
    // If target not found, return the index where it would be inserted
    return $left;
}

// Test cases
$testCases = [
    [1, 7, 3, 5, 6, 9, 15],
    [5, 6, 1, 3],
    [1, 3, 5, 6]
];

$targets = [5, 2, 7];

foreach ($testCases as $key => $nums) {
    $target = $targets[$key];
    echo "Test Case " . ($key + 1) . ":\n";
    echo "Input: nums = [" . implode(',', $nums) . "], target = $target\n";
    echo "Output: " . searchInsert($nums, $target) . "\n";
    echo "\n";
}
