<?php

/**
 * 字母异位词分组
 * 
 * @param array $a
 * @return array
 */
function groupAnagrams($a) {
    $map = [];
    for ($i = 0; $i < count($a); $i++) {
        $arr = str_split($a[$i]);
        sort($arr);
        $tmpStr = implode("", $arr);
        $map[$tmpStr][] = $a[$i];
    }
    return array_values($map);
}

print_r((groupAnagrams(["eat","tea","tan","ate","nat","bat"])));