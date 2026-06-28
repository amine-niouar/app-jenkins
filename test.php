<?php

require 'index.php';

$passed = 0;
$failed = 0;

function assert_equal($actual, $expected, $testName) {
    global $passed, $failed;
    if ($actual === $expected) {
        echo "✅ PASSED: $testName\n";
        $passed++;
    } else {
        echo "❌ FAILED: $testName (expected $expected, got $actual)\n";
        $failed++;
    }
}

// tests
assert_equal(add(2, 3), 5, 'add 2 + 3');
assert_equal(add(0, 0), 0, 'add 0 + 0');
assert_equal(subtract(5, 2), 3, 'subtract 5 - 2');
assert_equal(subtract(10, 10), 0, 'subtract 10 - 10');

echo "\nResults: $passed passed, $failed failed\n";

if ($failed > 0) {
    exit(1);  // fail the pipeline if any test fails
}