<?php
$strs = ["eat", "tea", "tan", "ate", "nat", "bat"];
$result = [];

foreach ($strs as $value) {
    $key = count_chars($value, 1);
    $result[json_encode($key)][] = $value;
}
print_r($result);
