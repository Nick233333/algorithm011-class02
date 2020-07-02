<?php

/**
 * 有效的字母异位词
 * 
 * 字母异位词解释：判断两个字符串是否由相同的字母组成，字母位置可以不相同
 *
 * @param string $s
 * @param string $t
 * @return boolean
 */
function isAnagram($s, $t) {
    // return count_chars($s, 1) == count_chars($t, 1);
    $arr1 = str_split($s);
    $arr2 = str_split($t);
    sort($arr1);
    sort($arr2);
    return implode('', $arr1) == implode('', $arr2) ? true : false;
}

print_r(isAnagram("anagram", "nagaram"));